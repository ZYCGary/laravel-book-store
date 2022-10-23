@extends('layouts.app')

@section('content')
    <div>
        <h1 class="heading">Book List</h1>
        <ul>
            @foreach($books as $book)
                <li class="border p-2">
                    <p>Title: {{ $book->title }}</p>
                    <p>Author: {{ $book->author->name }}</p>
                    <p>Category: {{ $book->category }}</p>
                    <p>ISBN: {{ $book->isbn }}</p>
                    <a href="{{ route('books.show', $book) }}">
                        <button class="btn-primary">Details</button>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
