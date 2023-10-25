<?php

include 'acciones.php';

$servidor='localhost';
$username='root';
$password='';
$basedatos='jesuitas';

    $crud= new Lugar( $servidor, $username,$password,$basedatos);
    
                $resultado = $crud->listar();
                foreach ($resultado as $fila) {
                    echo "IP: " . $fila['ip'] . ", Nombre: " . $fila['lugar'] . ", Descripcion: " . $fila['descripcion'] . "<br><br><br>";
                }

    