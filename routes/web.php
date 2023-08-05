<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrarianController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/books',[LibrarianController::class,"books"]);
Route::post('/add_books',[LibrarianController::class,"add_books"]);
Route::get('/delete_books/{id}',[LibrarianController::class,"delete_books"]);
Route::get('/home',[LibrarianController::class,"home"]);
