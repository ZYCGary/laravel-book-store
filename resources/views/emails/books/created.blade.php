<h1>A New Book Created</h1>

<div>
    <p>Title: {{ $book->title }}</p>
    <p>Author ID: {{ $book->author_id }}</p>
    <p>Category: {{ $book->category }}</p>
    <p>Description: {{ $book->description }}</p>
    <p>File URL: {{ config('app.url') . $book->file_url }}</p>
    <p>ISBN: {{ $book->isbn }}</p>
</div>
