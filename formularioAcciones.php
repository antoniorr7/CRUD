<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <link rel="stylesheet" href="crud.css">
</head>
<body>
    <div>
        <form action="acciones.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label for="firma">Firma:</label>
            <input type="text" id="firma" name="firma" required>
            <input type="hidden" name="accion" value="añadir">
            <br>
            <input type="submit" value="Añadir" >
        </form>
    </div>
    <br><br>
    <div>
        <form action="acciones.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label for ="firma">Firma:</label>
            <input type="text" id="firma" name="firma" required>
            <input type="hidden" name="accion" value="modificar">
            <br>
            <input type="submit" value="Actualizar">
        </form>
    </div>
    <br><br>
    <div>
        <form action="acciones.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label for="firma">Firma:</label>
            <input type="text" id="firma" name="firma" required>
            <input type="hidden" name="accion" value="borrar">
            <br>
            <input type="submit" value="Borrar">
        </form>
    </div>

    <div>
        <form action="acciones.php" method="POST">
            <label for="nombre">Listar toda la Lista de Jesuitas:</label>
            <input type="hidden" name="accion" value="listar">
            <br>
            <input type="submit" value="listar">
        </form>
    </div>

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
                        echo "ID: " . $fila['idJesuita'] . ", Nombre: " . $fila['nombre'] . ", Firma: " . $fila['firma'] . "<br>";
                    }

                    break;
            }
        } else {
            echo "<h2>Edición de Contenido Jesuita</h2>";
        }
        
        
    ?>
    
</body>
</html>
