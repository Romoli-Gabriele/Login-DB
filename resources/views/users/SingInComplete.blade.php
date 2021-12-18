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
    <h1>Registrato con successo!!</h1>
    <?php
        echo $_SESSION["newUser"]->name;
        echo "  ";
        echo $_SESSION["newUser"]->email;
    ?>
</body>

</html>
<?php session_destroy();