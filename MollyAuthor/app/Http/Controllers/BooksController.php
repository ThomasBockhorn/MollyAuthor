<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Inertia\Response
    {
        $books = Book::all();

        return Inertia::render('Resources/Books/index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Inertia\Response
    {
        return Inertia::render('Resources/Books/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request): \Illuminate\Http\RedirectResponse
    {

        if ($request->hasFile('cover')) {
            $fileName = time().'.'.$request->cover->extension();

            $request->cover->storeAs('public/covers', $fileName);
        }

        Book::create([
            'title' => $request->title,
            'cover' => $fileName,
            'description' => $request->description,
            'genre' => $request->genre,
            'purchase_link' => $request->purchase_link,
            'purchase_second_link' => $request->purchase_second_link ?? '',
            'purchase_third_link' => $request->purchase_third_link ?? '',
        ]);

        return redirect()->route('books.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book): \Inertia\Response
    {
        return Inertia::render('Resources/Books/edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request , Book $book)
    {
        if ($request->hasFile('cover')) {
            $fileName = time().'.'.$request->cover->extension();

            Storage::delete('public/covers/'.$book->cover);

            $request->cover->storeAs('public/covers', $fileName);
        }

        $book->update([
            'title' => $request->title,
            'cover' => $fileName,
            'description' => $request->description,
            'genre' => $request->genre,
            'purchase_link' => $request->purchase_link,
            'purchase_second_link' => $request->purchase_second_link ?? '',
            'purchase_third_link' => $request->purchase_third_link ?? '',
        ]);

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {

        Storage::delete('public/covers/'.$book->cover);

        $book->delete();

        $books = Book::all();

        return Inertia::render('Resources/Books/index', compact('books'));
    }
}
