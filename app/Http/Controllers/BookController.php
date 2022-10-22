<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Services\AuthorService;
use App\Services\BookService;
use Illuminate\Http\RedirectResponse;

class BookController extends Controller
{
    protected BookService $bookService;
    protected AuthorService $authorService;

    public function __construct(BookService $bookService, AuthorService $authorService)
    {
        $this->bookService = $bookService;
        $this->authorService = $authorService;
    }

    public function index()
    {
        $books = $this->bookService->getAll();

        return view('books.index', compact('books'));
    }

    public function create()
    {
        $authors = $this->authorService->getAll();

        return view('books.create', compact('authors'));
    }

    public function store(StoreBookRequest $request): RedirectResponse
    {
        $book = $this->bookService->create($request->all());

        return redirect()->route('books.show', compact('book'));
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
