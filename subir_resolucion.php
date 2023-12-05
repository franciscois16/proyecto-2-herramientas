<!DOCTYPE html>
<html>
<head>
    <title>Administrador de Resoluciones</title>
</head>
<body>
    <h1>Agregar Resoluciones</h1>
    <form action="procesar_resolucion.php" method="post" enctype="multipart/form-data">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" class="name" required>
        <br>
        <label for="file">Archivo:</label>
        <input type="file" id="file" name="file" required>
        <br>
        <input type="submit" value="Agregar Resolución">
    </form>
</body>
</html>
