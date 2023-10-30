<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario ciudad</title>
    <link rel="stylesheet" href="crud.css">
</head>
<body>
<?php    
   
    $ip = $_GET['ip'];
    $lugar = $_GET['lugar'];
    $descripcion = $_GET['descripcion'];

    echo '<form method="GET" action="modificarCiudad.php">';
    echo '<input type="text" name="ip" value="' . $ip . '"><br>';
    echo '<input type="text" name="lugar" value="' . $lugar . '"><br>';
    echo '<input type="text" name="descripcion" value="' . $descripcion . '"><br>';
    echo '<input type="submit" value="Enviar">';
    echo '</form>';
    ?>
</body>
</html>