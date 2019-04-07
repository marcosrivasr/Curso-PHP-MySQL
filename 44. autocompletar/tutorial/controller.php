<?php

include_once 'autocompletar.php';

$modelo = new Autocompletar();

$texto = $_GET['tipo-mascota'];

$res = $modelo->buscar($texto);

echo json_encode($res);

?>