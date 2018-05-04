<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Insertar datos</title>
</head>
<body>
    <div id="main-container">
        <form id="nuevo-pendiente-container" action="index.php" method="GET">
            <p>Buscar nombre de usuario por id</p>
            <input type="text" name="id">
            <input type="submit" value="buscar">

            <div id="resultado">
                <?php
                    if(isset($_GET['id'])){
                        //Conexión a la BD
                        $servidor = "localhost";
                        $nombreusuario = "root";
                        $password = "123!\"·QWE";
                        $db = "todolistDB";
                    
                        $conexion = new mysqli($servidor, $nombreusuario, $password, $db);
                    
                        if($conexion->connect_error){
                            die("Conexión fallida: " . $conexion->connect_error);
                        }

                        $id = $_GET['id'];

                        $sql = "SELECT nombre FROM usuarios WHERE id=$id";
                        
                        //Obtención de datos de tabla
                        $resultado = $conexion->query($sql);
                        
                        while($row = $resultado->fetch_assoc()){
                            echo $row['nombre'];
                        }
                    }
                
                ?>
            </div>
        </form>
        
</body>
</html>