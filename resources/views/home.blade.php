@extends('layouts.master')


@section('page-title')
    Home
@endsection

@section('page-content')
    
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
@endsection
