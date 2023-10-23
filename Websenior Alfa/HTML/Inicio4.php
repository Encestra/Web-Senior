<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..//CSS/Stylei4.css">
   
</head>

<!--Encabezado-->
<header>
    <div class="logo">
        <img src="..//Img/Logo.png" alt="LOGO">
    </div>
    <div class="separacion">
       
    </div>
</header>


<!--Cuerpo-->
<body>
    <div class="cont1">
        <div class="instrucciones1">
            <p id="bienvenida">¡BIENVENIDO!, lo estas entendiendo muy bien <br> <br> nos gustaria conocer tu nivel
                de experiencia con la tecnologia, por favor clickea u oprime la opcion que mejor te describa </p>
        </div>
        
        <div class="cont2">
            <div class="simbolo">
                <i class="fa-regular fa-hand-point-up fa-bounce fa-2xl" id="animacion" style="color: #000000;"></i>
            </div>
            <div class="simbolo">
                <i class="fa-regular fa-hand-point-up fa-bounce fa-2xl" id="animacion" style="color: #000000;"></i>
            </div>
            <div class="simbolo">
                <i class="fa-regular fa-hand-point-up fa-bounce fa-2xl" id="animacion" style="color: #000000;"></i>
            </div>
        </div>
        <div class=" cont3">
            <div class="caja1">
                <input type="button" value="Principiante" id="bprincipiante" class="btn-grad1">
            </div>
            <div class="caja1">
                <input type="button" value="Intermedio" id="bintermedio" class="btn-grad2">
            </div>
            <div class="caja1">
                <input type="button" value="Avanzado" id="bavanzado" class="btn-grad3">
            </div>
        </div>
        <div class="cont4">
            <div class="des" id="Basicoemer">
                <p>Nivel Básico: Para los que recién están comenzando a explorar el mundo digital y desean adquirir los conocimientos fundamentales para desenvolverse en él.</p>
            </div>
            <div class="des" id="Intermedioemer">
                <p>Nivel Intermedio: Para aquellos que ya cuentan con una base y desean profundizar sus habilidades, ampliar sus conocimientos y ganar más confianza en el manejo de tecnología.</p>
            </div>
            <div class="des" id="Avanzadoemer">
                <p>Nivel Avanzado: Destinado a aquellos usuarios que ya poseen un manejo sólido de las herramientas digitales y aspiran a dominar aspectos más complejos y específicos de la tecnología.</p>
            </div>
        </div>        
        <div class="botones">
            <button id="bContinuar" class="btn-grad">Continuar</button>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/236ba2aa1a.js" crossorigin="anonymous"></script>
<script src="..//JS/ElementoEmergente.js"></script>
<script>
var nivelSeleccionado = null;

$(document).ready(function() {
    $("#bprincipiante, #bintermedio, #bavanzado").click(function(e) {
        nivelSeleccionado = e.target.value;
    });

    $("#bContinuar").click(function(e) {
        e.preventDefault();

        if (nivelSeleccionado) {
            $.post("http://localhost/Websenior/PHP/Actualizar_nivel.php", 
            { Usuario: "<?php echo $_SESSION['Usuario']; ?>", Habilidad: nivelSeleccionado },
            function( data ) {
                console.log('Respuesta del servidor: ', data);
                if (data === "Success") {
                    window.location.href = './Inicio5.html';
                }
            }).fail(function(xhr, status, error) {
    alert('Error en la petición AJAX: ' + error);
});
        } else {
            alert('Por favor, selecciona un nivel.');
        }
    });
});
</script>

</body>
</html>
