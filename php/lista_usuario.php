<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== "administrador") {
    header("Location: ../php/index.php");
    exit;
}
include 'conexion.php';
$result = $conn->query("SELECT * FROM usuario");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios - ELBASK</title>
</head>
<body style="margin: 0; font-family: Arial, sans-serif; background-color: #1a1a1a; color: #cccccc;">

    <!-- HEADER -->
    <header style="background: linear-gradient(135deg, #4c0099 0%, #6d28d9 100%); color: #fff; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; border-bottom: 3px solid #5e10b1; box-shadow: 0 4px 6px rgba(0,0,0,0.3);">
        <div>
            <h2 style="margin:0; font-size: 24px; font-weight: bold;">Gestión de Usuarios</h2>
        </div>
        <a href="../php/cerrar_sesion.php" style="color: #fff; text-decoration: none; padding: 8px 20px; background-color: #5e10b1; border-radius: 20px; font-size: 14px; font-weight: bold;">Cerrar Sesión</a>
    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main style="padding: 40px 30px;">
        <div style="max-width: 1000px; margin: 0 auto;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
                <h1 style="color: #fff; font-size: 32px; margin: 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Lista de Usuarios</h1>
                <a href="agregar_usuario.php" 
                style="padding: 12px 25px; background: linear-gradient(135deg, #10b981 0%, #22c55e 100%); color:white; text-decoration:none; border-radius:8px; font-weight: bold; font-size: 14px; box-shadow: 0 4px 10px rgba(34,197,94,0.3);">
                + Agregar Usuario
                </a>
            </div>

            <div style="background-color: #2b2b2b; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.5); overflow: hidden;">
                <table style="width: 100%; border-collapse: collapse; color: #ccc;">
                    <thead>
                        <tr style="background-color: #373737; border-bottom: 3px solid #5e10b1;">
                            <th style="padding: 15px 20px; text-align: left; font-size: 14px; text-transform: uppercase;">ID</th>
                            <th style="padding: 15px 20px; text-align: left; font-size: 14px; text-transform: uppercase;">Nombre</th>
                            <th style="padding: 15px 20px; text-align: left; font-size: 14px; text-transform: uppercase;">Rol</th>
                            <th style="padding: 15px 20px; text-align: center; font-size: 14px; text-transform: uppercase;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr style="border-bottom: 1px solid #444;">
                            <td style="padding: 15px 20px;"><?= $row['id'] ?></td>
                            <td style="padding: 15px 20px; font-weight: bold; color: #fff;"><?= htmlspecialchars($row['nombre']) ?></td>
                            <td style="padding: 15px 20px;"><?= htmlspecialchars($row['rol']) ?></td>
                            <td style="padding: 15px 20px; text-align: center;">
                                <a href="editar_usuario.php?id=<?= $row['id'] ?>" style="color: #fff; background-color: #ff9900; padding: 8px 15px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: bold; margin-right: 10px;">Editar</a>
                                <a href="eliminar_usuario.php?id=<?= $row['id'] ?>" 
                                    onclick="return confirm('¿Seguro que quieres eliminar este usuario?')" 
                                    style="color: #fff; background-color: #ef4444; padding: 8px 15px; border-radius: 6px; text-decoration: none; font-size: 13px; font-weight: bold;">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <br>
            <a href="admin_inicio.php" style="color: #6d28d9; text-decoration: none; font-weight: bold;">&larr; Volver al Panel</a>
        </div>
    </main>


</body>
</html>
