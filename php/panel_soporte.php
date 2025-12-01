<?php
include("conexion.php");

// Alta
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["agregar"])) {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $sql = "INSERT INTO soporte (nombre, correo, mensaje, estado, fecha) VALUES ('$nombre', '$correo', '$mensaje', 0, NOW())";
    $conn->query($sql);
    header("Location: panel_soporte.php");
    exit();
}

// Baja
if (isset($_GET["eliminar"])) {
    $id = $_GET["eliminar"];
    $conn->query("DELETE FROM soporte WHERE id_soporte=$id");
    header("Location: panel_soporte.php");
    exit();
}

// Modificación
if (isset($_GET["modificar"])) {
    $id = $_GET["modificar"];
    $estado = $_GET["estado"];
    $conn->query("UPDATE soporte SET estado=$estado WHERE id_soporte=$id");
    header("Location: panel_soporte.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Soporte</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; padding: 20px; }
        h1 { color: #5e10b1; }
        form, table { background: #fff; padding: 20px; border-radius: 8px; margin-bottom: 30px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        input, textarea { width: 100%; margin-bottom: 10px; padding: 8px; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #5e10b1; color: #fff; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border-bottom: 1px solid #ddd; text-align: left; }
        th { background: #5e10b1; color: #fff; }
        a { margin-right: 10px; color: #5e10b1; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

<h1>📨 Enviar mensaje al Soporte</h1>
<form method="POST">
    <input type="text" name="nombre" placeholder="Tu nombre" required>
    <input type="email" name="correo" placeholder="Tu correo" required>
    <textarea name="mensaje" placeholder="Describe tu problema" required></textarea>
    <button type="submit" name="agregar">Enviar</button>
</form>

<h2>📋 Solicitudes registradas</h2>
<table>
    <tr>
        <th>ID</th><th>Nombre</th><th>Correo</th><th>Mensaje</th><th>Estado</th><th>Fecha</th><th>Acciones</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM soporte ORDER BY fecha DESC");
    while ($row = $result->fetch_assoc()) {
        $estadoTexto = $row['estado'] == 0 ? "Pendiente" : ($row['estado'] == 1 ? "En proceso" : "Resuelto");
        echo "<tr>
            <td>{$row['id_soporte']}</td>
            <td>{$row['nombre']}</td>
            <td>{$row['correo']}</td>
            <td>{$row['mensaje']}</td>
            <td>$estadoTexto</td>
            <td>{$row['fecha']}</td>
<td>
    <a href='?eliminar={$row['id_soporte']}'>Eliminar</a>
    <a href='soporte_editar.php?id={$row['id_soporte']}'>Editar</a> <!-- 🔹 Aquí -->
</td>
        </tr>";
    }
    ?>
</table>

</body>
</html>
