@extends('layout.app')

@section('content')
    <div class="movie-container">

        <h1 class="movie-title">{{ $movie['title'] }}</h1>

        <div class="movie-content">

            <img class="movie-poster" src="{{ asset('Image/films/' . $movie['Images']) }}">

            <div class="movie-description">
                <p>{{ $movie['description'] }}</p>

                <a class="back-btn" href="/movies">Retour</a>
            </div>

        </div>

    </div>
@endsection
