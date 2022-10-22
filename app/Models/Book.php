<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['author_id', 'title', 'description', 'file_url', 'category', 'isbn'];

    /**
     * Get the author of the book.
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
