<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notable</title>
</head>
<body>
    <h1>Edit Note</h1>

    <form action="{{ route('edit.post', ['id' => $note->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $note->title }}" required><br>
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" value="{{ $note->description }}" required><br>
        <label for="note">Title:</label>
        <textarea name="note" id="note" cols="30" rows="10" value="{{ $note->note }}" required></textarea><br>
        <button type="submit">Create</button>
    </form>
    <form action="/" method="GET">
        @method('GET')
        <button type="submit">Cancel</button>
    </form>
</body>
</html>