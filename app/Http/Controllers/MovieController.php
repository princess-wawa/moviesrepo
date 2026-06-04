<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

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

    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movie.edit', [
            'movie' => $movie
        ]);
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'time' => 'required|string|max:20',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);

        $imageName = $movie->images; // keep old image by default

        // if a new image is given
        if ($request->hasFile('image')) {

            // delete old image
            $oldPath = public_path('Image/films/' . $movie->images);
            File::delete($oldPath);

            // create new image name
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = Str::slug($request->title) . '.' . $extension;

            // move new image
            $request->file('image')->move(
                public_path('Image/films'),
                $imageName
            );
        }

        $movie->update([
            'title' => $request->title,
            'description' => $request->description,
            'time' => $request->time,
            'images' => $imageName,
        ]);

        return redirect('/movies')
            ->with('success', 'Film mis à jour avec succès.');
    }

    public function delete($id)
    {
        $movie = Movie::findOrFail($id);

        // delete the image
        $imgPath = public_path('Image/films/' . $movie->images);
        File::delete($imgPath);

        // delete the entry
        $movie->delete();
         return redirect('/movies')
            ->with('success', 'Film supprimé avec succès.');
    }
}
