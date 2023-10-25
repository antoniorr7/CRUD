<?php

include 'acciones.php';

$servidor='localhost';
$username='root';
$password='';
$basedatos='jesuitas';

    $crud= new Gestion( $servidor, $username,$password,$basedatos);
    

                $id= $_POST['id'];
                $nombre = $_POST['nombre'];
                $firma = $_POST['firma'];
                $resultado = $crud->modificar($id,$nombre, $firma);
                echo "ID: $id, Nombre: $nombre, Firma: $firma<br>";
