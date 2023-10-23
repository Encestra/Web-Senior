<?php

session_start();

// Conexión a la base de datos 
require_once 'db_conexion.php';

if (isset($_POST['actualizar'])) {


// Obtén el usuario actualmente logueado 
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
} else {
    $usuario = "Usuario anónimo";
}

// Obtener valores del formulario
$imagen = $_FILES['imagen']['tmp_name'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

// Leer la imagen en bytes
$imagenBytes = file_get_contents($imagen);

// Preparar la consulta SQL
$sql = "INSERT INTO contacto (usuario, imagen, correo, telefono) VALUES ('$usuario','$imagen','$correo','$telefono')";
$stmt = $conn->prepare($sql);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo '<script>alert("Datos Actualizados"); 
    window.location.href = "http://localhost/Websenior/HTML/Perfil.html";</script>';
} else {
    echo '<script>alert("Ingresa todos los datos, por favor"); 
    window.location.href = "http://localhost/Websenior/HTML/Perfil.html";</script>';
}
}

?>
