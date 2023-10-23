<?php
session_start();

if (isset($_SESSION['usuario'])) {
    // Si el usuario ya ha iniciado sesión, redirigir a la página principal
    header('Location: http://localhost/Websenior/HTML/Principal.html');
    exit();
} else {
    // Si no hay ningún usuario en la sesión, redirigir a la página de inicio de sesión
    header('Location: http://localhost/Websenior/HTML/login.html');
    exit();
}
?>
