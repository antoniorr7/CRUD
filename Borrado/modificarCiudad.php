

<?php

require 'acciones.php';
require 'mostrarCiudad.php';


    $lugares = new Lugar();

               $ip= $_GET['ip'];
                $lugar = $_GET['lugar']; 
                $descripcion = $_GET['descripcion'];

                $lugares->modificar($ip, $lugar, $descripcion);
              
        echo 'modificado';
        header("refresh:3; url=formularioAcciones.php");