<?php

require_once 'controllers/error.php';

class App{

    function __construct(){
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        $archivoController = 'controllers/' . $url[0] . '.php';

        if(file_exists($archivoController)){
            require $archivoController;

            $controller = new $url[0];

            if(isset($url[1])){
                $controller->{$url[1]}();
            }
        }else{
            $controller = new Error();
        }
    }
    
}
?>