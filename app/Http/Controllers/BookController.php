<?php

namespace App\Http\Controllers;

use App\book;
use App\Shelf;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

        return $books;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Book::create($request->all);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $books = Book::find($book);

        return $books;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $result = Book::findOrFail($book);
        $result->update($request->all());

        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Book::find($book)->delete();

        return response()->json(null, 204);
    }


    /**
     * search books
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */

    public function search()

    {
        $param = \request()->input('oq');

        if($param == '' || $param == "" || $param == null)
        {
            return response()->json(null, 204);
        }

        $books = Book::latest()
            ->search($param)
            ->paginate(20);
        return $books;
    }

}
