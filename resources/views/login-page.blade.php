<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notable</title>
</head>
<body>
    <h1>Log In Here</h1>

    <form action="{{ route('login.post') }}" method="POST">
        @method('POST')
        @csrf
        <input type="email" name="user_email" id="user_email" placeholder="Enter Email" required><br>
        <input type="password" name="user_password" id="user_password" placeholder="Enter password" required><br>
        <button type="submit">Log In</button>
    </form>
    <form action="{{ route('register') }}" method="GET">
        @method('GET')
        <button type="submit">Register</button>
    </form>
</body>
</html>