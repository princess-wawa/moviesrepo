<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    private function getArticles()
    {
        return [
            ['id' => 1, 'title' => 'Mon premier article', 'content' => 'Contenu du premier article...'],
            ['id' => 2, 'title' => 'Mon deuxième article', 'content' => 'Contenu du deuxième article...'],
            ['id' => 3, 'title' => 'Mon troisième article', 'content' => 'Contenu du troisième article...'],
        ];
    }

    public function index()
    {
        return view('articles.index', [
            'articles' => $this->getArticles()
        ]);
    }

    public function show($id)
    {
        $articles = $this->getArticles();
        $article = collect($articles)->firstWhere('id', $id);

        return view('articles.show', [
            'article' => $article
        ]);
    }
}
