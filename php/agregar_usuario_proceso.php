<?php
session_start();
if ($_SESSION['rol'] !== "administrador") {
    header("Location: ../php/index.php");
    exit;
}

include '../php/conexion.php';

$nombre = $_POST['nombre'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
$rol = $_POST['rol'];

$sql = $conn->prepare("INSERT INTO usuario (nombre, contraseña, rol) VALUES (?, ?, ?)");
$sql->bind_param("sss", $nombre, $contraseña, $rol);
$sql->execute();

header("Location: ../php/lista_usuario.php");
exit;
?>
