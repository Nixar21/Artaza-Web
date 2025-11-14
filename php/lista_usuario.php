<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== "administrador") {
    header("Location: ../php/index.php");
    exit;
}
include '../php/conexion.php';
$result = $conn->query("SELECT * FROM usuario");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Lista de Usuarios</title>
</head>
<body style="font-family: Arial; background:#f4f4f4; padding:20px;">

<h2>Lista de Usuarios</h2>

<a href="agregar_usuario.php" 
style="padding:10px 20px; background:#4CAF50; color:white; text-decoration:none; border-radius:5px;">
+ Agregar Usuario
</a>

<br><br>

<table border="1" cellpadding="10" cellspacing="0" style="background:white; border-collapse:collapse;">
    <tr style="background:#222; color:white;">
        <th>ID</th>
        <th>Nombre</th>
        <th>Rol</th>
        <th>Acciones</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nombre'] ?></td>
        <td><?= $row['rol'] ?></td>
        <td>
            <a href="editar_usuario.php?id=<?= $row['id'] ?>" style="color:blue;">Editar</a> |
            <a href="eliminar_usuario.php?id=<?= $row['id'] ?>" 
                onclick="return confirm('¿Seguro que quieres eliminar este usuario?')" 
                style="color:red;">
                Eliminar
            </a>
        </td>
    </tr>
    <?php } ?>
</table>

<br>
<a href="admin_inicio.php">Volver</a>

</body>
</html>
