<?php
namespace App\Http\Controllers;

use App\Models\Book; //nganhi kay na books ko ni instead of book 
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Show the list of books
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

   
    public function store(Request $request)
    {
       //unique kay prevent duplicate isbn
        $validated = $request->validate([
            'title'    => 'required|string|max:255',
            'author'   => 'required|string|max:255',
            'isbn'     => 'required|string|unique:books,isbn', 
            'quantity' => 'required|integer|min:1',
        ]);

        
        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'et voilà! Successfully added!');
    }
}