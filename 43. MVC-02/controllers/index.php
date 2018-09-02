<?php

class Index extends Controller{
    function __construct(){
        parent::__construct();
        echo "<p>Controlador Index</p>";
    }

    function saludo(){
        echo "<p>Hola a todos<p>";
    }
}

?>