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
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ $movie->title }}
                                    </h5>
                                    <h6 class="mb-3">
                                        <em>
                                            {{ $movie->original_title }}
                                        </em>
                                    </h6>
                                    <p class="card-text mb-0">
                                        {{ $movie->date }}
                                    </p>
                                    <p class="card-text mb-0">
                                        <strong>
                                            <small>
                                                {{ $movie->nationality }}
                                            </small>
                                        </strong>
                                    </p>
                                    <p class="card-text mb-0">
                                        <small>
                                            Vote: {{ $movie->vote }}
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </body>
</html>
