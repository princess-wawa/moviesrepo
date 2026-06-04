<?php
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies/', [MovieController::class, 'index']);

Route::get('/movies/{id}', [MovieController::class, 'show']);

Route::get('/create', [MovieController::class, 'create']);

Route::post('/movies', [MovieController::class, 'store']) ->name('movies.store');

Route::get('/edit/{id}', [MovieController::class, 'edit']);

Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('movies.update');

Route::delete('/movies/{movie}', [MovieController::class, 'delete'])->name('movies.delete');

Route::post('/comments', [CommentController::class, 'store']) ->name('comments.store');

Route::get('/movies/{id}/comments', [CommentController::class, 'getFilmComment']) ->name('comments.movie');