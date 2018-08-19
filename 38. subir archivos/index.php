<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir archivos</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <h2>Subir archivo</h2>
        <input type="file" name="file">
        <p class="center"><input type="submit" value="Subir archivo"></p>
    </form>
</body>
</html>