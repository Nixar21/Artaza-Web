<?php
session_start();
if ($_SESSION['rol'] !== "administrador") {
    header("Location: ../php/index.php");
    exit;
}
include '../php/conexion.php';

$id = $_GET['id'];
$sql = $conn->prepare("SELECT * FROM usuario WHERE id = ?");
$sql->bind_param("i", $id);
$sql->execute();
$data = $sql->get_result()->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Editar Usuario</title></head>
<body style="font-family: Arial; padding:20px;">

<h2>Editar Usuario</h2>

<form method="POST" action="../php/editar_usuario_proceso.php">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    Nombre:<br>
    <input type="text" name="nombre" value="<?= $data['nombre'] ?>" required><br><br>

    Nueva contraseña (opcional):<br>
    <input type="password" name="contraseña"><br><br>

    Rol:<br>
    <select name="rol">
        <option value="usuario" <?= $data['rol']=="usuario"?"selected":"" ?>>Usuario</option>
        <option value="administrador" <?= $data['rol']=="administrador"?"selected":"" ?>>Administrador</option>
    </select>
    <br><br>

    <button type="submit" style="padding:10px 20px; background:#2196F3; color:white; border:none; border-radius:5px;">Actualizar</button>
</form>

<br>
<a href="../php/lista_usuario.php">Volver</a>

</body>
</html>
