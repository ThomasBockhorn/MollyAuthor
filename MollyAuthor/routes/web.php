<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;
use App\Models\Book;
use App\Models\Events;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//---------------------- Frontend routes ----------------------//
Route::get('/', function () {
    $events = Events::all();

    return Inertia::render('Welcome', compact('events'));
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/bio', function () {
    return Inertia::render('Bio');
})->name('bio');

Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');

Route::get('/book', function () {
    $books = Book::all();

    return Inertia::render('Books', compact('books'));
})->name('books');

//---------------------- Backend routes ----------------------//
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/books', BooksController::class)->except(['show']);
    Route::resource('/events', EventsController::class);
});

require __DIR__.'/auth.php';
