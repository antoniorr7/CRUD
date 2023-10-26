<?php

require 'acciones.php';



    $crud= new Gestion();
    
    

                $resultado = $crud->listar();
                foreach ($resultado as $fila) {
                    echo "ID: " . $fila['idJesuita'] . ", Nombre: " . $fila['nombre'] . ", Firma: " . $fila['firma'] . "<br><br><br>";
                }

    