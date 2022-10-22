<?php

namespace App\Http\Requests;

use App\Models\Author;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'author_id' => ['required', 'numeric', Rule::exists('authors', 'id')],
            'description' => ['string', 'nullable'],
            'file_url' => ['required', 'string'],
            'category' => ['required', 'string', Rule::in(['Fiction', 'Non-fiction', 'Other'])],
            'isbn' => ['required', 'string', Rule::unique('books')]
        ];
    }
}
