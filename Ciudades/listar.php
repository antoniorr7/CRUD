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

            case 'listar':
                $resultado = $crud->listar();
                foreach ($resultado as $fila) {
                    echo "IP: " . $fila['ip'] . ", Nombre: " . $fila['lugar'] . ", Descripcion: " . $fila['descripcion'] . "<br><br><br>";
                }

                break;
        }
    } 