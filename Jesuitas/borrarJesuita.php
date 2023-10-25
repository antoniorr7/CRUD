<?php

include 'acciones.php';

$servidor='localhost';
$username='root';
$password='';
$basedatos='jesuitas';

    $crud= new Gestion( $servidor, $username,$password,$basedatos);

    

                $id= $_POST['id'];
                
                $resultado = $crud->borrar($id);
                echo "ID: $id<br>";
