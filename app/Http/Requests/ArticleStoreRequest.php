<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStoreRequest extends FormRequest
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
            'title' => 'required',
            'slug' => 'required|unique:articles,slug',
            'body' => 'required',
            'author_id' => 'required|exists:users,id',
            'status' => 'required|integer',
            'is_pinned'=>'required|boolean',
            'submitted_at'=>'date',
            'approved_at'=>'date',
            'published_at'=>'date',
            'declined_at'=>'date',
            'hero_image_id'=>'image:jpeg,png,jpg,gif,svg',
        ];
    }
}
