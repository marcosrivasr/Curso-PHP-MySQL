<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/login.css">
    <title>Registro</title>
</head>
<body>
    <?php require 'views/header.php'; ?>

    <div id="login-main">
        <form action="signup/newUser" method="POST">
        <div></div>
            <h2>Registrarse</h2>

            <p>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </p>
            <p>
                <label for="password">password</label>
                <input type="text" name="password" id="password">
            </p>
            <p>
                <input type="submit" value="Iniciar sesión" />
            </p>
            <p>
                ¿Tienes una cuenta? <a href="<? echo constant('URL'); ?>">Iniciar sesion</a>
            </p>
        </form>
    </div>
</body>
</html>