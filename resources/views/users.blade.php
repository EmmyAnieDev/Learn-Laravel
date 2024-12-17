<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <tr>
        <div>
            {{-- @foreach ($users as $user)
                <h4> {{ $user->name }} -- {{ $user->email }} </h4>
                @foreach ( $user->addresses as $address )
                    <p>Address: {{ $address->country }} --  {{ $address->state }} --  {{ $address->city }}. </p>
                @endforeach
                @foreach ( $user->fragrances as $fragrance )
                    <p>Fragrance: {{ $fragrance->name }}. </p>
                @endforeach
                <hr>
            @endforeach --}}

            @foreach ($users as $user)
                <h4>{{ $user->name }}</h4>
                @if ($user->cars->isNotEmpty())
                    <p>Cars: 
                        {{ $user->cars->pluck('name')->implode(' - ') }}
                    </p>
                @endif
                <hr>
            @endforeach
        </div>
        <br>
        <hr>
    </tr>
    
</body>
</html>