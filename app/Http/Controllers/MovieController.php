<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    public function create()
    {
        return view('movie.create', [
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'time' => 'required|string|max:20',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp',
        ]);

        // Create image name from title
        $extension = $request->file('image')->getClientOriginalExtension();

        $imageName = Str::slug($request->title) . '.' . $extension;

        // Upload to public/Image/films/
        $request->file('image')->move(
            public_path('Image/films'),
            $imageName
        );

        Movie::create([
            'title' => $request->title,
            'description' => $request->description,
            'time' => $request->time,
            'images' => $imageName,
        ]);

        return redirect('/movies')
            ->with('success', 'Film créé avec succès.');
    }
}
