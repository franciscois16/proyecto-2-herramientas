<?php
$servidor = "localhost";
$database = "herramientas2";
$user = "admin123";
$password = "123";
$conn = mysqli_connect($servidor, $user, $password, $database);
if (!$conn) {
    die("Ha ocurrido el siguiente error al intentar conectar: " . mysqli_connect_error());
}

$result = null;

if (isset($_GET['buscar'])) {
    $buscar = $_GET['buscar'];
    $query = "SELECT * FROM general WHERE nombre LIKE '%$buscar%'";
    $result = mysqli_query($conn, $query);
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</head>

<style>
    body {
        background-color: #000000 !important;
        color: #ffffff !important;
    }
</style>

<body>
    <div class="container">
        <h1 class="text-center">Ejemplo llamadas base datos</h1>

        <form method="GET" action="">
            <div class="form-group">
                <label for="buscar">Buscar por nombre:</label>
                <input type="text" name="buscar" id="buscar" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>

        <div class="container">
            <?php
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<p>Nombre: ' . $row['nombre'] . '</p>';
                    echo '<p>Objetivo: ' . $row['objetivo'] . '</p>';
                    echo '<p>RUT: ' . $row['RUT'] . '</p>';
                    
                    // Formatea la fecha en palabras en español
                    $fecha = strtotime($row['fecha']); // Convierte la fecha en formato Unix timestamp
                    $dias_semana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
                    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                    $fechaEnPalabras = $dias_semana[date('w', $fecha)] . ', ' . date('d', $fecha) . ' de ' . $meses[date('n', $fecha) - 1] . ' de ' . date('Y', $fecha);
                    echo '<p>Fecha: ' . $fechaEnPalabras . '</p>';
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
