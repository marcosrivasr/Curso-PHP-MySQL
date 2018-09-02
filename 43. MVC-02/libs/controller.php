<?php

class Controller{

    function __construct(){
        $this->view = new View();
        echo "<p>Controlador principal</p>";
    }
}

?>