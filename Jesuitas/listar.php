<?php

include 'acciones.php';

$servidor='localhost';
$username='root';
$password='';
$basedatos='jesuitas';

    $crud= new Gestion( $servidor, $username,$password,$basedatos);
    
    

                $resultado = $crud->listar();
                foreach ($resultado as $fila) {
                    echo "ID: " . $fila['idJesuita'] . ", Nombre: " . $fila['nombre'] . ", Firma: " . $fila['firma'] . "<br><br><br>";
                }

    