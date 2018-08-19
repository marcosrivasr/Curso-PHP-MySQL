<?php
    include_once 'includes/survey.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Encuesta</title>
</head>
<body>
    <?php
        $survey = new Survey();
        $showResults = false;
        $option = '';

        if(isset($_POST['lenguaje'])){
            $showResults = true;
            
            $survey->setOptionSelected($_POST['lenguaje']);
            $survey->vote();
        }
    ?>
    <form action="#" method="POST">
        <h2>¿Cuál es tu lenguaje de programación favorito?</h2>

        <?php
            if($showResults){
                $queryLanguages = $survey->showResults();

                echo "<h2>" . $survey->getTotalVotes() . " votos totales</h2>";
                
                foreach ($queryLanguages as $lenguaje) {
                    $porcentaje = $survey->getPercentageVotes($lenguaje['votos']);

                    include 'vistas/vista-resultados.php';
                }
            }else{
                include 'vistas/vista-votacion.php';
            }
        ?>
        
    </form>
</body>
</html>