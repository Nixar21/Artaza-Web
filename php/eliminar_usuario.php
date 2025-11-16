<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== "administrador") {
    header("Location: index.php");
    exit;
}
include 'conexion.php';

// Verificar que el ID viene por GET
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: No se especificó un usuario para eliminar");
}

$id = $_GET['id'];

// Obtener el nombre de la columna ID dinámicamente
$field_info = $conn->query("DESCRIBE usuario");
$id_column = $field_info->fetch_assoc()['Field']; // Primera columna (ID)

// Eliminar el usuario
$sql = $conn->prepare("DELETE FROM usuario WHERE $id_column = ?");
$sql->bind_param("i", $id);

if ($sql->execute()) {
    header("Location: lista_usuario.php");
    exit;
} else {
    die("Error al eliminar: " . $conn->error);
}
?>
