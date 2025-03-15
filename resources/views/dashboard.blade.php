<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{Auth::user()->name}}'s dashboard</h1>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
    @if (Auth::user()->roles == 'admin')
        <a href="{{route('adminDashboard')}}">Admin Dashboard</a>
    @endif
</body>
</html>
