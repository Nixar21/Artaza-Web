<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // encripta la contraseña

    // Verifica si el usuario ya existe
    $verificar = $conn->prepare("SELECT * FROM usuario WHERE nombre = ?");
    $verificar->bind_param("s", $nombre);
    $verificar->execute();
    $resultado = $verificar->get_result();

    if ($resultado->num_rows > 0) {
        echo "<script>
                alert('El usuario ya existe.');
                window.location = '../php/index.php'; // volver al login
            </script>";
    } else {

        // Rol por defecto
        $rol = "usuario";

        // Inserta el nuevo usuario
        $sql = $conn->prepare("INSERT INTO usuario (nombre, contraseña, rol) VALUES (?, ?, ?)");
        $sql->bind_param("sss", $nombre, $password, $rol);

        if ($sql->execute()) {
            echo "<script>
                    alert('Registro exitoso. Ya puedes iniciar sesión.');
                    window.location = '../php/index.php'; // redirige al login
                </script>";
        } else {
            echo "<script>
                    alert('Error al registrarse. Inténtalo nuevamente.');
                    window.location = '../php/registrar.php';
                </script>";
        }
    }

    $verificar->close();
    $conn->close();
}
?>
