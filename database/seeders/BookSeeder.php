<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'Harry Potter',
                'author' => 'J.K. Rowling',
                'isbn' => '9780000000001',
                'quantity' => 5,
            ],
            [
                'title' => 'The Little Prince',
                'author' => 'Antoine de Saint-Exupery',
                'isbn' => '9780000000002',
                'quantity' => 3,
            ],
            [
                'title' => 'Noli Me Tangere',
                'author' => 'Jose Rizal',
                'isbn' => '9780000000003',
                'quantity' => 4,
            ],
            [
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'isbn' => '9780000000004',
                'quantity' => 6,
            ],
            [
                'title' => 'Alice in Wonderland',
                'author' => 'Lewis Carroll',
                'isbn' => '9780000000005',
                'quantity' => 2,
            ],
        ];

        foreach ($books as $book) {
            DB::table('books')->updateOrInsert(
                ['isbn' => $book['isbn']],
                array_merge($book, [
                    'created_at' => now(),
                    'updated_at' => now(),
                ])
            );
        }
    }
}
