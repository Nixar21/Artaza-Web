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
<title>Panel de Administrador</title>
</head>

<body style="font-family: Arial; margin:0; background:#f0f0f0;">
    <header style="background:#222; padding:15px; color:white;">
        <h2 style="margin:0;">Panel de Administrador</h2>
        <p>Bienvenido, <?php echo $_SESSION['usuario']; ?></p>
    </header>

    <main style="padding:20px;">
        <a href="../php/lista_usuario.php" 
            style="display:inline-block; padding:10px 20px; background:#1976d2; color:white; text-decoration:none; border-radius:5px;">
            Ver lista de usuarios
        </a>
    </main>
</body>
</html>
