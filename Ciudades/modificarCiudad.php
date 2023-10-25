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
            case 'modificar':
                $ip= $_POST['ip'];
                $nombre = $_POST['nombre'];
                $descripcion = $_POST['descripcion'];
                $resultado = $crud->modificar($ip,$nombre, $descripcion);
                echo "IP: $ip, Nombre: $nombre, descripcion: $descripcion<br>";
        }
    }