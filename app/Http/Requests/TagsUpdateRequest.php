<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class TagsUpdateRequest extends FormRequest
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
                'slug' => Str::slug($this->get('name')),
            ]);
        }
        return [
            'name' => 'required|unique',
            'slug' => 'required|unique:tags,slug,' . $this->tag->id,
            'description' => 'string',
        ];
    }
}
