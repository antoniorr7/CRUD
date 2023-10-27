<?php

include 'acciones.php';



    $crud= new Gestion();

    
                $id= $_POST['id'];
                
                $resultado = $crud->borrar($id);
                echo "ID: $id<br>";
