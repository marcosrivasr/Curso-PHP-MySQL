<?php

class View{

    function __construct(){
        //echo "<p>Vista principal</p>";
    }

    function render($nombre){
        require 'views/' . $nombre . '.php';
    }
}

?>