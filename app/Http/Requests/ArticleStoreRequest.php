<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

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
        if ($this->has('title')) {
            $this->merge([
                'slug' => Str::slug($this->title),
                'author_id' => Auth::id(),
            ]);
        }

        return [
            'title' => 'required',
            'slug' => 'required|unique:articles,slug',
            'body' => 'required',
            'author_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'status' => 'integer',
            'is_pinned' => 'boolean',
            'submitted_at' => 'date|nullable',
            'approved_at' => 'date|nullable',
            'published_at' => 'date|nullable',
            'declined_at' => 'date|nullable',
            //'hero_image_id' => 'image:jpeg,png,jpg,gif,svg',
        ];
    }
}
