<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Perfil - WebSenior</title>
    <link rel="stylesheet" href="..//CSS/StylePerfil.css">
</head>
<body>

<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "WEBSENIOR";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if (isset($_SESSION['Usuario'])) {
    $usuario = $_SESSION['Usuario'];
    $stmt = $conn->prepare("SELECT Usuario, Habilidad FROM login_users WHERE Usuario = ?");
    if ($stmt === false) {
        die("Error en prepare: " . $conn->error);
    }
    
    $stmt->bind_param("s", $usuario);
    if ($stmt->execute() === false) {
        die("Error en execute: " . $stmt->error);
    }
    
    $result = $stmt->get_result(); // obtener los resultados
    if ($result === false) {
        die("Error obteniendo los resultados: " . $stmt->error);
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $usuario = $row['Usuario'];
        $Habilidad = $row['Habilidad'];
    } else {
        // Tratar el caso en que el usuario no exista en la base de datos
        $usuario = "Usuario desconocido";
        $Habilidad = "Nivel de habilidad desconocido";
    }
} else {
    // Tratar el caso en que no haya usuario logueado
    $usuario = "No has iniciado sesión";
    $Habilidad = "N/A";
}
?>



    <header>
        <div class="cont1"> 
            <div class="subpaginas">
                <a href="..//HTML/Perfil.php">Perfil</a>
            </div>
            <div class="subpaginas">
                <a href="..//HTML/Blog.html">Blog</a>
            </div>
            <div class="subpaginas">
                <a href="Principal.html"><img src="..//Img/Logo.png" alt="Logo del sitio" id="logo"></a>
            </div>
            <div class="subpaginas">
                <a href="..//HTML/Cursos.html">Cursos</a>
            </div>
            <div class="subpaginas">
                <a href="..//HTML/Ayuda.html">Ayuda</a>
            </div>
        </div>
    </header>
    
    <!--Separacion-->

    <div class="separacion">
    </div>

    <form class="formulario" id="formulario" action="..//PHP/Contacto.php" method="post" enctype="multipart/form-data">
        <div class="contenedor">
            <div class="datos">
                <div class="foto">
                    <div id="preview" class="preview"> 
                    </div>
                    <input type="file" id="file" accept="image/*" name="imagen">
                    <input type="button" value="Presioname para subir tu foto" class="subirimg btn-grad" onclick="document.getElementById('file').click()" required>
            
                </div>
                <div class="nombre">
                    <div>
                        <form>
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" value="<?php echo $usuario; ?>" readonly>
                          </form>
                    </div>
                    <div>
                        <p> Tu nivel es: </p>
                        <?php
            echo "<div class='avance2'>";
            echo "<p>" . $Habilidad . "</p>";
            echo "<div class='progress' id='progress'></div>";
            echo "</div>";
        ?>
                    </div>
                </div>
            </div>

            <div class="text2">
        <h3>Tu nivel dentro de WebSenior es:</h3>
    </div>
    <div class="avance">

                 <div class="avance2">
                    <p>Nivel Principiante</p>
                    <div class="progress" id="progress"></div>
                </div>
                <div class="avance2">
                    <p>Nivel Intermedio</p>
                    <div class="progress" id="progress"></div>
                </div>
                <div class="avance2">
                    <p>Nivel Avanzado</p>
                    <div class="progress" id="progress"></div>
                </div>
            </div>

        

            <!--Contacto-->

            <div class="contactodatos">
                <div class="text">
                    <h3>Mi contacto para resolver mis dudas es:</h3>
                </div>
                <div class="contacto">
                    <div class="correo">
                        <input type="mail" placeholder="Mi correo es:" name="correo"  id="myEmailInput" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|org|net)" required>
                    </div>
                    <div class="telefono">
                        <input type="number" placeholder="5555555555" name="telefono" id="telcon" onkeydown="validacion(event)" oninput="limitNum()">
                    </div>
                </div>
                <div class="actualizar">
                    <input type="submit" value="Actualizar mis datos" class="btn-grad2" id="actualizar" name="actualizar">
                </div>
            </div>
        </div>

    </form>

       
    
    </body>
<script src="..//JS/Preview.js"></script>
<script src="..//JS/Nombre.js"></script>
<script src="..//JS/Progresobasico.js"></script>
<script src="..//JS/Validacion.js"></script>
<script src="..//JS/Validaciontel.js"></script>
<script src="..//JS/limitenumeros.js"></script>
<script src="..//JS/Validacioncorreo.js"></script>
<script src="..//JS/Bienvenido.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>