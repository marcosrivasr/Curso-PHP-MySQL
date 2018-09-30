<?php

class Success extends Controller{

    function __construct(){
        parent::__construct();
        
        //echo "Error al cargar el recurso";
    }

    function nuevoAlumno(){
        $this->view->mensaje = "Nuevo alumno creado correctamente";
        $this->view->render('success/index');
    }
}
?>