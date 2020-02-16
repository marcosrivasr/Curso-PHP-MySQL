<?php
    require_once 'database.php';

    class Tuits extends Database{

        function __construct(){
            
        }

        function getData($section){
            $query = $this->connect()->prepare('SELECT * FROM tuits limit :section, 2');
            
            $query->execute(['section' => $section]);
            $res = [];
            $items = [];
            $n = $query->rowCount();
            if($n){
                while ($row = $query->fetch(PDO::FETCH_ASSOC)){
                    $item = Array(
                        'id' => $row['id'],
                        'username' => $row['username'],
                        'username_photo' => $row['username_photo'],
                        'name' => $row['name'],
                        'image' => $row['image'],
                        'text' => $row['text']
                    );
                    array_push($items, $item);
                
                }
                array_push($res, Array('response' => "200"));
                array_push($res, $items);
                array_push($res, Array('page' => ($section + $n)));
                return $res;
            }else{
                // error
                array_push($res, Array('response' => "400"));
                return $res;
            }
        }
    }
?>