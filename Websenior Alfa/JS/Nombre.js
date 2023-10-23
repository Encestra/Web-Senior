// Realizar una solicitud AJAX al archivo PHP
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState === 4 && this.status === 200) {
    var nombreUsuario = this.responseText;
    document.getElementById("nombreUsuario").textContent = "Bienvenido, " + nombreUsuario;
  }
};
xhttp.open("GET", "Obtenernombre.php", true);
xhttp.send();