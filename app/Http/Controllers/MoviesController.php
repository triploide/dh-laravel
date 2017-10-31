<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Http\Requests\MovieRequest;
use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::where('id', '<', 10)->get();
        //dd($movies[0]->genre);
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {

        //$filename = $request->file('poster1')->store('posters');

        $movie = Movie::create($request->all());

        $file = $request->file('poster'); //primer param name del input file

        $filename = str_slug($movie->title) . '.' . $movie->id . '.' . $file->getClientOriginalExtension();

        $file->storeAs('posters', $filename);

        $movie->poster = $filename;

        $movie->save();

        /*
        $movie = Movie::create($request->except('genre_id'));
        $genre = Genre::find($request->input('genre_id'));
        $movie->genre()->associate($genre);
        $movie->save();
        */

        //ids de actores
        //$movie = Movie::find(46);
        //$movie->actors()->sync([2]);

        return 'ok';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
