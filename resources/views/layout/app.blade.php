<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Movies repo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/movie.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>
    <header>
        <h1>🎬MovieGang</h1>   
    </header>
    

        @yield('content')

    <footer>
        <p>@ 2026 MovieGang - Tous droits réservés</p>
        <div>
        <a href="#">Instagram</a> |
        <a href="#">Twitter</a> |
        <a href="#">YouTube</a>
        </div>

    </footer>
    
</body>
</html>
