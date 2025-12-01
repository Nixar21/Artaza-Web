<?php
include("conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM comentarios WHERE id_coment = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: ../php/blog.php?msg=eliminado");
        exit();
    } else {
        echo "❌ Error: " . $conn->error;
    }
} else {
    echo "ID no recibido.";
}
?>
