<?php
include("conexion.php");

if (!isset($_GET['id'])) {
    die("ID no recibido");
}

$id = $_GET['id'];

$sql = "SELECT * FROM comentarios WHERE id_coment = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    die("Comentario no encontrado");
}
?>

<form action="actualizar_comentario.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id_coment'] ?>">
    <input type="text" name="nombre" value="<?= htmlspecialchars($row['nombre']) ?>" required><br><br>
    <textarea name="comentario" required><?= htmlspecialchars($row['comentario']) ?></textarea><br><br>
    <button type="submit">Actualizar</button>
</form>
