<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    $sql = "INSERT INTO soporte (nombre, correo, mensaje, estado, fecha) 
            VALUES ('$nombre', '$correo', '$mensaje', 0, NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "Solicitud enviada correctamente.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
