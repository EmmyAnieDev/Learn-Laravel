<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashbaord</title>
</head>
<body>
    <h3>User Dashbaord</h3>

    @auth
        <p>Name: {{ Auth::user()->name }}</p>
        <p>Email: {{ auth()->user()->email }}</p>
    @endauth
</body>
</html>