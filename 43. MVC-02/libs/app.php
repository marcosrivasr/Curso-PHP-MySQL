<?php

require_once 'controllers/errores.php';

class App{

    function __construct(){
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);

<<<<<<< HEAD
     
=======

>>>>>>> 1ee031676be127e500b3fc5ec08149e22e60f536
        $archivoController = 'controllers/' . $url[0] . '.php';

        if(file_exists($archivoController)){
            require $archivoController;

            $controller = new $url[0];

            if(isset($url[1])){
                $controller->{$url[1]}();
            }
        }else{
            $controller = new Errores();
        }
    }
    
}
?>