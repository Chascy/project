<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notable</title>
</head>
<body>
    <h1>Note</h1>

    <div>{{ $note->user->name }}</div>

    <div>{{ $note->title }}</div>
    <div>{{ $note->description }}</div>
    <div>{{ $note->context }}</div>
    <form action="{{ route('delete', ['id' => $note->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this note?')">
        @method('DELETE')
        @csrf
        <button type="submit">Delete</button>
    </form>
    <form action="/" method="GET">
        @method('GET')
        <button type="submit">Back</button>
    </form>
    <hr>

</body>
</html>