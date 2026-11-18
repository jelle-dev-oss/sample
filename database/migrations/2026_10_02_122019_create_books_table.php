<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
        Schema::create('books', function (Blueprint $table) { //para himo sa 'books' nga table sa database.
            $table->id(); // Creates an auto-incrementing primary key column named 'id'.
            $table->string('title'); // Creates a string column named 'title' for the book's title.
            $table->string('author'); // Creates a string column named 'author' for the book's author.
            $table->string('isbn')->unique(); // Creates a unique string column named 'isbn' for the book's standard book number.
            $table->integer('quantity')->default(1); // Creates an integer column named 'quantity' with a default value of 1.
            $table->timestamps(); // Creates 'created_at' and 'updated_at' timestamp columns.
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void  // This function is used when we want to undo the migration.
    {
        Schema::dropIfExists('books'); // Deletes the 'books' table if it exists in the database.
    }
};
