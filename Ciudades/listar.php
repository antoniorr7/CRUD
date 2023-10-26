<?php

include 'acciones.php';



    $crud= new Lugar();
    
                $resultado = $crud->listar();
                foreach ($resultado as $fila) {
                    echo "IP: " . $fila['ip'] . ", Nombre: " . $fila['lugar'] . ", Descripcion: " . $fila['descripcion'] . "<br><br><br>";
                }

    