<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">


    <title>Laravel</title>
</head>

<body>
    <nav>
        <a href="/">Log out</a>
        <a href="/users">Users</a>
    </nav>
    <h1>Accedi</h1>
    <form method="POST" action="registra">
        {{ csrf_field() }}
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <h5>non sei tra gli utenti? <a href="sing-in">Registrati</a></h5>
</body>

</html>