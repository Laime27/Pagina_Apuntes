<?php

try {

    $host = "localhost";
    $usuario = "root";
    $contraseña = "cesarlaime27";
    $bd = "notas";

    //creando una instancia de msqli
    $conexion = new PDO("mysql:host=$host; dbname=$bd", $usuario, $contraseña);
} catch (Exception $e) {

    echo "no se conecto ", $e->getMessage();
}
