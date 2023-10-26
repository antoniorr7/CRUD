<?php

include 'acciones.php';


    $crud= new Lugar();

                $ip= $_POST['ip'];
    
                $resultado = $crud->borrar($ip);
                echo "IP: $ip<br>";
        
    