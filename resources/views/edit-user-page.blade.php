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
        <div>Name: {{ $user->name }}</div>
        <div>Email: {{ $user->email }}</div>
        <div>Password: {{ $user->password }}</div>
        <hr>
        <button type="submit">Edit</button>
    </form>
    <form action="/" method="GET">
        @method('GET')
        <button type="submit">Back</button>
    </form>
</body>
</html>