<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Migration Seeder</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1>Laravel Migration Seeder</h1>
                    </div>
                </div>
                <div class="row">
                    @foreach ($trains as $train)
                        <div class="col-3">
                            <div class="card" style="width: 18rem;">
                                <img src="https://udineoggi.news/wp-content/uploads/2021/04/Italo-treno-arriva-a-Trieste-Nord-Ests.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">{{ $train->departure_station }}-{{ $train->arrival_station }}</h5>
                                  <p class="card-text"></p>
                                  <a href="#" class="btn btn-primary"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </main>

    </body>
</html>
