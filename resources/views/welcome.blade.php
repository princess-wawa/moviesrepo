<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CinéProject - Présentation</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    </head>
    <body>

        <main>
            <div class="project-card">
                
                <a class="Home" href="/movies">Home</a>

                <h1>🎬 Movie<span>GanG</span></h1>
                
                <p class="description">
                    Développement d'une application web moderne dédiée à la gestion et à la découverte de films. L'interface intègre un catalogue dynamique, des espaces de critiques pour les utilisateurs et un suivi personnalisé des œuvres à visionner.
                </p>
                
            </div>
        </main>

        <footer>
            <p>Projet de fin d'études / Application Web de gestion cinématographique — {{ date('Y') }}</p>
        </footer>

    </body>
</html>