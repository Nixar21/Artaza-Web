<?php
include 'conexion.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Buscar usuario por nombre
    $sql = $conn->prepare("SELECT * FROM usuario WHERE nombre = ?");
    $sql->bind_param("s", $username);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {

        $usuario = $result->fetch_assoc();

        // Verificar contraseña
        if (password_verify($password, $usuario['contraseña'])) {

            // Guardar datos en la sesión
            $_SESSION['usuario'] = $usuario['nombre'];
            $_SESSION['rol'] = $usuario['rol'];  // <-- IMPORTANTE

            // REDIRECCIÓN SEGÚN ROL
            if ($usuario['rol'] === "administrador") {
                header("Location: ../php/admin_inicio.php");
                exit;
            } else {
                header("Location: ../html-css/inicio1.html");
                exit;
            }

        } else {
            echo "<script>alert('Contraseña incorrecta.'); window.location='../php/index.php';</script>";
        }

    } else {
        echo "<script>alert('Usuario no encontrado.'); window.location='../php/index.php';</script>";
    }

    $conn->close();
}
?>

