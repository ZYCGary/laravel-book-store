@extends('layouts.app')

@section('content')
    <div>
        <h1>Book List</h1>
        <ul>
            @foreach($books as $book)
                <li>
                    <p>Title: {{ $book->title }}</p>
                    <p>Author: {{ $book->author->name }}</p>
                    <p>Category: {{ $book->category }}</p>
                    <p>ISBN: {{ $book->isbn }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
