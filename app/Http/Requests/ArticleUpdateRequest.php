<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class ArticleUpdateRequest extends FormRequest
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
                'slug' => Str::slug($this->get('title')),
            ]);
        }
        if (auth()->check()) {
            $this->merge([
                'author_id' => auth()->user()->id,
            ]);
        }

        return [
            'title' => 'required|unique:articles,title,' . $this->article->id,
            'slug' => 'required|unique:articles,slug,' . $this->article->id,
            'body' => 'required',
            'author_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'status' => 'integer',
            'is_pinned' => 'boolean',
            'submitted_at' => 'date|nullable',
            'approved_at' => 'date|nullable',
            'published_at' => 'date|nullable',
            'declined_at' => 'date|nullable',
            'hero_image_id' => 'sometimes|required',
            'tags.*' => 'exists:tags,id',

        ];
    }
}
