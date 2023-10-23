function mostrarContenido() {
    var tarjeta = document.querySelector(".tarjeta");
    var contenidoGrande = document.getElementById("contenido-grande");
  
    contenidoGrande.innerHTML = tarjeta.innerHTML;
    contenidoGrande.querySelector(".Imagen").onclick = null;
  
    document.getElementById("contenedor-grande").style.display = "block";
  }
  
  function ocultarContenido() {
    document.getElementById("contenedor-grande").style.display = "none";
    document.getElementById("contenido-grande").innerHTML = "";
  }