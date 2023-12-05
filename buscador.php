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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitacora - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="src/css/styles.css">
    <style>
        /* body {
            background-color: #000000 !important;
            color: #ffffff !important;
        } */
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="src/img/LogoDIC.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="d-flex form-navbar" method="GET" action="">
                <input class="form-control me-2" type="search" placeholder="Buscar por nombre" name="buscar" id="buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informaciones
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Facultad Informatica</a></li>
                            <li><a class="dropdown-item" href="#">Otros</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Agendar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center mt-3">Ejemplo llamadas base datos</h1>

        <div class="container">
          <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end"> 
             <?php
            
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<p>Nombre: ' . $row['nombre'] . '</p>';
                    echo '<p>Objetivo: ' . $row['objetivo'] . '</p>';
                    echo '<p>RUT: ' . $row['RUT'] . '</p>';
                    
                    $fecha = strtotime($row['fecha']);
                    $dias_semana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
                    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
                    $fechaEnPalabras = $dias_semana[date('w', $fecha)] . ', ' . date('d', $fecha) . ' de ' . $meses[date('n', $fecha) - 1] . ' de ' . date('Y', $fecha);
                    echo '<p>Fecha: ' . $fechaEnPalabras . '</p>';
                }
            }
            ?>
            </div>
        </div>
    </div>

    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Genius Solutions
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
