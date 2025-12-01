<?php
include("conexion.php");
$result = $conn->query("SELECT * FROM soporte");

echo "<table border='1'>
<tr>
<th>ID</th><th>Nombre</th><th>Correo</th><th>Mensaje</th><th>Estado</th><th>Fecha</th><th>Acciones</th>
</tr>";

while($row = $result->fetch_assoc()) {
    $estadoTexto = $row['estado'] == 0 ? "Pendiente" : ($row['estado'] == 1 ? "En proceso" : "Resuelto");
    echo "<tr>
        <td>{$row['id_soporte']}</td>
        <td>{$row['nombre']}</td>
        <td>{$row['correo']}</td>
        <td>{$row['mensaje']}</td>
        <td>$estadoTexto</td>
        <td>{$row['fecha']}</td>
        <td>
            <a href='soporte_modificar.php?id={$row['id_soporte']}&estado=2'>Marcar como Resuelto</a> |
            <a href='soporte_baja.php?id={$row['id_soporte']}'>Eliminar</a>
        </td>
    </tr>";
}
echo "</table>";
?>
