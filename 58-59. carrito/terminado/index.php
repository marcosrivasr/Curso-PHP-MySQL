<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php
        include_once('layout/menu.php');
    ?>

    <main>
        <?php
            $response = json_decode(file_get_contents('http://localhost/curso/49.%20carrito/terminado/api/productos/api-productos.php?categoria=juguetes'), true);
            if($response['statuscode'] == 200){
                foreach($response['items'] as $item){
                    include('layout/items.php');
                }
            }else{
                echo $response['response'];
            }
        ?>
        
    </main>

    <script src="js/main.js"></script>
</body>
</html>