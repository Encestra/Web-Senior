<?php
session_start(); // Inicia la sesión 

// Obtén el texto de la duda enviado por el usuario
$textoDuda = $_POST['texto_duda'];

// Obtén el usuario actualmente logueado 
if (isset($_SESSION['Usuario'])) {
    $usuario = $_SESSION['Usuario'];
} else {
    $usuario = "Usuario anónimo";
}

// Conexión a la base de datos 
$host = "localhost";
$username = "root";
$password = "";
$database = "WEBSENIOR";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Consulta SQL para insertar la duda en la tabla "DUDAS"
$sql = "INSERT INTO DUDAS (texto, usuario) VALUES ('$textoDuda', '$usuario')";

if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Duda enviada"); 
    window.location.href = "http://localhost/Websenior/HTML/Ayuda.html";</script>';
} else {
    echo "Error al enviar la duda: " . mysqli_error($conn);
}

