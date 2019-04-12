<?php

namespace App\Http\Controllers;

use App\Shelf;
use Illuminate\Http\Request;

class ShelfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shelves = Shelf::all();

        return $shelves;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shelves.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shelf = Shelf::create($request->all());

        return response()->json($shelf, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\shelf  $shelf
     * @return \Illuminate\Http\Response
     */
    public function show(Shelf $shelf)
    {
        return $shelf;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\shelf  $shelf
     * @return \Illuminate\Http\Response
     */
    public function edit(Shelf $shelf)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\shelf  $shelf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shelf $shelf)
    {
        $shelf->update($request->all());

        return response()->json($shelf, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\shelf  $shelf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shelf $shelf)
    {
        $shelf->delete();

        return response()->json(null, 204);
    }
}
