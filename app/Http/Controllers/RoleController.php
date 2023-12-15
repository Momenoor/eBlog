<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\RolesStoreRequest;
use App\Http\Requests\RolesUpdateRequest;

class RoleController extends Controller

{

    /* function __construct()

    {

        $this->middleware('permission:article-create|Edit-Article|Create-Role|Delete-Article', ['only' => ['index', 'store']]);

        $this->middleware('permission:Create-Article', ['only' => ['create', 'store']]);

        $this->middleware('permission:Create-Role', ['only' => ['edit', 'update']]);

        $this->middleware('permission:Delete-Article', ['only' => ['destroy']]);
    }

*/
    public function index()
    {
        $roles = Role::with(['permissions', 'users'])->orderBy('id', 'DESC')->get();

        $permissions = Permission::all()->map(function ($permission) {
            [$category, $action] = explode('-', $permission->name);
            return [$category => ['permission' => $permission, 'action' => $action]];
        })->reduce(function ($carry, $item) {
            $key = array_key_first($item);
            $carry[$key][] = $item[$key];
            return $carry;
        }, []);


        return view('role.index', compact('roles', 'permissions'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('role.index', compact('permissions'));
    }

    public function store(RolesStoreRequest $request)
    {

        // Create a new role
        $role = Role::create($request->all());
        $role->syncPermissions($request->get('permissions'));

        return redirect()->route('role.index');
    }

    public function show($id)
    {

        $role = Role::find($id);

        $permissions = Permission::all()->map(function ($permission) {
            [$category, $action] = explode('-', $permission->name);
            return [$category => ['permission' => $permission, 'action' => $action]];
        })->reduce(function ($carry, $item) {
            $key = array_key_first($item);
            $carry[$key][] = $item[$key];
            return $carry;
        }, []);

        return view('role.view', compact('role', 'permissions'));
    }


    public function edit($id)

    {

        $role = Role::find($id);

        $permission = Permission::all();

        return view('role.index', compact('role', 'permission'));
    }


    public function update(RolesUpdateRequest $request, Role $role)
    {

        $role->fill($request->all());

        $role->save();
        $role->syncPermissions($request->get('permissions'));

        return redirect()->route('role.index');
    }


    public function destroy(Role $role)

    {
        DB::table("roles")->where('id', $role->id)->delete();

        return redirect()->route('role.index')
            ->with('success', 'Role deleted successfully');
    }
}
