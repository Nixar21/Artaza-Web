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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario - ELBASK</title>
</head>
<body style="margin: 0; font-family: Arial, sans-serif; background-color: #1a1a1a; display: flex; justify-content: center; align-items: center; min-height: 100vh; color: #cccccc;">

    <div style="background-color: #2b2b2b; padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6); max-width: 450px; width: 90%; border: 3px solid #5e10b1;">
        
        <h1 style="text-align: center; font-size: 28px; font-weight: bold; color: #fff; border-bottom: 3px solid #6d28d9; padding-bottom: 10px; margin-top: 0; margin-bottom: 30px;">
            Agregar Nuevo Usuario
        </h1>

        <form method="POST" action="agregar_usuario_proceso.php">
            <label for="nombre" style="display: block; text-align: left; margin-top: 20px; font-weight: bold; color: #fff; font-size: 14px;">NOMBRE:</label>
            <input type="text" id="nombre" name="nombre" required
                    style="width: calc(100% - 24px); padding: 12px; margin-top: 8px; font-size: 16px; border: 2px solid #5e10b1; border-radius: 8px; background-color: #1a1a1a; color: #fff;">

            <label for="contraseña" style="display: block; text-align: left; margin-top: 20px; font-weight: bold; color: #fff; font-size: 14px;">CONTRASEÑA:</label>
            <input type="password" id="contraseña" name="contraseña" required
                    style="width: calc(100% - 24px); padding: 12px; margin-top: 8px; font-size: 16px; border: 2px solid #5e10b1; border-radius: 8px; background-color: #1a1a1a; color: #fff;">

            <label for="rol" style="display: block; text-align: left; margin-top: 20px; font-weight: bold; color: #fff; font-size: 14px;">ROL:</label>
            <select id="rol" name="rol" style="width: 100%; padding: 12px; margin-top: 8px; font-size: 16px; border: 2px solid #5e10b1; border-radius: 8px; background-color: #1a1a1a; color: #fff;">
                <option value="usuario">Usuario</option>
                <option value="administrador">Administrador</option>
            </select>
            
            <button type="submit"
                style="margin-top: 30px; padding: 15px; width: 100%; background: linear-gradient(90deg, #10b981 0%, #22c55e 100%); color: white; font-size: 16px; border: none; border-radius: 10px; cursor: pointer; font-weight: bold;">
                Guardar Usuario
            </button>
        </form>

        <div style="text-align: center; margin-top: 20px;">
            <a href="../php/lista_usuario.php" style="color: #6d28d9; text-decoration: none; font-size: 14px; font-weight: bold;">
                &larr; Cancelar y volver
            </a>
        </div>
    </div>

</body>
</html>
