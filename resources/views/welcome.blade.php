<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notable</title>
</head>
<body>
    <h1>Home</h1>

    <form action="{{ route('create') }}" method="GET">
        @method('GET')
        <button type="submit">Create</button>
    </form>
    <form action="{{ route('logout') }}" method="POST">
        @method('POST')
        @csrf
        <button type="submit">Log Out</button>
    </form>

    @foreach ($notes as $note)
        <div>{{ $note->title }}</div>
        <div>{{ $note->description }}</div>
        <div>{{ $note->note }}</div>
        <hr>
    @endforeach
</body>
</html>