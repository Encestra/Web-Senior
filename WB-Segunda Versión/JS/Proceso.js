var enlaceContainers = document.querySelectorAll(".enlace");
var progressBar = document.getElementById("barrap");
var progressLabel = document.querySelector(".progress-label");

var enlacesAbiertos = 0;
var enlacesTotales = enlaceContainers.length;

enlaceContainers.forEach(function(container) {
  var link = container.querySelector(".recursos-link");

  link.addEventListener("click", function(event) {
    event.preventDefault();

    // Verificar si el enlace ya se ha abierto previamente
    if (!link.classList.contains("abierto")) {
      // Incrementar el contador de enlaces abiertos
      enlacesAbiertos++;

      // Marcar el enlace como abierto
      link.classList.add("abierto");

      // Verificar si se han abierto todos los enlaces
      if (enlacesAbiertos === enlacesTotales) {
        // Actualizar la barra de progreso al 100%
        progressBar.style.width = "100%";
        progressLabel.textContent = "100%";
      } else {
        // Calcular el porcentaje de progreso
        var progressPercentage = (enlacesAbiertos / enlacesTotales) * 100;
        progressBar.style.width = progressPercentage + "%";
        progressLabel.textContent = progressPercentage.toFixed(0) + "%";
      }
    }
  });
});