<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== "administrador") {
    header("Location: index.php");
    exit;
}

include 'conexion.php';

// Verificar que el ID viene por POST
if (!isset($_POST['id']) || empty($_POST['id'])) {
    die("Error: No se especificó un usuario para editar");
}

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$rol = $_POST['rol'];

// Obtener el nombre de la columna ID dinámicamente
$field_info = $conn->query("DESCRIBE usuario");
$id_column = $field_info->fetch_assoc()['Field']; // Primera columna (ID)

if (!empty($_POST['contraseña'])) {
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
    $sql = $conn->prepare("UPDATE usuario SET nombre=?, contraseña=?, rol=? WHERE $id_column=?");
    $sql->bind_param("sssi", $nombre, $contraseña, $rol, $id);
} else {
    $sql = $conn->prepare("UPDATE usuario SET nombre=?, rol=? WHERE $id_column=?");
    $sql->bind_param("ssi", $nombre, $rol, $id);
}

if ($sql->execute()) {
    header("Location: lista_usuario.php");
    exit;
} else {
    die("Error al actualizar: " . $conn->error);
}
?>