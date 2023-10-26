<?php

include 'acciones.php';



    $crud= new Gestion( $servidor, $username,$password,$basedatos);

                $id= $_POST['id'];
                $nombre = $_POST['nombre'];
                $firma = $_POST['firma'];
                $resultado = $crud->añadir($id,$nombre, $firma);
                echo "ID: $id, Nombre: $nombre, Firma: $firma<br>";
