<?php

namespace App\Services;

use App\Events\BookCreated;
use App\Handlers\FileUploadHandler;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Database\Eloquent\Collection;

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
     * Create and store a new book.
     *
     * @param StoreBookRequest $request
     * @return Book|null
     */
    public function store(StoreBookRequest $request): ?Book
    {
        $file = $request->file('file');

        if ($file) {
            $attributes = $request->all();

            // Store upload file under the public path: /uploads.
            $attributes['file_url'] = FileUploadHandler::upload($file);

            $newBook = $this->bookRepository->create($attributes);

            BookCreated::dispatch($newBook);

            return $newBook;
        }

        return null;
    }

    public function update(Book $book, UpdateBookRequest $request): void
    {
        $file = $request->file('file');
        $attributes = $request->all();

        if ($file) {
            // Store upload file under the public path: /uploads.
            $attributes['file_url'] = FileUploadHandler::upload($file);
        }

        // Update book information.
        $this->bookRepository->update($book, $attributes);
    }
}
