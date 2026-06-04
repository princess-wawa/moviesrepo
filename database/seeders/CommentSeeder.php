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
            'note' => 5,
        ]);

        Comment::create([
            'movie_id' => 1,
            'name' => 'Sarah',
            'comment' => 'Un peu long mais visuellement réussi.',
            'note' => 4,
        ]);

        Comment::create([
            'movie_id' => 1,
            'name' => 'Antoine',
            'comment' => 'Rythme trop lent par moments.',
            'note' => 3,
        ]);

        Comment::create([
            'movie_id' => 1,
            'name' => 'Julie',
            'comment' => 'Scénario correct mais prévisible.',
            'note' => 3,
        ]);

        Comment::create([
            'movie_id' => 1,
            'name' => 'Maxime',
            'comment' => 'Je n’ai pas accroché à l’histoire.',
            'note' => 2,
        ]);

        Comment::create([
            'movie_id' => 2,
            'name' => 'Tom',
            'comment' => 'Les courses sont impressionnantes.',
            'note' => 5,
        ]);

        Comment::create([
            'movie_id' => 2,
            'name' => 'Nina',
            'comment' => 'Plutôt divertissant.',
            'note' => 4,
        ]);

        Comment::create([
            'movie_id' => 2,
            'name' => 'Kevin',
            'comment' => 'Beaucoup d’action mais peu de fond.',
            'note' => 3,
        ]);

        Comment::create([
            'movie_id' => 2,
            'name' => 'Maya',
            'comment' => 'Redondant sur la durée.',
            'note' => 2,
        ]);

        Comment::create([
            'movie_id' => 2,
            'name' => 'Bastien',
            'comment' => 'Très moyen globalement.',
            'note' => 2,
        ]);

        Comment::create([
            'movie_id' => 3,
            'name' => 'Mehdi',
            'comment' => 'Quelques scènes stressantes.',
            'note' => 3,
        ]);

        Comment::create([
            'movie_id' => 3,
            'name' => 'Clara',
            'comment' => 'Bonne ambiance générale.',
            'note' => 4,
        ]);

        Comment::create([
            'movie_id' => 3,
            'name' => 'Sofia',
            'comment' => 'Pas assez original.',
            'note' => 3,
        ]);

        Comment::create([
            'movie_id' => 3,
            'name' => 'Paul',
            'comment' => 'Je me suis ennuyé par moments.',
            'note' => 2,
        ]);

        Comment::create([
            'movie_id' => 3,
            'name' => 'Nora',
            'comment' => 'Effrayant mais inégal.',
            'note' => 3,
        ]);

        Comment::create([
            'movie_id' => 4,
            'name' => 'Alex',
            'comment' => 'Très bon film de vengeance.',
            'note' => 5,
        ]);

        Comment::create([
            'movie_id' => 4,
            'name' => 'Emma',
            'comment' => 'Très intense émotionnellement.',
            'note' => 5,
        ]);

        Comment::create([
            'movie_id' => 4,
            'name' => 'Nicolas',
            'comment' => 'Un peu trop classique dans le déroulé.',
            'note' => 4,
        ]);

        Comment::create([
            'movie_id' => 4,
            'name' => 'Laura',
            'comment' => 'Correct mais sans surprise.',
            'note' => 3,
        ]);

        Comment::create([
            'movie_id' => 4,
            'name' => 'Yassine',
            'comment' => 'Je n’ai pas aimé le rythme.',
            'note' => 2,
        ]);

        Comment::create([
            'movie_id' => 5,
            'name' => 'Emma',
            'comment' => 'Très profond et bien construit.',
            'note' => 5,
        ]);

        Comment::create([
            'movie_id' => 5,
            'name' => 'Yanis',
            'comment' => 'Bon concept global.',
            'note' => 4,
        ]);

        Comment::create([
            'movie_id' => 5,
            'name' => 'Hugo',
            'comment' => 'Quelques passages confus.',
            'note' => 3,
        ]);

        Comment::create([
            'movie_id' => 5,
            'name' => 'Inès',
            'comment' => 'Trop lent pour moi.',
            'note' => 2,
        ]);

        Comment::create([
            'movie_id' => 5,
            'name' => 'Romain',
            'comment' => 'Difficile à suivre.',
            'note' => 1,
        ]);

        Comment::create([
            'movie_id' => 6,
            'name' => 'Lucas',
            'comment' => 'Très belles scènes aériennes.',
            'note' => 5,
        ]);

        Comment::create([
            'movie_id' => 6,
            'name' => 'Mila',
            'comment' => 'Bon divertissement.',
            'note' => 4,
        ]);

        Comment::create([
            'movie_id' => 6,
            'name' => 'Theo',
            'comment' => 'Pas très original.',
            'note' => 3,
        ]);

        Comment::create([
            'movie_id' => 6,
            'name' => 'Sarah',
            'comment' => 'Un peu décevant.',
            'note' => 2,
        ]);

        Comment::create([
            'movie_id' => 7,
            'name' => 'Lina',
            'comment' => 'Romance classique.',
            'note' => 3,
        ]);

        Comment::create([
            'movie_id' => 7,
            'name' => 'Adrien',
            'comment' => 'Sympa mais oubliable.',
            'note' => 3,
        ]);

        Comment::create([
            'movie_id' => 7,
            'name' => 'Chloé',
            'comment' => 'Trop cliché.',
            'note' => 2,
        ]);

        Comment::create([
            'movie_id' => 7,
            'name' => 'Mathis',
            'comment' => 'Je n’ai pas accroché.',
            'note' => 1,
        ]);

        Comment::create([
            'movie_id' => 8,
            'name' => 'Noah',
            'comment' => 'Très nostalgique.',
            'note' => 5,
        ]);

        Comment::create([
            'movie_id' => 8,
            'name' => 'Elisa',
            'comment' => 'Toujours agréable à revoir.',
            'note' => 5,
        ]);

        Comment::create([
            'movie_id' => 8,
            'name' => 'Théo',
            'comment' => 'Bon souvenir d’enfance.',
            'note' => 4,
        ]);

        Comment::create([
            'movie_id' => 8,
            'name' => 'Julia',
            'comment' => 'Un peu vieilli.',
            'note' => 3,
        ]);

        Comment::create([
            'movie_id' => 8,
            'name' => 'Damien',
            'comment' => 'Pas aussi bon que dans mes souvenirs.',
            'note' => 2,
        ]);
    }
}