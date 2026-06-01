<?php
use App\Http\Controllers\MovieController;
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