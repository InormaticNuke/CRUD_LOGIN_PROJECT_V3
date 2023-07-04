<?php

require ("cnx.php");
session_start();
Class Autenticar{
    private $rut;
    private $clave;
    

    public function __construct($rut,$clave){
        $this->rut = $rut;
        $this->clave = $clave;
    }

    public function Validar(){
        $conexion = new Conexion();
        $conexion->Conecta();
        
        $consulta = "SELECT * FROM usuario WHERE rut = '$this->rut' AND clave = '$this->clave'";
        
        $resultado = $conexion->Ejecuta($consulta);

        if ($resultado->num_rows == 1) {
           
            $_SESSION["rut"] = $this->rut;
            header('Location: index.php');
        } else {
            header('Location: logscreen.php');
        }

    }

}


?>