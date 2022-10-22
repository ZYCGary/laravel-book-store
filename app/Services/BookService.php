<?php

namespace App\Services;

use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Database\Eloquent\Collection;
use Ramsey\Uuid\Type\Integer;

class BookService
{
    protected BookRepository $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function index(): Collection
    {
        return $this->bookRepository->all();
    }

    public function getById(Integer $id): Book
    {
        return $this->bookRepository->findById($id);
    }
}
