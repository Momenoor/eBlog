<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Article;

class CommentsStoreRequest extends FormRequest
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
        if (auth()->check()) {
            $this->merge([
                'author_id' => auth()->user()->id,
            ]);
        }
        return [
            'author_id' => 'required|exists:users,id',
            'article_id' => 'sometimes|required|exists:articles,id',
            'body' => 'required',
        ];
    }
}
