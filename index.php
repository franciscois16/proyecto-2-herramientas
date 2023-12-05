<?php

$servidor = "localhost";
$database = "herramientas2";
$user = "admin123";
$password ="123";
$conn = mysqli_connect($servidor, $user, $password, $database);
if(!$conn){
    die("Ha ocurrido el siguiente error al intentar conectar: " . mysqli_connect_error());
}

$query = "SELECT * FROM general";
$result = mysqli_query($conn, $query);

/* $user_agent = $_SERVER['HTTP_USER_AGENT'];

   if (strpos($user_agent, 'Mobile') !== false) {
       
       echo "Estas en un dispositivo movil";
   } else {
       
       echo "Estas en una PC";
   } */

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="src/css/styles.css">
</body>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="src/img/LogoDIC.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="btn btn-outline-success" href="buscador.php">Ir a otra página</a>
            <a class="btn btn-outline-success" href="ejemplo.php">Iniciar sesion</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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


    <div class="container mr-3 ml-3 mt-3 mb-3">
        <div class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end"><?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<p>Nombre: ' . $row['nombre'] . '';
                echo '<p>Objetivo: ' . $row['objetivo'] . '</p>';
                echo '<p>Fecha: ' . $row['fecha'] . '</p>';
                echo '<p>RUT: ' . $row['RUT'] . '</p>';
                echo '<p>Telefono: ' . $row['telefono'] . '</p>';
            }
       ?></div>
    </div>

    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Genius Solutions
        </div>
    </footer>

</body>
</html>