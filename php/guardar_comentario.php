<?php
include("../php/conexion.php");

// Validar que los datos existen
if (!isset($_POST['id_articulo'], $_POST['nombre'], $_POST['comentario'])) {
    die("❌ Error: faltan datos del formulario.");
}

$articulo_id = (int) $_POST['id_articulo'];
$nombre = trim($_POST['nombre']);
$comentario = trim($_POST['comentario']);

if ($articulo_id <= 0 || empty($nombre) || empty($comentario)) {
    die("❌ Error: datos inválidos.");
}

$sql = "INSERT INTO comentarios (articulo_id, nombre, comentario, fecha)
        VALUES (?, ?, ?, NOW())";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("❌ Error en prepare: " . $conn->error);
}

$stmt->bind_param("iss", $articulo_id, $nombre, $comentario);

if ($stmt->execute()) {
    header("Location: ../php/blog.php?id=$articulo_id&msg=ok");
    exit;
} else {
    echo "❌ Error al insertar: " . $conn->error;
}
?>
