<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notable</title>
</head>
<body>
    <h1>Register Here</h1>

    <form action="{{ route('register.post') }}" method="POST">
        @method('POST')
        @csrf
        <input type="text" name="name" id="name" placeholder="Enter Name" required><br>
        <input type="email" name="email" id="email" placeholder="Enter Email" required><br>
        <input type="password" name="password" id="password" placeholder="Enter password" required><br>
        <button type="submit">Register</button>
    </form>
    <form action="{{ route('login') }}" method="GET">
        @method('GET')
        <button type="submit">Back</button>
    </form>
</body>
</html>