<?php
session_start();

// Conexión a la base de datos 
require_once 'db_conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['login'])) {
        $usuario = $_POST['usuarioini'];
        $contrasena = $_POST['passwordini'];

        // Buscar el usuario en la base de datos
        $query = mysqli_query($conn, "SELECT * FROM login_users WHERE Usuario = '$usuario'");

        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);
            $hashedPassword = $row['Contrasena'];

            // Verificar la contraseña ingresada
            if (password_verify($contrasena, $hashedPassword)) {
                // Autenticación exitosa
                $_SESSION["usuario"] = $usuario;
                header("location: http://localhost/Websenior/HTML/Principal.html");
                exit();
            } else {
                echo '<script>alert("Contraseña incorrecta"); 
                window.location.href = "http://localhost/Websenior/HTML/login.html";</script>';
            }
        } else {
            echo '<script>alert("Usuario no encontrado"); 
            window.location.href = "http://localhost/Websenior/HTML/login.html";</script>';
        }
    }
}
?>
