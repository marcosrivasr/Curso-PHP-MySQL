<?php

class Errores extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Hay un error al cargar el recurso";
        $this->view->render('errores/index');
        //echo "Error al cargar el recurso";
    }
}
?>