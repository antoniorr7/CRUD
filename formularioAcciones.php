<!DOCTYPE html>
<html>

<head>
    <title>CRUD de Nombres y Frases</title>
</head>

<body>

    <h1>CRUD de Nombres y Frases</h1>

    <!-- Formulario para añadir un registro -->
    <div>
    <form action="acciones.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="frase">Frase:</label>
        <input type="text" id="frase" name="frase" required>
        <br>
        <button type="submit">Añadir</button>
    </form>
    </div>
    <br><br>
    <div>

    <form action="acciones.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="frase">Frase:</label>
        <input type="text" id="frase" name="frase" required>
        <br>
        <button type="submit">modificar</button>
    </form>
    </div>
    <br><br>
    <div>
    <form action="acciones.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="frase">Frase:</label>
        <input type="text" id="frase" name="frase" required>
        <br>
        <button type="submit">borrar</button>
    </form>
    </div>

</body>

</html>