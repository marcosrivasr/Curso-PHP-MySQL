<?php

require_once 'controllers/errores.php';

class App{

    function __construct(){
        $url = isset($_GET['url'])? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if(empty($url[0])){
            $archivoController = 'controllers/index.php';
            require $archivoController;
            $controller = new Index();
            $controller->render();
            $controller->loadModel('index');
            return false;
        }else{
            $archivoController = 'controllers/' . $url[0] . '.php';
        }
 
        if(file_exists($archivoController)){
            require $archivoController;

            $controller = new $url[0];
            $controller->loadModel($url[0]);

            // Se obtienen el número de param
            $nparam = sizeof($url);
            // si se llama a un método
            if($nparam > 1){
                // hay parámetros
                if($nparam > 2){
                    $param = [];
                    for($i = 2; $i < $nparam; $i++){
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                    // solo se llama al método
                    $controller->{$url[1]}();
                }
            }else{
                // si se llama a un controlador
                $controller->render();  
            }
        }else{
            $controller = new Errores();
        }
    }
    
}
?>