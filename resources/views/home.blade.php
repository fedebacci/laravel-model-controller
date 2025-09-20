<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            Movies (DB)
        </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>
    <body>
        
        {{-- @dd($movies) --}}

        <section class="py-5">
            <div class="container">
                <div class="row g-3">
                    @foreach ($movies as $movie)
                        <div class="col-6 col-sm-4 col-md-3">
                            <x-movie-card :movie="$movie">
                                <x-slot:title>{{ $movie["title"] }}</x-slot>
                                <x-slot:original_title>{{ $movie["original_title"] }}</x-slot>
                                <x-slot:date>{{ $movie["date"] }}</x-slot>
                                <x-slot:nationality>{{ $movie["nationality"] }}</x-slot>
                                <x-slot:vote>{{ $movie["vote"] }}</x-slot>
                            </x-movie-card>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </body>
</html>
