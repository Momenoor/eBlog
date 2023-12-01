<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        if ($this->has('name')) {
            $this->merge([
                'slug' => Str::slug($this->get('name')),
            ]);
        }
        if (auth()->check()) {
            $this->merge([
                'created_by' => Auth::id(),
            ]);
        }

        return [
            'name' => 'required|unique:categories,name',
            'slug' => 'required|unique:categories,slug',
            'description' => 'nullable|string',
            'created_by' => 'integer|exists:users,id',

        ];
    }
}
