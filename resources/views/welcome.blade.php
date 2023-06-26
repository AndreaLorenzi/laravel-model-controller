<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Card Movies</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <div class="row row-cols-3">
                @foreach ($movies as $movie)
                    <div class="col py-3 h-100">

                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img class="h-100" src="{{ Vite::asset('public/images/'. $movie->image) }}" class="card-img-top" alt="...">
                                </div>
                                <div class="flip-card-back">
                                    <h5 class="card-title">Titolo: {{ $movie->title }}</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{ $movie->original_title }}</h6>
                                    <p class="card-text">Nazionalità: {{ $movie->nationality}}</p>
                                    <p class="card-text">Data: {{ $movie->date}}</p>
                                    <p class="card-text">Voto: {{ $movie->vote}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}
    </body>
    </html>
    