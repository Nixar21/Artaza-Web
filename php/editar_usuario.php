<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== "administrador") {
    header("Location: index.php");
    exit;
}
include 'conexion.php';

// Verificar que el ID viene por GET
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: No se especificó un usuario para editar");
}

$id = $_GET['id'];

// Obtener el nombre de la columna ID dinámicamente
$field_info = $conn->query("DESCRIBE usuario");
$id_column = $field_info->fetch_assoc()['Field']; // Primera columna (ID)

// Obtener datos del usuario
$sql = $conn->prepare("SELECT * FROM usuario WHERE $id_column = ?");
$sql->bind_param("i", $id);
$sql->execute();
$result = $sql->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    die("Error: Usuario no encontrado");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario - ELBASK</title>
</head>
<body style="margin: 0; font-family: Arial, sans-serif; background-color: #1a1a1a; display: flex; justify-content: center; align-items: center; min-height: 100vh; color: #cccccc;">

    <div style="background-color: #2b2b2b; padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6); max-width: 450px; width: 90%; border: 3px solid #5e10b1;">
        
        <h1 style="text-align: center; font-size: 28px; font-weight: bold; color: #fff; border-bottom: 3px solid #6d28d9; padding-bottom: 10px; margin-top: 0; margin-bottom: 30px;">
            Editar Usuario
        </h1>

        <form method="POST" action="editar_usuario_proceso.php">
            <input type="hidden" name="id" value="<?php echo $data[$id_column]; ?>">

            <label for="nombre" style="display: block; text-align: left; margin-top: 20px; font-weight: bold; color: #fff; font-size: 14px;">NOMBRE:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($data['nombre']); ?>" required
                    style="width: calc(100% - 24px); padding: 12px; margin-top: 8px; font-size: 16px; border: 2px solid #5e10b1; border-radius: 8px; background-color: #1a1a1a; color: #fff;">

            <label for="contraseña" style="display: block; text-align: left; margin-top: 20px; font-weight: bold; color: #fff; font-size: 14px;">NUEVA CONTRASEÑA (OPCIONAL):</label>
            <input type="password" id="contraseña" name="contraseña"
                    style="width: calc(100% - 24px); padding: 12px; margin-top: 8px; font-size: 16px; border: 2px solid #5e10b1; border-radius: 8px; background-color: #1a1a1a; color: #fff;">

            <label for="rol" style="display: block; text-align: left; margin-top: 20px; font-weight: bold; color: #fff; font-size: 14px;">ROL:</label>
            <select id="rol" name="rol" style="width: 100%; padding: 12px; margin-top: 8px; font-size: 16px; border: 2px solid #5e10b1; border-radius: 8px; background-color: #1a1a1a; color: #fff;">
                <option value="usuario" <?php echo ($data['rol'] == 'usuario') ? 'selected' : ''; ?>>Usuario</option>
                <option value="administrador" <?php echo ($data['rol'] == 'administrador') ? 'selected' : ''; ?>>Administrador</option>
            </select>
            
            <button type="submit"
                style="margin-top: 30px; padding: 15px; width: 100%; background: linear-gradient(90deg, #ff9900 0%, #e68a00 100%); color: #000; font-size: 16px; border: none; border-radius: 10px; cursor: pointer; font-weight: bold;">
                Actualizar Usuario
            </button>
        </form>

        <div style="text-align: center; margin-top: 20px;">
            <a href="lista_usuario.php" style="color: #6d28d9; text-decoration: none; font-size: 14px; font-weight: bold;">
                &larr; Volver a la lista
            </a>
        </div>
    </div>

</body>
</html>