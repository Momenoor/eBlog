<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\User;

use Spatie\Permission\Models\Role;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Arr;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;


class UserController extends Controller

{


    public function index(Request $request)

    {
        $roles = Role::pluck('name', 'name')->all();


        $data = User::orderBy('id', 'DESC')->paginate(5);


        return view('users.index', compact('data', 'roles'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    public function create()

    {
        $roles = Role::pluck('name', 'name')->all();


        $data = User::orderBy('id', 'DESC')->paginate(5);

        return view('users.index', compact('data', 'roles'));
    }


    public function store(UserStoreRequest $request)

    {

        $input = $request->all();

        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        return redirect()->route('users.index');
    }



    public function show($id)

    {

        $user = User::find($id);

        return view('users.view', compact('user'));
    }



    public function edit($id)

    {
        $user = User::find($id);

        $roles = Role::pluck('name', 'name')->all();

        $userRole = $user->roles->pluck('name', 'name')->all();
        return view('users.edit', compact('user', 'roles', 'userRole'));
    }


    public function update(UserUpdateRequest $request, $id)

    {
        $input = $request->all();

        if (!empty($input['password'])) {

            $input['password'] = Hash::make($input['password']);
        } else {

            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);

        $user->update($input);

        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));
        return redirect()->route('users.index');
    }



    public function destroy($id)

    {

        User::find($id)->delete();

        return redirect()->route('users.index')

            ->with('success', 'User deleted successfully');
    }
}
