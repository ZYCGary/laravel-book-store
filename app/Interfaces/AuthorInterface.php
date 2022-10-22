<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface AuthorInterface
{
    public function all(): Collection;
}
