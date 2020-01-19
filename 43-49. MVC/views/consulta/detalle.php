<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>

    <div id="main">
        <h1 class="center">Detalle de <?php echo $this->alumno->matricula; ?> </h1>

        <div class="center"><?php echo $this->mensaje; ?></div>

        <form action="<?php echo constant('URL'); ?>consulta/actualizarAlumno" method="POST">

            <p>
                <label for="matricula">Matrícula</label><br>
                <input type="text" name="matricula" disabled value="<?php echo $this->alumno->matricula; ?>" required>
            </p>
            <p>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" value="<?php echo $this->alumno->nombre; ?>" required>
            </p>
            <p>
                <label for="apellido">Apellido</label><br>
                <input type="text" name="apellido" value="<?php echo $this->alumno->apellido; ?>" required>
            </p>

            <p>
            <input type="submit" value="Actualizar alumno">
            </p>

        </form>
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>