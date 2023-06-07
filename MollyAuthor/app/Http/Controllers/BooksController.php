<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = books::all();

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
        Books::create($request->all());


        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(books $books)
    {
        //
    }
}
