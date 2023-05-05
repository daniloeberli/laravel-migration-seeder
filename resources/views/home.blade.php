<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>
    <body class="p-3">
        <div class="container">
            <h1 class="text-center">Treni</h1>
            <!-- elemento card per visualizzare i dati in pagina -->
            <div class="row">
                @foreach ($trains as $train)
                <div class="col col-sm-6 col-md-3 g-3">
                    <div class="card text-center" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$train->azienda}}</h5>
                            <h6 class="card-subtitle mb-2">{{$train->codice_treno}}</h6>
                            <p class="card-text">{{$train->stazione_partenza}}</p>
                            <p class="card-text">{{$train->stazione_arrivo}}</p>
                            <p class="card-text">{{$train->is_orario}}</p>
                            <p class="card-text">{{$train->is_cancellato}}</p>
                            <p class="card-text">{{$train->numero_carrozze}}</p>
                            <p class="card-text">{{$train->orario_partenza}}</p>
                            <p class="card-text">{{$train->orario_arrivo}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>            
        </div>

    </body>
</html>
