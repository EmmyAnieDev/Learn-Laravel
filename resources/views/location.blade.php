<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Locations</title>
</head>
<body>

 
    <div>
        <h4> Country - {{ $country->name }}</h4>
        <h4>States:</h4>
        <ul>
            @foreach ($country->states as $state)
                <li>{{ $state->name }}</li>
            @endforeach
            <h4>Cities:</h4>
            <ul>
                @foreach ($state->cities as $city)
                    <li>{{ $city->name }}</li>
                @endforeach
            </ul>
        </ul>
        <h4>Country Cities:</h4>
        <ul>
            @foreach ($country->cities as $city)
                <li>{{ $city->name }}</li>
            @endforeach
        </ul>
    </div>


    
</body>
</html>