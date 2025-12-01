<?php
include("conexion.php");

$id = $_GET['id'];
$estado = $_GET['estado'];

$sql = "UPDATE soporte SET estado=$estado WHERE id_soporte=$id";
$conn->query($sql);

header("Location: soporte_admin.php");
?>
