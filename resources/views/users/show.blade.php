<!DOCTYPE html>
<html>
<head>
    <title>{{ $user->name }}</title>
</head>
<body>
    <h1>{{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Joined: {{ $user->created_at }}</p>
    <a href="{{ url('/users') }}">Back to Users</a>
</body>
</html>
