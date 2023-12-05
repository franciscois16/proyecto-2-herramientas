<?php
$servidor = "localhost";
$database = "herramientas2";
$user = "admin123";
$password = "123";
$conn = mysqli_connect($servidor, $user, $password, $database);

if (!$conn) {
    die("Ha ocurrido el siguiente error al intentar conectar: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST["user"];
    $password = $_POST["password"];
    $remember_password = isset($_POST["remember_password"]);

    if (validarUsuario($conn, $user, $password)) {
        header("Location: subir_resolucion.php");
        exit();
    } else {
        echo "Autenticación fallida. Por favor, inténtalo de nuevo.";
    }
}

function validarUsuario($conn, $user, $password) {
    // Consulta para buscar el usuario en la base de datos
    $query = "SELECT usuario, password FROM login WHERE usuario = ?";

    // Prepara la consulta
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $user);

    // Ejecuta la consulta
    mysqli_stmt_execute($stmt);

    // Obtiene el resultado
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) == 1) {
        // Vincula las variables a los resultados
        mysqli_stmt_bind_result($stmt, $dbUser, $dbPassword);
        mysqli_stmt_fetch($stmt);

        if (password_verify($password, $dbPassword)) {
            // La autenticación es exitosa
            return true;
        }
    }

    // Cierra la consulta
    mysqli_stmt_close($stmt);

    return false;
}
?>
