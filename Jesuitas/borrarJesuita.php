<?php

include 'acciones.php';



    $crud= new Gestion( $servidor, $username,$password,$basedatos);

    

                $id= $_POST['id'];
                
                $resultado = $crud->borrar($id);
                echo "ID: $id<br>";
