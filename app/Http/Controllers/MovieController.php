<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    private function getMovies()
    {
        return [
            ['id' => 1, 'title' => 'Mon premier film', 'content' => 'Contenu du premier film...'],
            ['id' => 2, 'title' => 'Mon deuxième film', 'content' => 'Contenu du deuxième film...'],
            ['id' => 3, 'title' => 'Mon troisième film', 'content' => 'Contenu du troisième film...'],
        ];
    }

    public function index()
    {
        return view('movies.index', [
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
