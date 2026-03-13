@extends('layout.app')

@section('content')
<h1>Liste des Films</h1>

<ul>
@foreach($movies as $movie)
    <li>
        <a href="/movies/{{ $movie['id'] }}">
            {{ $movie['title'] }}
        </a>
    </li>
@endforeach
</ul>
@endsection