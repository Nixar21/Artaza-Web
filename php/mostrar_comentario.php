<?php
include("conexion.php");

$articulo_id = $_GET['id'] ?? 1;

$sql = "SELECT * FROM comentarios WHERE articulo_id = ? ORDER BY fecha DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $articulo_id);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $nombre = htmlspecialchars($row['nombre']);
    $comentario = htmlspecialchars($row['comentario']);
    $fecha = htmlspecialchars($row['fecha']);
    $inicial = strtoupper(substr($nombre, 0, 1));
?>
    <div style="background:#2b2b2b; padding:15px; margin-top:10px; border-radius:8px; border-left:3px solid #ff9900;">
        <div style="display:flex; gap:10px;">
            <div style="width:35px; height:35px; background:#5e10b1; border-radius:50%; display:flex; justify-content:center; align-items:center; color:white;">
                <?= $inicial ?>
            </div>
            <div>
                <b style="color:white;"><?= $nombre ?></b>
                <div style="font-size:11px; color:#aaa;"><?= $fecha ?></div>
            </div>
        </div>
        <p style="color:#ddd; margin-top:10px;"><?= $comentario ?></p>
        <a href="eliminar_comentario.php?id=<?= $row['id_coment'] ?>" style="color:red; font-size:13px;">Eliminar</a>
        <a href="editar_comentario.php?id=<?= $row['id_coment'] ?>" style="color:#5e10b1; font-size:13px; margin-left:10px;">Editar</a>
    </div>
<?php } ?>
