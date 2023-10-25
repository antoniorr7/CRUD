<?php
class Gestion {
    
    private $conexion;

    public function __construct($host, $usuario, $contrasena, $base_de_datos) { 
        $this->conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);
    }

    public function agregar($id, $nombre, $firma) {
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
    
        $lugares = [];
        
        foreach ($resultado as $row) {
            $lugares[] = $row;
        }
    
        return $lugares;
    }
    
}