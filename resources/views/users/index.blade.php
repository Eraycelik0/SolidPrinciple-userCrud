<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
<h1>Users</h1>
<ul>
    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</ul>
</body>
</html>
