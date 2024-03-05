<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index',[
            'title' => 'SEA Cinema | Home',
            'movies' => Movie::all()
        ]);
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movie',[
            'title' => 'SEA Cinema | '.$movie['title'],
            'movie' => $movie
        ]);
    }

}
