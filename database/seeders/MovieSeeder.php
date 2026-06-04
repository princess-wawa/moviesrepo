<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'title' => 'LE HOBBIT',
            'description' => 'Premier film de la trilogie inspirée du livre de J. R. R. Tolkien. Il suit Bilbo Baggins, un hobbit qui part à l’aventure avec le magicien Gandalf et un groupe de nains pour récupérer leur royaume gardé par un dragon.',
            'time' => '2h49',
            'images' => 'HOBBIT.jpg',
        ]);

        Movie::create([
            'title' => 'TOKYO DRIFT',
            'description' => 'Ce film de la saga Fast & Furious film series suit Sean, un jeune passionné de voitures qui part vivre à Tokyo. Il découvre le monde des courses de rue et la technique du drift, tout en affrontant le pilote le plus redouté de la ville.',
            'time' => '1h44',
            'images' => 'TOKYO DRIFT.jpg',
        ]);

       Movie::create([
            'title' => 'ANNABELLE',
            'description' => 'Film d’horreur lié à l’univers de The Conjuring. L’histoire tourne autour d’une poupée possédée qui attire des forces démoniaques dans la maison d’un jeune couple. Des phénomènes terrifiants commencent alors à se produire.',
            'time' => '1h39',
            'images' => 'ANNABELLE.jpg',
        ]);

        Movie::create([
            'title' => 'MONTECRISTO',
            'description' => 'Ce film, inspiré du roman de Alexandre Dumas, raconte l’histoire d’Edmond Dantès, un marin injustement accusé de trahison et emprisonné pendant des années. Après s’être échappé et avoir découvert un immense trésor, il devient le mystérieux Comte de Monte-Cristo et prépare une vengeance contre ceux qui l’ont trahi.',
            'time' => '2h58',
            'images' => 'MONTECRISTO.jpg',
        ]);

        Movie::create([
            'title' => 'FIGHT CLUB',
            'description' => 'Le film suit un homme insomniaque qui rencontre Tyler Durden, un personnage charismatique et rebelle. Ensemble, ils créent un club secret où les hommes se battent pour se sentir vivants, mais le mouvement prend rapidement une tournure dangereuse.',
            'time' => '2h19',
            'images' => 'FIGHT CLUB.jpg',
        ]);

        Movie::create([
            'title' => 'TOP GUN',
            'description' => 'Ce film suit Pete Maverick Mitchell, un pilote talentueux de l’aviation militaire américaine qui entre dans une école d’élite pour pilotes de chasse. Entre rivalités, romance et missions aériennes spectaculaires, il doit prouver qu’il est le meilleur.',
            'time' => '1h50',
            'images' => 'TOP GUN.jpg',
        ]);

        Movie::create([
            'title' => '50 NUANCES DE GREY',
            'description' => 'Ce film raconte la relation entre Anastasia Steele, une étudiante, et Christian Grey, un riche homme d’affaires mystérieux. Leur histoire explore une relation amoureuse intense et compliquée basée sur la confiance et le pouvoir.',
            'time' => '2h05',
            'images' => '50 NUANCES DE GREY.jpg',
        ]);

        Movie::create([
            'title' => 'CARS',
            'description' => 'L’histoire suit Lightning McQueen, une voiture de course ambitieuse qui rêve de devenir célèbre en remportant la Piston Cup. Sur la route vers une grande course, il se perd et se retrouve dans une petite ville oubliée appelée Radiator Springs.',
            'time' => '1h57',
            'images' => 'CARS.jpg',
        ]);
    }
}