<?php
session_start();
if ($_SESSION['rol'] !== "administrador") {
    header("Location: ../php/index.php");
    exit;
}

include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$rol = $_POST['rol'];

if (!empty($_POST['contraseña'])) {
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
    $sql = $conn->prepare("UPDATE usuario SET nombre=?, contraseña=?, rol=? WHERE id=?");
    $sql->bind_param("sssi", $nombre, $contraseña, $rol, $id);
} else {
    $sql = $conn->prepare("UPDATE usuario SET nombre=?, rol=? WHERE id=?");
    $sql->bind_param("ssi", $nombre, $rol, $id);
}

$sql->execute();
header("Location: lista_usuario.php");
exit;
?>
