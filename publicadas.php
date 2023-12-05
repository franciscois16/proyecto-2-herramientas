<?php
$upload_dir = __DIR__ . '/uploads'; 

$conn = mysqli_connect("localhost", "admin123", "123", "herramientas2");

if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$query = "SELECT name, file_name FROM resoluciones";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<h1>Lista de Resoluciones</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Imagen</th><th>Ver Resolución</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        $resolucion_name = $row['name'];
        $file_name = $row['file_name'];

        $file_path = $upload_dir . '/' . $file_name;

        if (file_exists($file_path) && exif_imagetype($file_path) !== false) {
           
            echo "<tr>";
            echo "<td>$resolucion_name</td>";
            echo "<td><img src='uploads/$file_name' alt='$resolucion_name' width='100'></td>";
            echo "<td><a href='uploads/$file_name' target='_blank'>Ver Resolución</a></td>";
            echo "</tr>";
        } else {
            echo "<tr>";
            echo "<td>$resolucion_name</td>";
            echo "<td>No disponible</td>";
            echo "<td><a href='uploads/$file_name' target='_blank'>Ver Resolución</a></td>";
            echo "</tr>";
        }
    }

    echo "</table>";
} else {
    echo "No hay resoluciones disponibles en este momento.";
}

mysqli_close($conn);
?>

