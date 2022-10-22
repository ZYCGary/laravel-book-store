<?php

namespace App\Interfaces;

use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;

interface BookInterface
{
    public function all(): Collection;

    public function findById(int $id): Book;

    public function create(array $attributes): Book;
}
