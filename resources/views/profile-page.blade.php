<!DOCTYPE html>
<html lang="en">
<head>
    @extends('template')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="background">
    @include('components.mainHeader')
    <div class="main-wrapper-home">
        <div class="wrapper-header"><h4 class="ml-4 my-2 lg:my-4 relative font-semibold text-base md:text-[20px]">PROFILE : </h4></div>
    </div>
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