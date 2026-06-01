@extends('layout.app')

@section('content')
    
<div class="movie-container">

    <!-- Actions -->
    <div class="movie-actions">

        <!-- Edit -->
        <a class="icon-btn edit-btn" href="/edit/{{ $movie['id'] }}" title="Modifier">
            <!-- Pen icon -->
            <svg viewBox="0 0 24 24">
                <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25z"></path>
                <path d="M20.71 7.04a1 1 0 0 0 0-1.41l-2.34-2.34a1 1 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
            </svg>
        </a>

        <!-- Delete -->
        <form action="{{ route('movies.delete', $movie['id']) }}" method="POST"
              onsubmit="return confirm('Supprimer ce film ?')">
            @csrf
            @method('DELETE')

            <button type="submit" class="icon-btn delete-btn" title="Supprimer">
                <!-- Trash icon -->
                <svg viewBox="0 0 24 24">
                    <path d="M3 6h18"></path>
                    <path d="M8 6V4h8v2"></path>
                    <path d="M6 6l1 16h10l1-16"></path>
                </svg>
            </button>
        </form>

    </div>

    <h1 class="movie-title">{{ $movie['title'] }}</h1>

    <div class="movie-content">

        <img class="movie-poster" src="{{ asset('Image/films/' . $movie['images']) }}">

        <div class="movie-description">
            <p>{{ $movie['description'] }}</p>
        </div>

    </div>

</div>

@endsection