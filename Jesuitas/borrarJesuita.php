<?php

include 'acciones.php';

$servidor='localhost';
$username='root';
$password='';
$basedatos='jesuitas';

    $crud= new Gestion( $servidor, $username,$password,$basedatos);
    
    if (isset($_POST['accion'])) {
        $accion = $_POST['accion']; // Utilizo un campo Hidden para poder ver la acción que pulsa con el input
    
        switch ($accion) {
            case 'borrar':
                $id= $_POST['id'];
                
                $resultado = $crud->borrar($id);
                echo "ID: $id<br>";
        }
    }