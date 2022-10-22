<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
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
        //
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
