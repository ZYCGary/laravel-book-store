@extends('layouts.app')

@section('content')
    <h1>Book Details</h1>

    <ul>
        <li>Title: {{ $book->title }}</li>
        <li>Author: {{ $book->author->name }}</li>
        <li>Description: {{ $book->description }}</li>
        <li>File: <a href="{{ $book->file_url }}">{{ $book->file_url }}</a></li>
        <li>Category: {{ $book->category }}</li>
        <li>ISBN: {{ $book->isbn }}</li>
    </ul>
@endsection

