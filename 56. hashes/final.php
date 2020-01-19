<?php
$texto = 'Este es un texto de prueba';

echo md5($texto).'<br/>';
echo hash('gost', $texto).'<br/>';
echo sha1($texto).'<br/>';

foreach(hash_algos() as $a){
    echo $a . ': ' . hash($a, $texto).'<br/>';
}

$hash = password_hash($texto, PASSWORD_DEFAULT, ['cost'=>14]);
if(password_verify($texto, $hash)){
echo "mismo texto!";
}



?>