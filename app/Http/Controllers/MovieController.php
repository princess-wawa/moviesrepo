<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    private function getMovies()
    {
        return [
            ['id' => 1, 'title' => 'LE HOBBIT', 'description' => 'Premier film de la trilogie inspirée du livre de J. R. R. Tolkien. Il suit Bilbo Baggins, un hobbit qui part à l’aventure avec le magicien Gandalf et un groupe de nains pour récupérer leur royaume gardé par un dragon.', 'Time' => '2h49', 'Images'=>'HOBBIT.jpg' ],
            ['id' => 2, 'title' => 'TOKYO DRIFT', 'description' => 'Ce film de la saga Fast & Furious film series suit Sean, un jeune passionné de voitures qui part vivre à Tokyo. Il découvre le monde des courses de rue et la technique du drift, tout en affrontant le pilote le plus redouté de la ville.','Time' => '1h44', 'Images'=>'TOKYO DRIFT.jpg' ],
            ['id' => 3, 'title' => 'ANNABELLE', 'description' => 'Film d’horreur lié à l’univers de The Conjuring. L’histoire tourne autour d’une poupée possédée qui attire des forces démoniaques dans la maison d’un jeune couple. Des phénomènes terrifiants commencent alors à se produire.','Time' => '1h39', 'Images'=>'ANNABELLE.jpg' ],
            ['id' => 4, 'title' => 'MONTECRISTO', 'description' => 'Ce film, inspiré du roman de Alexandre Dumas, raconte l’histoire d’Edmond Dantès, un marin injustement accusé de trahison et emprisonné pendant des années. Après s’être échappé et avoir découvert un immense trésor, il devient le mystérieux Comte de Monte-Cristo et prépare une vengeance contre ceux qui l’ont trahi.','Time' => '2h58', 'Images'=>'MONTECRISTO.jpg' ],
            ['id' => 5, 'title' => 'FIGHT CLUB', 'description' => 'Le film suit un homme insomniaque qui rencontre Tyler Durden, un personnage charismatique et rebelle. Ensemble, ils créent un club secret où les hommes se battent pour se sentir vivants, mais le mouvement prend rapidement une tournure dangereuse.','Time' => '2h19', 'Images'=> 'FIGHT CLUB.jpg'],
            ['id' => 6, 'title' => 'TOP GUN', 'description' => 'Ce film suit Pete Maverick Mitchell, un pilote talentueux de l’aviation militaire américaine qui entre dans une école d’élite pour pilotes de chasse. Entre rivalités, romance et missions aériennes spectaculaires, il doit prouver qu’il est le meilleur.','Time' => '1h50', 'Images'=>'TOP GUN.jpg' ],
            ['id' => 7, 'title' => '50 NUANCES DE GREY', 'description' => 'Ce film raconte la relation entre Anastasia Steele, une étudiante, et Christian Grey, un riche homme d’affaires mystérieux. Leur histoire explore une relation amoureuse intense et compliquée basée sur la confiance et le pouvoir.','Time' => '2h05', 'Images'=>'50 NUANCES DE GREY.jpg' ],
            ['id' => 8, 'title' => 'CARS', 'description' => 'L’histoire suit Lightning McQueen, une voiture de course ambitieuse qui rêve de devenir célèbre en remportant la Piston Cup. Sur la route vers une grande course, il se perd et se retrouve dans une petite ville oubliée appelée Radiator Springs.','Time' => '1h57', 'Images'=>'CARS.jpg' ],
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
