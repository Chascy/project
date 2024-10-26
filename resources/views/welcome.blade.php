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

    <form action="/edit-user/{{$user->id}}" method="GET">
        @method('GET')
        @csrf
        <button type="submit">Profile</button>
    </form>
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
        <div>{{ $note->user->name }}</div>
        <div>{{ $note->title }}</div>
        <div>{{ $note->description }}</div>
        <div>{{ $note->context }}</div>
        <form action="{{ route('edit', ['id' => $note->id]) }}" method="GET">
            @method('GET')
            <button type="submit">Edit</button>
        </form>
        <form action="{{ route('showNote', ['id' => $note->id]) }}" method="GET">
            @method('GET')
            <button type="submit">View</button>
        </form>
        <hr>
    @endforeach
</body>
</html>