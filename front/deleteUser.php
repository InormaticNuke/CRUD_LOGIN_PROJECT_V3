<?php

session_start();

if (!isset($_SESSION['rut'])) {
    header('Location: logscreen.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_destroy();
    header('Location: logscreen.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=f, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<form action="deleteUserScript.php" method="post">

    <button type="submit">Delete</button>
    <br>
    <a href="CRUD.php">BACK</a>

</form>
    
</body>
</html>