<?php
session_start();
if ($_SESSION['rol'] !== "administrador") {
    header("Location: ../php/index.php");
    exit;
}
include '../php/conexion.php';

$id = $_GET['id'];

$sql = $conn->prepare("DELETE FROM usuario WHERE id = ?");
$sql->bind_param("i", $id);
$sql->execute();

header("Location: ../php/lista_usuario.php");
exit;
?>
