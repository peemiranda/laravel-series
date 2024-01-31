<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no initial-scale=1.0, maximun-scale=1.0">
        <title>Controle de Séries</title>
    </head>
    <body>

    <h1>Controle de series</h1>
        <ul>
            @foreach ($series as $serie)
                <li>{{ $serie }}</li>
            @endforeach
        </ul>
    </body>
</html>

