<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">


    <title>Laravel</title>
</head>

<body>
    <nav>
        <a href="/">Home</a>
        <a href="/users">Users</a>
    </nav>
    <h1>Registrati ORA!</h1>
    <form method="POST" action="registra">
        {{ csrf_field() }}
        <input type="text" name="name" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Registati</button>
    </form>
</body>

</html>