<?php

namespace App\Repositories;

use App\Interfaces\AuthorInterface;
use App\Models\Author;
use Illuminate\Database\Eloquent\Collection;

class AuthorRepository implements AuthorInterface
{
    public function all(): Collection
    {
        return Author::all();
    }
}
