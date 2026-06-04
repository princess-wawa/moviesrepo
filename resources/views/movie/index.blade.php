@extends('layout.app')

@section('content')
<h1>Liste des Films</h1>

<div class="cards-container">
@foreach($movies as $movie)
    <div class="card" onclick="window.location='{{ url('/movies/' . $movie->id) }}'">
        <div class="card-image">
            <img src="{{ asset('Image/films/' . $movie->images) }}">
        </div>
        <p class="card-title">{{ $movie->title }}</p>
    </div>
@endforeach
</div>

<a href="{{ url('/create') }}" class="icon-btn create-btn">
    <!-- plus icon source: https://proicons.com/icons/85784/plus-sign/ -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M12 4V20M20 12H4"/>
    </svg>
</a>
@endsection