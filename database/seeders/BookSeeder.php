<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Seed 20 books.
        Book::factory()->count(20)->create();
    }
}
