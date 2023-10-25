<?php

include 'acciones.php';

$servidor='localhost';
$username='root';
$password='';
$basedatos='jesuitas';

    $crud= new Lugar( $servidor, $username,$password,$basedatos);

                $ip= $_POST['ip'];
    
                $resultado = $crud->borrar($ip);
                echo "IP: $ip<br>";
        
    