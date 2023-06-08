<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::all();

        return Inertia::render('Resources/Books/index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Resources/Books/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       if($request->hasFile('cover')){
            $fileName = time() . '.' . $request->cover->extension();

            $request->cover->storeAs('public/covers', $fileName);
       }

       Books::create([
           'title' => $request->title,
           'cover' => $fileName,
           'description' => $request->description,
           'genre' => $request->genre,
       ]);


        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Books::find($id);

        Storage::delete('public/covers/' . $book->cover);

        $book->delete();

        return redirect()->route('books.index');
    }
}
