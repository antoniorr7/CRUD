<?php
class CRUD {
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

    public function listar() {
        $result = $this->conexion->query("SELECT idJesuita, nombre, firma FROM jesuita");
        return   $result->fetch_all(MYSQLI_ASSOC); // devuelve los datos en array asociativo
    }
}
