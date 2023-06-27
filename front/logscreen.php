<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login • Intranet</title>
    <link rel="stylesheet" href="style\style.css">
    <link rel="icon" href="front\img\" type="image/x-icon">

</head>

<body>
    <div class="login">

        <form action="Bcknd/log.php" method="post">
            <label for="Rut">Rut</label>
            <br>
            <input type="text" name="rut">
            <br><br> 
            <label for="Rut">Password</label>
            <br>
            <input type="password" name="pass">
            <br><br><br><br>
            <input type="submit" value="Login">
        </form>

    </div>
</body>
</html>