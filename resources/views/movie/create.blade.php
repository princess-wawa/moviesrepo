@extends('layout.app')

@section('content')

<div class="form-page">

    <div class="form-card">

        <h1 class="form-title">Créer un Film</h1>

        <form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data" class="movie-form">
            @csrf

            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" id="title" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="time">Durée</label>
                <input type="text" name="time" id="time" placeholder="en heures ou minutes" required>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" accept="image/*" required>
            </div>

            <button type="submit" class="submit-btn">Créer le film</button>

        </form>

    </div>

</div>

@endsection