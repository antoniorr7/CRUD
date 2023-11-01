<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <link rel="stylesheet" href="crud.css">
</head>
<body> 

   <?php

        require 'acciones.php';

            $ciudades = new Lugar();
            $resultado = $ciudades->listar(); 

            echo '<table>';
        foreach ($resultado as $fila) {
            echo '<tr>';
                echo '<td>'.$fila['lugar'].'</td>';
                echo '<td><a href="borrarCiudad.php?ip='.$fila['ip'].'">borrar</a></td>';
                echo '<td><a href="mostrarCiudad.php?ip=' . $fila['ip'] . '&lugar=' . $fila['lugar'] . '&descripcion=' . $fila['descripcion'] . '">modificar</a></td>';
                

            echo '</tr>';
        }
            echo '</table>';
   ?>

</body>
</html>