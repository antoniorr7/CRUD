<?php
class Lugar {
    
    private $conexion;

    public function __construct($host, $usuario, $contrasena, $base_de_datos) { 
        $this->conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);
    }

    public function añadir($ip, $lugar, $descripcion) {
        $query = "INSERT INTO lugar (ip, lugar, descripcion) VALUES ('$ip', '$lugar', '$descripcion')";
        return $this->conexion->query($query);
    }

    public function modificar($ip, $lugar, $descripcion) {
        $query = "UPDATE lugar SET lugar = '$lugar', descripcion = '$descripcion' WHERE ip = '$ip'";
        return $this->conexion->query($query);
    }

    public function borrar($ip) {
        $query = "DELETE FROM lugar WHERE ip = '$ip'";
        return $this->conexion->query($query);
    }
    
    public function listar() {
        $query = "SELECT * FROM lugar"; 
        $resultado = $this->conexion->query($query); 
        $lugares = [];

        foreach ($resultado as $row) {
            $lugares[] = $row;
        }

        return $lugares;
    }
}
