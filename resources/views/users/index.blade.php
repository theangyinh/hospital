<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>
    <ul>
        @foreach($users as $user)
            <li>
                <a href="{{ url('/users', $user->id) }}">{{ $user->name }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
