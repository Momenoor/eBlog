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

class UserController extends Controller

{
    public function index(Request $request)

    {
        $roles = Role::pluck('name', 'name')->all();

        $users = User::latest()->paginate(5);

        return view('users.index', compact('users', 'roles'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
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

        $roles = Role::pluck('name', 'name')->all();

        $userRole = $user->roles->pluck('name', 'name')->all();
        return view('users.index', compact('user', 'roles', 'userRole'));
    }


    public function update(UserUpdateRequest $request, User $user)

    {
        $input = $request->all();

        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, ['password']);
        }

        if ($request->hasFile('profile_photo_path')) {
            if (!empty($user->profile_photo_path)) {
                $previousImagePath = public_path($user->profile_photo_path);
                if (File::exists($previousImagePath)) {
                    File::delete($previousImagePath);
                }
            }

            $image = $request->file('profile_photo_path');
            $imageName = $user->id . '-' . time() . '-app.' . $image->getClientOriginalExtension();
            $size = $image->getSize();
            $image->move(public_path('images/'), $imageName);

            $input['profile_photo_path'] = 'images/' . $imageName;
        }

        $user->update($input);

        // Sync roles
        $user->syncRoles($request->input('roles'));

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
