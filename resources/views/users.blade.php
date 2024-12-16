<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>
        @foreach ($users as $user)
            <h4> {{ $user->name }} -- {{ $user->email }} </h4>
            <p>Address: {{ $user->address->country }}, {{ $user->address->state }}, {{ $user->address->city }}. </p>
            <hr>
        @endforeach
    </div>
    
</body>
</html>