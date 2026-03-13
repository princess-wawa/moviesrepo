<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    private function getMovies()
    {
        return [
            ['id' => 1, 'title' => 'LE HOBBIT', 'description' => 'Contenu du premier film...', 'Images'=>'HOBBIT.jpg' ],
            ['id' => 2, 'title' => 'TOKYO DRIFT', 'description' => 'Contenu du deuxième film...', 'Images'=>'TOKYO DRIFT.jpg' ],
            ['id' => 3, 'title' => 'ANNABELLE', 'description' => 'Contenu du troisième film...', 'Images'=>'ANNABELLE.jpg' ],
            ['id' => 1, 'title' => 'MONTECRISTO', 'description' => 'Contenu du premier film...', 'Images'=>'MONTECRISTO.jpg' ],
            ['id' => 2, 'title' => 'FIGHT CLUB', 'description' => 'Contenu du deuxième film...', 'Images'=> 'FIGHT CLUB.jpg'],
            ['id' => 3, 'title' => 'TOP GUN', 'description' => 'Contenu du troisième film...', 'Images'=>'TOP GUN.jpg' ],
            ['id' => 2, 'title' => '50 NUANCES DE GREY', 'description' => 'Contenu du deuxième film...', 'Images'=>'50 NUANCES DE GREY.jpg' ],
            ['id' => 3, 'title' => 'CARS', 'description' => 'Contenu du troisième film...', 'Images'=>'CARS.jpg' ],
        ];
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
