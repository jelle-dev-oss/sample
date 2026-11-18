<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book; //gi tangal ang s 

class BookSeeder extends Seeder
{
    public function run(): void
    {
        // This creates 10 fake books
        Book::factory()->count(10)->create();
    }
}