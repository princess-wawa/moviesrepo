<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Get all comments for a specific movie
     */
    public function getFilmComment($id)
    {
        $comments = Comment::where('movie_id', $id)->get();

        if ($comments->isEmpty()) {
            return response()->json([
                "message" => "No comments for this film"
            ], 404);
        }

        return response()->json([
            "comments" => $comments
        ]);
    }

    /**
     * Store a new comment
     */
    public function store(Request $request)
    {
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'name' => 'required|string|max:255',
            'comment' => 'required|string',
            'note' => 'required|integer|min:1|max:5',
        ]);

        Comment::create([
            'movie_id' => $request->movie_id,
            'name' => $request->name,
            'comment' => $request->comment,
            'note' => $request->note,
        ]);

        return redirect()->back()
            ->with('success', 'Comment created successfully');
            }
}