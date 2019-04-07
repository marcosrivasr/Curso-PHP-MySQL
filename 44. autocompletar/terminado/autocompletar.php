<?php

include_once 'Database.php';

class Autocompletar extends Database{

    function buscar($texto){
        $res = array();
        $query = $this->connect()->prepare("SELECT * FROM mascotas WHERE nombre LIKE :texto");
        $query->execute(['texto' => $texto . '%']);

        if($query->rowCount()){
            while($r = $query->fetch()){
                array_push($res, $r['nombre']);
            }
        }
        return $res;
    }
}

?>