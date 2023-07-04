
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD • QPromotor</title>
    <link rel="stylesheet" href="style\style.css">
</head>
<body>

    <h1>CRUD Mostrar data</h1>

    <div>
        <?php
        require_once "Bcknd/cnx.php";
        $conexion = new Conexion();
        $conexion->Conecta();

        $result = $conexion->Ejecuta("SELECT * FROM Usuario");

        if ($result->num_rows > 0) {
            echo "<table>";

            echo "<tr><th>Rut</th><th>nombres</th><th>apellido1</th><th>apellido2</th><th>direccion</th><th>fono</th><th>clave</th></tr>";
                while ($fila = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila['Rut'] . "</td>";
                    echo "<td>" . $fila['nombres'] . "</td>";
                    echo "<td>" . $fila['apellido1'] . "</td>";
                    echo "<td>" . $fila['apellido2'] . "</td>";
                    echo "<td>" . $fila['direccion'] . "</td>";
                    echo "<td>" . $fila['fono'] . "</td>";
                    echo "<td>" . $fila['clave'] . "</td>";
                    echo "</tr>";
                    }

                    echo "</table>";

                } else {
                    echo "No se encontraron registros en la tabla Usuario.";
                }
        ?>
        </div>
    
</body>
</html>