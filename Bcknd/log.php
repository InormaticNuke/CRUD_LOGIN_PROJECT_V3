<?php
include "auth.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["Rut"]) && isset($_POST["clave"])) {
        $rut = $_POST["Rut"];
        $clave = $_POST["clave"];

        $autenticador = new Autenticar($rut, $clave);
        $autenticador->Validar();
    } else {
        echo "MISSING REQUIRED DATA";
    }
} else {
    echo "NO VALID METHOD";
}

?>