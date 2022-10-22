<?php

namespace App\Repositories;

use App\Interfaces\BookInterface;
use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;
use Ramsey\Uuid\Type\Integer;

class BookRepository implements BookInterface
{
    public function all(): Collection
    {
        return Book::all();
    }

    public function findById(Integer $id): Book
    {
        return Book::findOrFail($id);
    }
}
