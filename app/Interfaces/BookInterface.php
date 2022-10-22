<?php

namespace App\Interfaces;

use App\Models\Book;
use Ramsey\Uuid\Type\Integer;

interface BookInterface
{
    public function all();

    public function findById(Integer $id): Book;
}
