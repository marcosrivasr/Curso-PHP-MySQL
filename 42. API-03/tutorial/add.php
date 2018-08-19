<?php

    include_once 'apipeliculas.php';

    $api = new ApiPeliculas();

    if(isset($_POST['nombre']) && isset($_FILES['imagen'])){
        if($api->subirImagen($_FILES['imagen'])){
            // insertar datos
            $item = array(
                'nombre' => $_POST['nombre'],
                'imagen' => $api->getImagen()
            );
            $api->add($item);
        }else{
            $api->error('Error con el archivo: ' . $api->getError());
        }
    }else{
        $api->error('Error al llamar a la API');
    }

?>