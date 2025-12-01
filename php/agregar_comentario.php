<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $articulo_id = $_POST['articulo_id'];
    $nombre = $_POST['nombre'];
    $comentario = $_POST['comentario'];

    if (empty($nombre) || empty($comentario)) {
        die("Completa todos los campos.");
    }

    $sql = "INSERT INTO comentarios (articulo_id, nombre, comentario, fecha) VALUES (?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $articulo_id, $nombre, $comentario);

    if ($stmt->execute()) {
        header("Location: ../php/blog.php?id=$articulo_id&msg=ok");
        exit();
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>
