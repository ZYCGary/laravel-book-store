<?php

namespace App\Repositories;

use App\Interfaces\BookInterface;
use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;

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
}
