
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/members', [MemberController::class, 'index']);
Route::get('/books', [BookController::class, 'index']);


