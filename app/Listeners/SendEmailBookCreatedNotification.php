<?php

namespace App\Listeners;

use App\Events\BookCreated;
use App\Mail\BookCreated as BookCreatedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class SendEmailBookCreatedNotification implements ShouldQueue
{
    public function handle(BookCreated $event): void
    {
        Mail::to(config('mail.from.address'))->send(new BookCreatedMail($event->book));
    }
}
