function toggleDropdown() {
    var desplegable = document.getElementById("listacap");
    if (desplegable.style.display === "none") {
      desplegable.style.display = "block";
    } else {
      desplegable.style.display = "none";
    }
  }
  
  var desplegar = document.getElementById("desplegar");
  desplegar.addEventListener("click", toggleDropdown);