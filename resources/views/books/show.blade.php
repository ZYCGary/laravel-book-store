@extends('layouts.app')

@section('content')
    <h1 class="heading">Book Details</h1>

    <a href="{{ route('books.edit', $book) }}">
        <button class="btn-primary">Update</button>
    </a>

    <ul>
        <li>Title: {{ $book->title }}</li>
        <li>Author: {{ $book->author->name }}</li>
        <li>Description: {{ $book->description }}</li>
        <li>File: <a href="{{ $book->file_url }}" target="_blank">{{ $book->file_url }}</a></li>
        <li>Category: {{ $book->category }}</li>
        <li>ISBN: {{ $book->isbn }}</li>
    </ul>
@endsection

