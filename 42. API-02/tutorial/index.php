<?php

    include_once 'apipeliculas.php';

    $api = new ApiPeliculas();

    $api->getAll();
    

?>