<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP 5-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/f8f7cfb64d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet"> 
    <link rel="shortcut icon" href="index.ico" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
    <title>Índice</title>
</head>
<body>
    <h1>Página de inicio de XAMPP</h1>
    <iframe src="table.php" frameborder="0" class="tabla"></iframe>

    <form method="post" action="openHtdocs.php">
        <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>" />
        <input type="submit" value="Acceder a la carpeta local de htdocs" class="btn btn-primary htdocs">
    </form>
</body>

</html>