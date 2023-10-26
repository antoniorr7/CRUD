<?php

include 'acciones.php';


    $crud= new Lugar();
    

                $ip= $_POST['ip'];
                $nombre = $_POST['nombre'];
                $descripcion = $_POST['descripcion'];
                $resultado = $crud->modificar($ip,$nombre, $descripcion);
                echo "IP: $ip, Nombre: $nombre, descripcion: $descripcion<br>";
