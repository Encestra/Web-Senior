
<?php
    // Establecer la conexión a la base de datos
    require_once 'db_conexion.php';

    // Iniciar la sesión
    session_start();

    // Verificar si el usuario ha iniciado sesión
    if (isset($_SESSION['id'])) {
        $idUsuario = $_SESSION['id'];

        // Obtener el nombre de usuario desde la base de datos
        $sql = "SELECT Usuario FROM login_users WHERE id = $idUsuario";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $nombreUsuario = $row["Usuario"];
            echo "<div class='nombre'><p>Bienvenido, $nombreUsuario</p></div>";
        } else {
            echo "<div class='nombre'><p>No se encontró el nombre de usuario</p></div>";
        }
    } else {
        echo "<div class='nombre'><p>No has iniciado sesión</p></div>";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
    ?>