<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        
        Comment::create([
            'movie_id' => 1,
            'name' => 'Lucas',
            'comment' => 'Très bon film, univers incroyable !',
            'note' => 9,
        ]);

        Comment::create([
            'movie_id' => 1,
            'name' => 'Sarah',
            'comment' => 'Un peu long mais magnifique visuellement.',
            'note' => 8,
        ]);

        Comment::create([
            'movie_id' => 2,
            'name' => 'Tom',
            'comment' => 'Les courses sont incroyables 🔥',
            'note' => 9,
        ]);

        Comment::create([
            'movie_id' => 2,
            'name' => 'Nina',
            'comment' => 'Le drift est trop stylé.',
            'note' => 8,
        ]);

        Comment::create([
            'movie_id' => 3,
            'name' => 'Mehdi',
            'comment' => 'J’ai eu peur tout le long 😱',
            'note' => 7,
        ]);

        Comment::create([
            'movie_id' => 3,
            'name' => 'Clara',
            'comment' => 'Bonne ambiance horrifique.',
            'note' => 8,
        ]);

        Comment::create([
            'movie_id' => 4,
            'name' => 'Alex',
            'comment' => 'Histoire de vengeance incroyable.',
            'note' => 10,
        ]);

        Comment::create([
            'movie_id' => 5,
            'name' => 'Emma',
            'comment' => 'Très profond et psychologique.',
            'note' => 10,
        ]);

        Comment::create([
            'movie_id' => 6,
            'name' => 'Yanis',
            'comment' => 'Les scènes de vol sont folles !',
            'note' => 9,
        ]);

        Comment::create([
            'movie_id' => 7,
            'name' => 'Lina',
            'comment' => 'Romance un peu cliché mais sympa.',
            'note' => 6,
        ]);

        Comment::create([
            'movie_id' => 8,
            'name' => 'Noah',
            'comment' => 'Film d’enfance incroyable ',
            'note' => 10,
        ]);
    }
}
