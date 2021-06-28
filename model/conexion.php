<?php
$usuario = "root";
$contrasena = "";
$nombre_bd="dbtablerosgys";

try {
    $bd = new PDO(
       'mysql:host=localhost;
        dbname='.$nombre_bd,
        $usuario,
        $contrasena
    );
} catch (Exception $exc) {
    echo "Problema con la conexion";
}

?>
