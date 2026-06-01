@extends('layout.app')

@section('content')
<h1>Liste des Films</h1>

<div class="cards-container">
@foreach($movies as $movie)
    <div class="card" onclick="window.location='{{ url('/movies/' . $movie['id']) }}'">
        <div class="card-image">
            <img src="{{ asset('Image/films/' . $movie['images']) }}">
        </div>
        <p class="card-title">{{ $movie['title'] }}</p>
    </div>
@endforeach
</div>
@endsection