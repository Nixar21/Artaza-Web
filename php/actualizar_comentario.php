<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $comentario = $_POST['comentario'];

    $sql = "UPDATE comentarios SET nombre = ?, comentario = ? WHERE id_coment = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $nombre, $comentario, $id);

    if ($stmt->execute()) {
        header("Location: ../php/blog.php?msg=editado");
        exit();
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>
