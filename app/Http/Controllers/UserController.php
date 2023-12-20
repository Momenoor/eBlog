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

use Illuminate\Support\Facades\File;
use Tonysm\TurboLaravel\Facades\Turbo;

class UserController extends Controller

{
    public function index(Request $request)

    {
        $roles = Role::pluck('name', 'name');

        $users = User::latest()->paginate(5);

        return view('users.index', compact('users', 'roles'));
    }


    public function create()

    {
        $roles = Role::pluck('name', 'name')->all();
        $users = User::latest()->paginate(5);

        return view('users.index', compact('users', 'roles'));
    }


    public function store(UserStoreRequest $request)

    {

        DB::beginTransaction();

        try {
            // create user
            $user = User::create($request->all());
            // upload image to storage and update user with image path
            if ($request->hasFile('profile_photo_path')) {
                $image = $request->file('profile_photo_path');
                $imageName = $user->id . '-' . time() . '-app.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/'), $imageName);

                $user->update([
                    'profile_photo_path' => 'images/' . $imageName,
                ]);
            }

            $user->update([
                'password' => Hash::make($request->input('password')),
            ]);

            $user->syncRoles($request->input('role_id'));

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
        } finally {
            // redirect to index
            return redirect()->route('users.index');
        }
    }



    public function show($id)

    {

        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();

        return view('users.view', compact('user', 'roles'));
    }


    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name');
        $userRoles = $user->roles->pluck('name', 'name');
        return view('users.index', compact('user', 'roles', 'userRoles'));
        //return turbo_stream()->update('userForm', view('users._turbo', compact('user', 'roles', 'userRoles')));
    }



    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'roles' => 'required|array',
        ]);

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        $user->syncRoles($request->input('roles'));

        if ($request->hasFile('profile_photo_path')) {
            $profilePhotoPath = $request->file('profile_photo_path')->store('profile-photos', 'public');
            $user->update(['profile_photo_path' => $profilePhotoPath]);
        }

        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        if (!$user->articles()->exists()) {
            $user->delete();
        }
        return redirect()->route('users.index');
    }
}
