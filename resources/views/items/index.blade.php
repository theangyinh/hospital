<!DOCTYPE html>
<html>
<head>
    <title>Items</title>
</head>
<body>
    <h1>Items</h1>
    <ul>
        @foreach($items as $item)
            <li>{{ $item->name }}</li>
        @endforeach
    </ul>
</body>
</html>
