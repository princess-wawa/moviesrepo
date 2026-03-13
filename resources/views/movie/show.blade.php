@extends('layout.app')

@section('content')
<h1>{{ $movie['title'] }}</h1>

<p>{{ $movie['description'] }}</p>

<img src="{{ asset('Image/films/' . $movie['Images']) }}">

<a href="/movies">Retour</a>
@endsection