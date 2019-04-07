<?php

crearMiniatura($_FILES['imagen']['name']);

function crearMiniatura($nombreArchivo){

    $finalWidth    = 100;
    $dirFullImage  = 'imagenes/full/';
    $dirThumbImage = 'imagenes/thumbs/';
    $tmpName       = $_FILES['imagen']['tmp_name'];
    $finalName     = $dirFullImage . $_FILES['imagen']['name'];

    // copiar imagen a la carpeta full
    copiarImagen($tmpName, $finalName);

    $im = null;

    if(preg_match('/[.](jpg)$/', $nombreArchivo)){
        $im = imagecreatefromjpeg($finalName);
    }else if(preg_match('/[.](gif)$/', $nombreArchivo)){
        $im = imagecreatefromgif($finalName);
    }else if(preg_match('/[.](png)$/', $nombreArchivo)){
        $im = imagecreatefrompng($finalName);
    }

    $width = imagesx($im);
    $height = imagesy($im);

    $minWidth = $finalWidth;
    $minHeight = floor($height * ($finalWidth / $width));

    $imageTrueColor = imagecreatetrueColor($minWidth, $minHeight);

    imagecopyresized($imageTrueColor, $im, 0, 0, 0, 0, $minWidth, $minHeight, $width, $height);

    if(!file_exists($dirThumbImage)){
        if(!mkdir($dirThumbImage)){
            die("Hubo un problema con la miniatura");
        }
    }

    imagejpeg($imageTrueColor, $dirThumbImage . $nombreArchivo);
}

function copiarImagen($origen, $destino){
    move_uploaded_file($origen, $destino);
}

?>