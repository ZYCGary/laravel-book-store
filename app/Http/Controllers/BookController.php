<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Services\BookService;

class BookController extends Controller
{
    protected BookService $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function index()
    {
        $books = $this->bookService->index();

        return view('books.index', compact('books'));
    }

    public function create()
    {
        //
    }

    public function store(StoreBookRequest $request)
    {
        //
    }

    public function show(Book $book)
    {
        $book = $this->bookService->getById($book->id);

        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        //
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    public function destroy(Book $book)
    {
        //
    }
}
