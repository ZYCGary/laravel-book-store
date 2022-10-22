@extends('layouts.app')

@section('content')
    <h1>Create A New Book</h1>

    @if ($errors->any())
        <div class="text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div>
            <label for="create_form_title">Title: </label>
            <input type="text" id="create_form_title" name="title">
        </div>

        <div>
            <label for="create_form_author">Author: </label>
            <select name="author_id" id="create_form_author">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="create_form_category">Category: </label>
            <select name="category" id="create_form_category">
                <option value="Fiction">Fiction</option>
                <option value="Non-fiction">Non-fiction</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div>
            <label for="create_form_description">Description: </label>
            <input type="text" id="create_form_description" name="description">
        </div>

        <div>
            <label for="create_form_file_url">File URL: </label>
            <input type="text" id="create_form_file_url" name="file_url">
        </div>

        <div>
            <label for="create_form_isbn">ISBN: </label>
            <input type="text" id="create_form_isbn" name="isbn">
        </div>

        <div>
            <button type="submit">Create</button>
        </div>
    </form>
@endsection
