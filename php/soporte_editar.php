<?php
include("conexion.php");

$id = $_GET['id'];

// Obtener datos actuales
$result = $conn->query("SELECT * FROM soporte WHERE id_soporte=$id");
$row = $result->fetch_assoc();

// Guardar cambios
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $estado = $_POST["estado"];

    $sql = "UPDATE soporte 
            SET nombre='$nombre', correo='$correo', mensaje='$mensaje', estado=$estado 
            WHERE id_soporte=$id";
    $conn->query($sql);

    header("Location: panel_soporte.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Soporte</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; padding: 20px; }
        form { background: #fff; padding: 20px; border-radius: 8px; width: 400px; margin: auto; }
        input, textarea, select { width: 100%; margin-bottom: 10px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #5e10b1; color: #fff; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

<h2>✏️ Editar Solicitud de Soporte</h2>
<form method="POST">
    <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
    <input type="email" name="correo" value="<?php echo $row['correo']; ?>" required>
    <textarea name="mensaje" required><?php echo $row['mensaje']; ?></textarea>
    <select name="estado">
        <option value="0" <?php if($row['estado']==0) echo "selected"; ?>>Pendiente</option>
        <option value="1" <?php if($row['estado']==1) echo "selected"; ?>>En proceso</option>
        <option value="2" <?php if($row['estado']==2) echo "selected"; ?>>Resuelto</option>
    </select>
    <button type="submit">Guardar cambios</button>
</form>

</body>
</html>
