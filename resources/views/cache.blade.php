<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cached Users</title>
</head>
<body>
    @foreach ($users as $user)
        <p>{{ $user->name }} -- {{ $user->email }}</p>
    @endforeach
</body>
</html>