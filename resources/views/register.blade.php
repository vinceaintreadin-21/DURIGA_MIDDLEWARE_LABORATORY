<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Register</h1>
    <form action="{{route('postRegister')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name">
        <br>
        <input type="email" name="email" placeholder="email">
        <br>
        <input type="password" name="password" placeholder="password">
        <br>
        <select name="roles">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <br>
        <button type="submit">Register</button>
    </form>
    <a href="{{route('login')}}">Login</a>
    @if (session('error'))
        <p>{{session('error')}}</p>
    @endif
</body>
</html>
