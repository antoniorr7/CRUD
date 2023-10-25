<?php

include 'formularioAcciones.html';
include 'acciones.php';

$servidor='localhost';
$username='root';
$password='';
$basedatos='jesuitas';

    $crud= new Gestion( $servidor, $username,$password,$basedatos);
    
    if (isset($_POST['accion'])) {
        $accion = $_POST['accion']; // Utilizo un campo Hidden para poder ver la acción que pulsa con el input
    
        switch ($accion) {
            case 'agregar':
                $nombre = $_POST['nombre'];
                $firma = $_POST['firma'];
                $resultado = $crud->agregar($nombre, $firma);
                break;
    
            case 'modificar':
                $id = $_POST['id'];
                $nombre = $_POST['nombre'];
                $firma = $_POST['firma'];
                $resultado = $crud->modificar($id, $nombre, $firma);
                break;
    
            case 'borrar':
                $id = $_POST['id'];
                $resultado = $crud->borrar($id);
                break;
    
            case 'listar':
                $resultado = $crud->listar();
                foreach ($resultado as $fila) {
                    echo "ID: " . $fila['idJesuita'] . ", Nombre: " . $fila['nombre'] . ", Firma: " . $fila['firma'] . "<br><br><br>";
                }

                break;
        }
    } else {
        echo "<h2>Edición de Contenido Jesuita</h2>";
    }
    
