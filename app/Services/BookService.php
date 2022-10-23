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

    /**
     * Get the collection of all books.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->bookRepository->all();
    }


    /**
     * Get the book by book ID.
     *
     * @param int $id
     * @return Book
     */
    public function getById(int $id): Book
    {
        return $this->bookRepository->findById($id);
    }

    /**
     * Create a new book by book attributes.
     *
     * @param array $attributes
     * @return Book
     */
    public function create(array $attributes): Book
    {
        $newBook = $this->bookRepository->create($attributes);

        BookCreated::dispatch($newBook);

        return $newBook;
    }

    public function update(Book $book, array $attributes): void
    {
        $this->bookRepository->update($book, $attributes);
    }
}
