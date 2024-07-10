<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB Treni</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="text-center">Treni</h1>
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-3 gy-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title bg-primary rounded text-uppercase">Codice Treno:
                                {{ $train['train_code'] }}</div>
                            <p class="card-text">
                                Agenzia: {{ $train['agency'] }} <br>
                                Stazione di partenza: {{ $train['start_station'] }} <br>
                                Stazione di arrivo: {{ $train['end_station'] }} <br>
                                Data partenza: {{ $train['landing_hour'] }} <br>
                                Data arrivo: {{ $train['arrival_hour'] }} <br>
                                Numero Cabine: {{ $train['n_cabs'] }} <br>
                                In orario: {{ $train['in_time'] }} <br>
                                Cancellato: {{ $train['deleted'] }} <br>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
