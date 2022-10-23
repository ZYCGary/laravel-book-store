<?php

namespace App\Repositories;

use App\Interfaces\BookInterface;
use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;
use function PHPUnit\Framework\at;

class BookRepository implements BookInterface
{
    public function all(): Collection
    {
        return Book::all();
    }

    public function findById(int $id): Book
    {
        return Book::findOrFail($id);
    }

    public function create(array $attributes): Book
    {
        return Book::create($attributes);
    }

    public function update(Book $book, array $attributes): void
    {
        $book->title = $attributes['title'] ?? $book->title;
        $book->author_id = $attributes['author_id'] ?? $book->author_id;
        $book->description = $attributes['description'] ?? $book->description;
        $book->category = $attributes['category'] ?? $book->category;
        $book->file_url = $attributes['file_url'] ?? $book->file_url;
        $book->isbn = $attributes['isbn'] ?? $book->isbn;

        $book->save();
    }
}
