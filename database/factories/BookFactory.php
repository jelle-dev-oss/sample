<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

// nag usab nganhi kay mag error ika seeder//

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    // This explicitly tells the factory which model to use
    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(), 
            'author' => $this->faker->name(), 
            'isbn' => $this->faker->unique()->isbn13(), 
            'quantity' => $this->faker->numberBetween(1, 10), 
        ];
    }
}
