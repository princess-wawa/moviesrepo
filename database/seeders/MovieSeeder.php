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
    }
}