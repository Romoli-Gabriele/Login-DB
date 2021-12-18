<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Users</title>
</head>

<body>
    <nav>
        <a href="/">Home</a>
        <a href="/users">Users</a>
    </nav>
    <h1>Lista di tutti gli utenti</h1>
    @foreach ($_SESSION["users"] as $user)
    <li>
        Name: {{$user->name}}
        Email: {{$user->email}}
    </li>
    @endforeach
</body>

</html>
<?php session_destroy();