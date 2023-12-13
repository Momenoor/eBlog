<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {

        return [
            'name' => 'required|unique:users,name,' . $this->id,
            'email' => 'required|email|unique:users,email,' . $this->id,
            'password' => 'same:confirm-password',
            'role_id' => 'required|exists:roles,id',

        ];
    }
}
