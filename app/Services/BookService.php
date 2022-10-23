<?php

namespace App\Services;

use App\Events\BookCreated;
use App\Http\Requests\StoreBookRequest;
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
            // Store upload file under the public path: /uploads.
            $filename = time() . '.pdf';
            $request->file('file')?->move(public_path('uploads'), $filename);

            // Store the book information into database.
            $attributes = $request->all();
            $attributes['file_url'] = "/uploads/$filename";
            $newBook = $this->bookRepository->create($attributes);

            BookCreated::dispatch($newBook);

            return $newBook;
        }

        return null;
    }

    public function update(Book $book, array $attributes): void
    {
        $this->bookRepository->update($book, $attributes);
    }
}
