<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <style>
         input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form action="{{route('postLogin')}}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="email">
        <br>
        <input type="password" name="password" placeholder="password">
        <br>
        <button type="submit">Login</button>
    </form>
    <a href="{{route('register')}}">Register</a>
    @if (session('error'))
        <p>{{session('error')}}</p>
    @endif
</body>
</html>
