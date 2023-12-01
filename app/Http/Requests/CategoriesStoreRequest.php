<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PHPUnit\Framework\Constraint\IsTrue;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CategoriesStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if ($this->has('name')) {
            $this->merge([
                'slug' => Str::slug($this->name),
                'created_by' => Auth::id(),
            ]);
        }

        return [
            'name' => 'required',
            'slug' => 'required|unique:categories,slug',
            'description' => 'nullable|string',
            'created_by' => 'integer|exists:users,id',

        ];
    }
}
