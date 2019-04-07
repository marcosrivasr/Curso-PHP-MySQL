<?php

    $password = '123QWE#¢∞';

    echo md5($password).'<br/>';
    echo sha1($password).'<br/>';

    //hash(alg, string)
    foreach (hash_algos() as $algo) {
        echo $algo . ': ' . hash($algo, $password) . '<br/>';
    }

    // password_hash

    $hash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 20]);
    echo $hash . '<br/>';

    //password_verify()
    if(password_verify($password, $hash)){
        echo 'El password es correcto';
    }

?>