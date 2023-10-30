<?php

include 'acciones.php';


    $crud= new Lugar();

                $ip= $_GET['ip'];
        
                $resultado = $crud->borrar($ip);
                echo "IP: $ip<br>";
                header("refresh:2; url=formularioAcciones.php");
    