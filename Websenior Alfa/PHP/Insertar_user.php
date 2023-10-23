<?php
// Iniciar la sesión en la parte superior de tu archivo PHP.
session_start();

// Incluir el archivo de conexión
require_once 'db_conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = $_POST['Usuario'];
    $contrasena = $_POST['password'];

    // Encriptar la contraseña
    $contrasenaEncriptada = password_hash($contrasena, PASSWORD_DEFAULT);

    // Consulta SQL para insertar datos
    $sql = "INSERT INTO login_users (Usuario, Contrasena) VALUES ('$usuario','$contrasenaEncriptada')";

    if (mysqli_query($conn, $sql)) {
        // Almacenar el nombre del usuario en la variable de sesión
        $_SESSION['Usuario'] = $usuario;

        // Redirigir al usuario a la página de selección de nivel de habilidad
        header('Location: http://localhost/Websenior/HTML/Inicio4.php');
        exit;
    } else {
        echo "Error al insertar datos: " . mysqli_error($conn);
        echo '<script>alert("Por favor vuelve a intentarlo")
        window.location.href = "http://localhost/Websenior/HTML/Inicio1.html";</script>';
    }
}
?>
