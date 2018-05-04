<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar datos</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="texto" id="texto">
        <input type="submit" value="Añadir pendiente">
    </form>

    <div id="todolist">
        <?php

            //Conexión a la BD
            $servidor = "localhost";
            $nombreusuario = "root";
            $password = "123!\"·QWE";
            $db = "todolistDB";
        
            $conexion = new mysqli($servidor, $nombreusuario, $password, $db);
        
            if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }

            //Validación de datos para ingresar
            if(isset($_POST['texto'])){
                $texto = $_POST['texto'];
                
                $sql = "INSERT INTO todoTable(texto, completado)
                                    VALUES('$texto', false)";
                
                if($conexion->query($sql) === true){
                    //echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
                }else{
                    die("Error al insertar datos: " . $conexion->error);
                } 
            }
            //Obtención de datos de tabla
            $sql = "SELECT * FROM todoTable";
            $resultado = $conexion->query($sql);

            if($resultado->num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                    ?>
                    <div>
                        <form method="POST" id="form<?php echo $row['id']; ?>" action="">
                            <input name ="completar" value="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" type="checkbox" onchange="completarPendiente(this)"><?php echo $row['texto'];?>
                        </form>
                    </div>
                    <?php
                    
                }
            }

            $conexion->close();

        ?>
    </div>
</body>
</html>