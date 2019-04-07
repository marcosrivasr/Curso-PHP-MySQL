<?php

include_once 'autocompletar.php';

$texto = $_GET['tipo'];

$modelo = new Autocompletar();

$res = $modelo->buscar($texto);

echo json_encode($res);

?>