<?php

class Nuevo extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('nuevo/index');
        //echo "<p>Nuevo controlador Main</p>";
    }

    function registrarAlumno(){
        echo "Alumno creado";
        $this->model->insert();
    }
}

?>