<?php
    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "123!\"·QWE";
    $db = "todolistDB";

    $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
    }

    /*
    $sql = "CREATE DATABASE todolistDB";
    if($conexion->query($sql) === true){
        echo "Base de datos creada correctamente...";
    }else{
        die("Error al crear base de datos: " . $conexion->error);
    }
    */

    $sql = "CREATE TABLE todoTable(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        texto VARCHAR(100) NOT NULL,
        completado BOOLEAN NOT NULL,
        timestamp TIMESTAMP
    )";

    if($conexion->query($sql) === true){
        echo "La tabla se creó correctamente...";
    }else{
        die("Error al crear tabla: " . $conexion->error);
    }

?>