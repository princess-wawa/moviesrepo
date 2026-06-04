@extends('layout.app')

@section('content')

<div class="form-page">

    <div class="form-card">

        <h1 class="form-title">Modifier un Film</h1>

        <form action="{{ route('movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data" class="movie-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" id="title" required value="{{ old('title', $movie->title) }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="5" required>{{ old('description', $movie->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="time">Durée</label>
                <input type="text" name="time" id="time" placeholder="en heures ou minutes" required value="{{ old('time', $movie->time) }}">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="images" accept="image/*">
                @if($movie->images)
                    <p>Image actuelle :</p>
                    <img src="{{ asset('Image/films/' . $movie->images) }}" alt="movie image" width="120">
                @endif
            </div>

            <button type="submit" class="submit-btn">Modifier le film</button>

        </form>

    </div>

</div>

@endsection