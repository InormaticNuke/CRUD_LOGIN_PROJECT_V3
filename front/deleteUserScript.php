<?php
require_once 'cnx.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conexion = new Conexion();
    $conexion->Conecta();

    $rut = $_POST['Rut'];
    

    $consulta = "DELETE FROM Usuario WHERE Rut = '$rut'";
    $resultado = $conexion->Ejecuta($consulta);

    if ($resultado1 && $resultado2) {
        echo "Deleted Successfully";
        header('Location: CRUD.php');
    } else {
        echo "ERROR: CANNOT DELETE USER ";
    }

    $conexion->Desconecta($conexion);
}
?>