@extends('layout.app')

@section('content')
<h1>Liste des Films</h1>

<dir class="cards-container">
@foreach($movies as $movie)
    <div class="card" onclick="window.location='{{ url('/movies/' . $movie['id']) }}'">
        <div class="card-image">
            <img src="{{ asset('Image/films/' . $movie['Images']) }}">
        </div>
        <p class="card-title">{{ $movie['title'] }}</p>
    </div>
@endforeach
</dir>
@endsection