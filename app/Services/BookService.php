<?php

namespace App\Services;

use App\Events\BookCreated;
use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Database\Eloquent\Collection;
use Log;

class BookService
{
    protected BookRepository $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function getAll(): Collection
    {
        return $this->bookRepository->all();
    }

    public function getById(int $id): Book
    {
        return $this->bookRepository->findById($id);
    }

    public function create(array $attributes): Book
    {
        $newBook = $this->bookRepository->create($attributes);

        BookCreated::dispatch($newBook);

        return $newBook;
    }
}
