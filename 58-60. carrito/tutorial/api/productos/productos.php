<?php
include_once '../../lib/db.php';

class Productos extends DB{

    function __construct(){
        parent::__construct();
    }

    public function get($id){
        $query = $this->connect()->prepare('SELECT * FROM items WHERE id = :id LIMIT 0,12');
        $query->execute(['id' => $id]);

        $row = $query->fetch();

        return [
            'id'        => $row['id'],
            'nombre'    => $row['nombre'],
            'precio'    => $row['precio'],
            'categoria' => $row['categoria'],
            'imagen'    => $row['imagen'],
        ];
    }

    public function getItemsByCategory($category){
        $query = $this->connect()->prepare('SELECT * FROM items WHERE categoria = :cat LIMIT 0,12');
        $query->execute(['cat' => $category]);

        $items = [];

        while($row = $query->fetch(PDO::FETCH_ASSOC)){

            $item = [
                'id'        => $row['id'],
                'nombre'    => $row['nombre'],
                'precio'    => $row['precio'],
                'categoria' => $row['categoria'],
                'imagen'    => $row['imagen'],
            ];

            array_push($items, $item);
        }
        return $items;
    }
}

?>