<div class="opcion">
    <?php 
        $anchoBarra = $porcentaje * 5;
        $estilo = "barra";
        if($survey->getOptionSelected() == $lenguaje['opcion']) $estilo = "seleccionado";

        echo $lenguaje['opcion'];
    ?>
    <div class="<?php echo $estilo; ?>" style="width: <?php echo $anchoBarra .'px'; ?>"><?php echo $porcentaje . '%'  ?></div>
</div>