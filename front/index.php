<?php
session_start();

if (!isset($_SESSION['rut'])) {
    header('Location: logscreen.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home • Intranet</title>
    <link rel="stylesheet" href="style\style.css">
    <link rel="icon" href="front\img\" type="image/x-icon">

</head>
<body>

    <h1>Bienvenido, <?php echo $_SESSION['rut']; ?></h1>
    
</body>

<footer>
      <p>&copy; InfomaticNuke</p>
      <p>
        <a href="https://www.instagram.com/informaticnuke/" target="_blank">Instagram | </a>
        <a href="https://twitter.com/InformaticNuke" target="_blank">Twitter | </a>
        <a href="https://www.reddit.com/user/InformaticNuke" target="_blank">Reddit | </a>
        <a href="https://steamcommunity.com/id/InformaticNuke/" target="_blank">Steam | </a>
        <a href="https://discord.gg/vkBm8EQ" target="_blank">Discord</a>
      </p>
</footer>

</html>