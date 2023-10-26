<?php
class Gestion {

    public function __construct() { 
        include 'config_db.php';
        $this->conexion = new mysqli(HOST, USER, PASSWORD, DATABASE);
    }

    public function añadir($id, $nombre, $firma) {
        $query = "INSERT INTO jesuita (idJesuita, nombre, firma) VALUES ('$id', '$nombre', '$firma')";
        return $this->conexion->query($query);
    }

    public function modificar($id, $nombre, $firma) {
        $query = "UPDATE jesuita SET nombre = '$nombre', firma = '$firma' WHERE idJesuita = $id";
        return $this->conexion->query($query);
    }

    public function borrar($id) {
        $query = "DELETE FROM jesuita WHERE idJesuita = $id";
        return $this->conexion->query($query);
    }
    public function listar(){
        $query = "SELECT * FROM jesuita"; 
    
        $resultado = $this->conexion->query($query); 
    
        $jesuita = [];
        
        foreach ($resultado as $row) {
            $jesuita[] = $row;
        }
    
        return $jesuita;
    }
    
}