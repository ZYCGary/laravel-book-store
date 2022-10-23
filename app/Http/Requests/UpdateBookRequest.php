<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class UpdateBookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $book = $this->route('book');

        return [
            'title' => ['required', 'string'],
            'author_id' => ['required', 'numeric', Rule::exists('authors', 'id')],
            'description' => ['string', 'nullable'],
            'file' => [File::types(['pdf']), 'nullable'],
            'category' => ['required', 'string', Rule::in(['Fiction', 'Non-fiction', 'Other'])],
            'isbn' => ['required', 'string', Rule::unique('books')->ignore($book->id)]
        ];
    }
}
