<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentsUpdateRequest extends FormRequest
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
        return [
            'author_id'=>'integer|exists:users,id',
            'article_id'=>'integer|exists:articles,id',
            'body'=>'text',
        ];
    }
}
