<?php

namespace App\Http\Requests\blog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('store', Post::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'body' => 'required|min:10',
            'excerpt' => 'required|string|max:255',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'thumbnail' => 'image|mimes:jpeg,png,gif|max:2048'
        ];
    }
}