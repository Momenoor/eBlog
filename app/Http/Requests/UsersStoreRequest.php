<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PHPUnit\Framework\Constraint\IsTrue;
use Illuminate\Support\Str;

class UsersStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        if ($this->has('name')) {
            $this->merge([
                'bio' => Str::bio($this->name),
                'role_id' => 1,
            ]);
        }
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required'],
            'profile_photo_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bio' => 'string|max:160',

        ];
    }
}
