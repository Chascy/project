<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notable</title>
</head>
<body>
    <h1>Edit User Here</h1>

    <form action="{{ route('updateUser', ['id' => $user->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="{{ $user->password }}" required><br>
        <button type="submit">Update</button>
    </form>
    <form action="/" method="GET">
        @method('GET')
        <button type="submit">Back</button>
    </form>
</body>
</html>