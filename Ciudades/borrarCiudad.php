<?php

include 'acciones.php';

$servidor='localhost';
$username='root';
$password='';
$basedatos='jesuitas';

    $crud= new Lugar( $servidor, $username,$password,$basedatos);
    
    if (isset($_POST['accion'])) {
        $accion = $_POST['accion']; // Utilizo un campo Hidden para poder ver la acción que pulsa con el input
    
        switch ($accion) {
            case 'borrar':
                $ip= $_POST['ip'];
    
                $resultado = $crud->borrar($ip);
                echo "IP: $ip<br>";
        }
    }