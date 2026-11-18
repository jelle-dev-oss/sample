<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Database\Factories\BookFactory; 

class Book extends Model //not na guba but nagka error ang "book" kay na "books" 
{
    use HasFactory;
    // inputs are fillable and allowed to be save sa datbase
    protected $fillable = ['id', 'title', 'author', 'isbn', 'quantity'];
    

    public function authors(): BelongsToMany
    {
        return $this->belongsToMany(Author::class);
    }

    public function borrowings()
    {
        return $this->hasMany(Borrowing::class); // One book can have many borrowing records over time.
        //hasMany means one to many relationship.
    }
    protected static function newFactory()
    {
        return BookFactory::new();
    }
}