<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    private function getMovies()
    {
        return movie::all();
    }
           

    public function index()
    {
        return view('movie.index', [
            'movies' => $this->getMovies()
        ]);
    }

    public function show($id)
    {
        $movies = $this->getMovies();
        $movie = collect($movies)-> firstWhere('id', $id);

        return view('movie.show', [
            'movie' => $movie
        ]);
    }
}
