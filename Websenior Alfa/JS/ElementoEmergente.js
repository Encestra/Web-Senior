var btnPrincipiante = document.getElementById("bprincipiante");
var btnIntermedio = document.getElementById("bintermedio");
var btnAvanzado = document.getElementById("bavanzado");
var divBasicoEmer = document.getElementById("Basicoemer");
var divIntermedioEmer = document.getElementById("Intermedioemer");
var divAvanzadoEmer = document.getElementById("Avanzadoemer");

// Agregar eventos de clic a los botones
btnPrincipiante.addEventListener("click", function() {
    mostrarDiv(divBasicoEmer);
});
btnIntermedio.addEventListener("click", function() {
    mostrarDiv(divIntermedioEmer);
});
btnAvanzado.addEventListener("click", function() {
    mostrarDiv(divAvanzadoEmer);
});

// Función para mostrar el div correspondiente y ocultar los demás
function mostrarDiv(div) {
    // Ocultar todos los divs de descripción emergente
    divBasicoEmer.style.display = "none";
    divIntermedioEmer.style.display = "none";
    divAvanzadoEmer.style.display = "none";

    // Mostrar el div correspondiente al botón clicado
    div.style.display = "block";
}
