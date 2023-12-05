<?php
session_start();

$servidor = "localhost";
$database = "herramientas2";
$user = "admin123";
$password = "123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_name = $_POST["name"];
    $file_name = $_FILES["file"]["name"];
    $file_tmp = $_FILES["file"]["tmp_name"];

    $conn = mysqli_connect($servidor, $user, $password, $database);

    if (!$conn) {
        die("Ha ocurrido un error al intentar conectar: " . mysqli_connect_error());
    }

    $query = "INSERT INTO resoluciones (name, file_name) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    if (!$stmt) {
        die("Error in prepared statement: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ss", $input_name, $file_name);

    if (mysqli_stmt_execute($stmt)) {
        $upload_dir = "uploads/"; 
        move_uploaded_file($file_tmp, $upload_dir . $file_name);
        echo "Resolución agregada con éxito.";




    } else {
        echo "Error al agregar la resolución.";
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Botón para Redireccionar</title>
</head>
<body>
    <button><a href="publicadas.php" target="_blank">Ir a Publicadas</a></button>
</body>
</html>
