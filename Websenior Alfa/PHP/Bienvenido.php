<?php
session_start(); // Inicia la sesión

// Conexión a la base de datos 
require_once 'db_conexion.php';

// Obtén el nombre de usuario de la sesión
$username = $_SESSION['username'];

// Consulta los datos del usuario en la base de datos
$sql = "SELECT * FROM login_users WHERE Usuario = '$username'";
$result = $conn->query($sql);

// Verifica si se encontraron resultados
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();

  // Obtén los valores de los campos de la base de datos
  $nombre = $row['nombre'];
} else {
  echo "No se encontraron datos del usuario en la base de datos.";
}
?>