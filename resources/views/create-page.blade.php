<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notable</title>
</head>
<body>
    <h1>Create Note Here</h1>

    <form action="{{ route('create.post') }}" method="POST">
        @method('POST')
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br>
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" required><br>
        <label for="context">Note:</label>
        <textarea name="context" id="context" cols="20" rows="2" required></textarea><br>
        <button type="submit">Create</button>
    </form>
    <form action="/" method="GET">
        @method('GET')
        <button type="submit">Cancel</button>
    </form>
</body>
</html>