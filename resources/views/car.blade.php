<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>
<body>

    <tr>
        <div>
            @foreach ($cars as $car)
                <h4>{{ $car->name }}</h4>
                @if ($car->users->isNotEmpty())
                    <p>Drivers: 
                        {{ $car->users->pluck('name')->implode(' - ') }}
                    </p>
                @endIf
                <hr>
            @endforeach
        </div>
        <br>
        <hr>
    </tr>
    
</body>
</html>