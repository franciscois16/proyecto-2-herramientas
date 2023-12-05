<?php

if(!empty($_POST["btningresar"])) {
    if(empty($_POST["usuario"]) || empty($_POST["password"])) {
        echo '<div class="alert alert-danger">Los Campos están vacíos</div>';
    } else {
        $usuario = $_POST["usuario"];
        $clave = $_POST["password"];

        $sql = $conexion->query("SELECT * FROM login WHERE usuario='$usuario' AND password='$clave'");
        if ($sql) {
            if ($datos = $sql->fetch_object()) {
                header("location:subir_resolucion.php");
            } else {
                echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            }
        } else {
            echo '<div class="alert alert-danger">Error: ' . $conexion->error . '</div>';
        }
    }
}


?>