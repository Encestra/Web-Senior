var enlaces = document.querySelectorAll(".enlace");
var pdfContainer = document.getElementById("pdfContainer");

enlaces.forEach(function(container) {
  var link = container.querySelector(".recursos-link");

  link.addEventListener("click", function(event) {
    event.preventDefault();

    var pdfUrl = link.getAttribute("href");
    var iframe = document.createElement("iframe");

    iframe.src = pdfUrl;
    iframe.style.width = "100%";
    iframe.style.height = "100%";

    pdfContainer.innerHTML = "";
    pdfContainer.appendChild(iframe);
  });
});

function ajustar() {
    var pantalla = document.querySelector(".pantalla");
    var enlaces = document.querySelectorAll(".recursos.link");
  
    var width = pantalla.offsetWidth + "px";
    var height = pantalla.offsetHeight + "px";
  
    enlaces.forEach(function(enlace) {
      enlace.style.width = width;
      enlace.style.height = height;
    });
  }
  
  window.addEventListener("resize", ajustar);
  ajustar();