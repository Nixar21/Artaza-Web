<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== "administrador") {
    header("Location: ../php/index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Agregar Usuario</title>
</head>
<body style="font-family: Arial; padding:20px;">

<h2>Agregar Usuario</h2>

<form method="POST" action="agregar_usuario_proceso.php">
    Nombre: <br>
    <input type="text" name="nombre" required><br><br>

    Contraseña: <br>
    <input type="password" name="contraseña" required><br><br>

    Rol: <br>
    <select name="rol">
        <option value="usuario">Usuario</option>
        <option value="administrador">Administrador</option>
    </select>
    <br><br>

    <button type="submit" 
        style="padding:10px 20px; background:#4CAF50; color:white; border:none; border-radius:5px;">
        Guardar
    </button>
</form>

<br>
<a href="../php/lista_usuario.php">Volver</a>

</body>
</html>
