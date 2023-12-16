<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'profile_photo_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'bio' => 'string|max:160',
        ]);
    }


    public function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $profilePhotoPath = $this->uploadImage($data, $user);

        if ($profilePhotoPath) {
            $user->update(['profile_photo_path' => $profilePhotoPath]);
        }

        return $user;
    }


    protected function uploadImage($data, $user)
    {
        if (isset($data['profile_photo_path']) && $data['profile_photo_path']->isValid()) {
            $image = $data['profile_photo_path'];
            $imageName = $user->id . '-' . time() . '-app.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);

            return 'images/' . $imageName;
        }

        return null; // or any default value you prefer if no image is provided
    }
}
