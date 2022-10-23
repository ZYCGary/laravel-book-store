<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'author_id' => Author::all()->random()->id,
            'title' => fake()->sentence(3),
            'description' => fake()->realText,
            'file_url' => config('app.url'). "/test-file.pdf",
            'category' => fake()->randomElement(['Fiction', 'Non-fiction', 'Other']),
            'isbn' => fake()->numerify('###-#-#####-###-#'),
        ];
    }
}
