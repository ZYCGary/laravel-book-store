<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Seed 5 authors with 3 books each.
        Author::factory()
            ->count(5)
            ->hasBooks(3)
            ->create();
    }
}
