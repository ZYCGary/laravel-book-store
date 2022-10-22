<?php

namespace App\Listeners;

use App\Events\BookCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Log;

class LogBookCreated
{
    public function handle(BookCreated $event): void
    {
        $book = $event->book;

        Log::info("[Event] New Book Created\n"
            . "Title: ${book['title']}\n"
            . "Author ID: ${book['author_id']}\n"
            . "Category: ${book['category']}\n"
            . "Description: ${book['description']}\n"
            . "File URL: ${book['file_url']}\n"
            . "ISBN: ${book['isbn']}\n");
    }
}
