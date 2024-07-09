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
    <h1>Treni</h1>

    <ul>
        @foreach ($trains as $train)
            <li>Agenzia: {{ $train['agency'] }}</li>
            <li>Stazione di partenza: {{ $train['start_station'] }}</li>
            <li>Stazione di arrivo: {{ $train['end_station'] }}</li>
            <li>Data partenza: {{ $train['landing_hour'] }}</li>
            <li>Data arrivo: {{ $train['arrival_hour'] }}</li>
            <li>Codice Treno: {{ $train['train_code'] }}</li>
            <li>Numero Cabine: {{ $train['n_cabs'] }}</li>
            <li>In orario: {{ $train['in_time'] }}</li>
            <li>Cancellato: {{ $train['deleted'] }}</li>
            <hr>
        @endforeach
    </ul>
</body>

</html>
