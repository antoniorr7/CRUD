<?php

include 'acciones.php';


    $crud= new Gestion();
    

                $id= $_POST['id'];
                $nombre = $_POST['nombre'];
                $firma = $_POST['firma'];
                $resultado = $crud->modificar($id,$nombre, $firma);
                echo "ID: $id, Nombre: $nombre, Firma: $firma<br>";
