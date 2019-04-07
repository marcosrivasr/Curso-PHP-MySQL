<?php

crearMiniatura($_FILES['imagen']['name']);

function copiarImagen($origen, $destino){
    move_uploaded_file($origen, $destino);
}

function crearMiniatura($nombreArchivo) {

    $finalWidth    = 100;
    $dirFullImage  = 'imagenes/full/';
    $dirThumbImage = 'imagenes/thumbs/';
    $tmpName       = $_FILES['imagen']['tmp_name'];
    $finalName     = $dirFullImage . $_FILES['imagen']['name'];

    
    copiarImagen($_FILES['imagen']['tmp_name'], $dirFullImage . $_FILES['imagen']['name'] );
      
    $im = null;
     if(preg_match('/[.](jpg)$/', $nombreArchivo)) {
         $im = imagecreatefromjpeg($dirFullImage . $nombreArchivo);
     } else if (preg_match('/[.](gif)$/', $nombreArchivo)) {
         $im = imagecreatefromgif($dirFullImage . $nombreArchivo);
     } else if (preg_match('/[.](png)$/', $nombreArchivo)) {
         $im = imagecreatefrompng($dirFullImage . $nombreArchivo);
     }
      
     $width = imagesx($im);
     $height = imagesy($im);
      
     $miniWidth = $finalWidth;
     $miniHeight = floor($height * ($finalWidth / $width));
      
     $imageTrueColor = imagecreatetruecolor($miniWidth, $miniHeight);
      
     imagecopyresized($imageTrueColor, $im, 0,0,0,0,$miniWidth,$miniHeight,$width,$height);
      
    if(!file_exists($dirThumbImage)) {
        if(!mkdir($dirThumbImage)) {
            die("Hubo un problema! vuélvelo a intentar");
        } 
    }
  
     imagejpeg($imageTrueColor, $dirThumbImage . $nombreArchivo);
     $html = '<img src="' . $dirThumbImage . $nombreArchivo . '" alt="image" />';
     $html .= '<br />Tu imagen ha sido creada exitosamente';
     echo $html;
 }

 ?>