
<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$dbnombre = "websenior";

// Crear la conexión
$conn = mysqli_connect($servidor, $usuario, $password, $dbnombre);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

echo "Conexión exitosa";

?>