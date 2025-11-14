<?php
$servername = "localhost";
$username = "root";     // Cambia si usas otro usuario
$password = "";         // Tu contraseña de MySQL
$dbname = "login";  // Crea esta base de datos en phpMyAdmin

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
