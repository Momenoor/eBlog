<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoriesUpdateRequest extends FormRequest
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
        return [
            'name' => 'required|unique:categories,name,' . $this->category->id,
            'slug' => 'required|unique:categories,slug,' . $this->category->id,
            'description' => 'string',
        ];
    }
}
