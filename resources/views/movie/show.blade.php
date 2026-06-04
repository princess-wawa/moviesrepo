@extends('layout.app')

@section('content')

<div class="movie-container">
    
    <div class="buttons-container">

        <a class="back-btn" href="/movies">Retour</a>
        <!-- Actions -->
        <div class="movie-actions">
            
            <!-- Edit -->
            <a class="icon-btn edit-btn" href="/edit/{{ $movie->id }}" title="Modifier">
                <!-- Pen icon source: https://proicons.com/icons/419271/mode-edit/ -->
                <svg viewBox="0 0 24 24">
                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25z"></path>
                    <path d="M20.71 7.04a1 1 0 0 0 0-1.41l-2.34-2.34a1 1 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                </svg>
            </a>
            
            <!-- Delete -->
            <form action="{{ route('movies.delete', $movie->id) }}" method="POST"
            onsubmit="return confirm('Supprimer ce film ?')">
            @csrf
            @method('DELETE')
            
            <button type="submit" class="icon-btn delete-btn" title="Supprimer">
                <!-- Trash icon source  https://proicons.com/icons/542064/trash/ -->
                <svg viewBox="0 0 24 24">
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6" />
                        <path d="M3 6h18" />
                        <path d="M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                    </svg>
            </button>
        </form>
        
        </div>
    </div>

    <h1 class="movie-title">{{ $movie->title }}</h1>

    <div class="movie-meta">

        <!-- infos (metadata) about the movie -->
        <div class="meta-item">
            <span class="meta-label">Directeur</span>
            <span class="meta-value">{{ $movie->director }}</span>
        </div>

        <div class="meta-item">
            <span class="meta-label">Date de sortie</span>
            <span class="meta-value">{{ $movie->release_date }}</span>
        </div>

        <div class="meta-item">
            <span class="meta-label">Durée du film</span>
            <span class="meta-value">{{ $movie->time }}</span>
        </div>

        <!-- compute the average rating -->
        @php
            $averageNote = $movie->comments->avg('note');
        @endphp
        <div class="meta-item">
            <span class="meta-label">Note</span>
    
            <!-- show it using the same style as the comments -->
            <div class="comment-stars">
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= round($averageNote))
                        <span class="star filled">★</span>
                    @else
                        <span class="star">★</span>
                    @endif
                @endfor
            </div>
        </div>

    </div>


    <div class="movie-content">

        
        <img class="movie-poster" src="{{ asset('Image/films/' . $movie->images) }}">
        
        <div class="movie-description">
            <p>{{ $movie->description }}</p>
        </div>
        
    </div>

</div>



<!-- comments -->
<div class="comments-section">

    <form class="comment-form" method="POST" action="{{ route('comments.store') }}">
        @csrf

        <!-- star selectio (styles radio input) -->
        <div class="comment-rating">
            <div class="stars-input">
                @for ($i = 5; $i >= 1; $i--)
                    <input type="radio" id="star{{ $i }}" name="note" value="{{ $i }}" required>
                    <label for="star{{ $i }}">★</label>
                @endfor
            </div>
        </div>

        <!-- comment box -->
        <div class="comment-box">
            <textarea name="comment" placeholder="Write a comment..." required></textarea>
        </div>

        <!-- username box -->
        <div class="comment-user">
            <input type="text" name="name" placeholder="Username" required>
        </div>

        <!-- movie id for saving in the database (hidden) -->
        <input type="hidden" name="movie_id" value="{{ $movie->id }}">

        <!-- submit button -->
        <div class="comment-submit">
            <button type="submit">Post</button>
        </div>
    </form>

    <!-- list the comments -->
    <div class="comments-list">
        
        @forelse($movie->comments as $comment)
            <div class="comment-card">
                <div class="comment-top">
                    <strong>{{ $comment->name }}</strong>

                        <!-- display stars -->
                        <div class="comment-stars">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $comment->note)
                                    <span class="star filled">★</span>
                                @else
                                    <span class="star">★</span>
                                @endif
                            @endfor
                        </div>

                    </div>

                <p class="comment-text">{{ $comment->comment }}</p>
            </div>
        
        @empty <!-- if there are no comments: -->
            <p class="no-comments">No comments yet.</p>
        @endforelse
        
    </div>

</div>

@endsection