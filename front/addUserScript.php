<?php
require_once "cnx.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conexion = new Conexion();
    $conexion->Conecta();

    $rut = $_POST['Rut'];
    $nombre = $_POST['nombres'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $Direccion = $_POST['direccion'];
    $fono = $_POST['fono'];
    $password = $_POST['clave'];

    $consulta = "INSERT INTO Usuario (Rut, nombres, apellido1, apellido2, direccion, fono, clave) VALUES ('$rut', '$nombre', '$apellido1', '$apellido2', '$Direccion', $fono, '$password')";

    $resultado = $conexion->Ejecuta($consulta);

    if ($resultado) {
        echo "User Added successfully";
    } else {
        echo "ERROR: ADD USER ERROR";
    }

}
?>