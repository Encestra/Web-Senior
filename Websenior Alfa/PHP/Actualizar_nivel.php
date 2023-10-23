<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $db_host = "localhost";  // Nombre o IP del servidor de la base de datos
    $db_name = "websenior";  // Nombre de la base de datos
    $db_user = "root";  // Nombre de usuario de la base de datos
    $db_pass = "";  // Contraseña de la base de datos

    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

    $usuario = $_POST["Usuario"];
    $Habilidad = $_POST["Habilidad"];

    // Preparación y ejecución de la consulta SQL
    $stmt = $db->prepare("UPDATE login_users SET Habilidad = ? WHERE Usuario = ?");
    $stmt->execute([$Habilidad, $usuario]);

    if ($stmt->rowCount() > 0) {
        echo "Success";
    } else {
        echo "Failed";
    }
} else {
    http_response_code(405);  // Método no permitido
    echo "Error: Método no permitido";
}
?>
