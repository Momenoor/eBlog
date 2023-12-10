<?php



namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\RolesStoreRequest;
use App\Http\Requests\RolesUpdateRequest;

class RoleController extends Controller

{

    /*  function __construct()

    {

        $this->middleware('permission:Create-Article|Edit-Article|Create-Role|Delete-Article', ['only' => ['index', 'store']]);

        $this->middleware('permission:Create-Article', ['only' => ['create', 'store']]);

        $this->middleware('permission:Create-Role', ['only' => ['edit', 'update']]);

        $this->middleware('permission:Delete-Article', ['only' => ['destroy']]);
    }
*/

    public function index(Request $request)
    {
        $roles = Role::orderBy('id', 'DESC')->paginate(5);
        $permissions = Permission::get();
        $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
            ->get();
        return view('role.index', compact('roles', 'permissions', 'rolePermissions'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $roles = Role::orderBy('id', 'DESC')->paginate(5);

        $permissions = Permission::get();
        return view('role.index', compact('permissions', 'roles'));
    }

    public function store(RolesStoreRequest $request)
    {

        /*
        $role = Role::create(['name' => $request->input('name')]);
        dd($request->input('permissions'));
        $role->syncPermissions($request->input('permissions'));
        $role->syncPermissions($request->input('permissions'), 'web');
        */

        // Create a new role
        $role = Role::create(['name' => $request->input('name')]);

        // Get permissions for create, edit, and delete separately
        $createPermissions = $request->input('permissions.create', []);
        $editPermissions = $request->input('permissions.edit', []);
        $deletePermissions = $request->input('permissions.delete', []);

        // Attach the permissions for each action separately
        $this->syncPermissions($role, $createPermissions, 'create');
        $this->syncPermissions($role, $editPermissions, 'edit');
        $this->syncPermissions($role, $deletePermissions, 'delete');


        return redirect()->route('role.index');
    }

    private function syncPermissions(Role $role, array $permissions, string $action)
    {
        $role->syncPermissions($permissions, $action);
    }

    public function show($id)
    {

        $role = Role::find($id);

        $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")

            ->where("role_has_permissions.role_id", $id)

            ->get();
        return view('role.view', compact('role', 'rolePermissions'));
    }



    public function edit($id)

    {

        $role = Role::find($id);

        $permission = Permission::get();

        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)

            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')

            ->all();

        return view('roles.edit', compact('role', 'permission', 'rolePermissions'));
    }



    public function update(RolesUpdateRequest $request, $id)

    {

        $role = Role::find($id);

        $role->name = $request->input('name');

        $role->save();
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index')

            ->with('success', 'Role updated successfully');
    }


    public function destroy($id)

    {

        DB::table("roles")->where('id', $id)->delete();

        return redirect()->route('roles.index')

            ->with('success', 'Role deleted successfully');
    }
}
