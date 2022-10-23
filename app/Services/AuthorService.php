<?php

namespace App\Services;

use App\Repositories\AuthorRepository;
use Illuminate\Database\Eloquent\Collection;

class AuthorService
{
    protected AuthorRepository $authorRepository;

    public function __construct(AuthorRepository $authorRepository)
    {
        $this->authorRepository = $authorRepository;
    }

    /**
     * Get the collection of all authors.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->authorRepository->all();
    }
}
