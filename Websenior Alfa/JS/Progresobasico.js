// Cargar el archivo HTML con los enlaces
fetch('..//HTML/Cursos.html')
  .then(response => response.text())
  .then(data => {
    // Insertar el contenido del archivo HTML en el div del carrusel
    document.getElementById('carrusel').innerHTML = data;

    // Contar los enlaces y actualizar la barra de progreso
    var enlaces = document.querySelectorAll('.carrusel .enlace');
    var progressBar = document.getElementById('progress');

    var enlacesAbiertos = 0;
    var enlacesTotales = enlaces.length;

    enlaces.forEach(function(enlace) {
      enlace.addEventListener('click', function() {
        if (!enlace.classList.contains('abierto')) {
          enlace.classList.add('abierto');
          enlacesAbiertos++;

          var progressPercentage = (enlacesAbiertos / enlacesTotales) * 100;
          progressBar.style.width = progressPercentage + '%';
        }
      });
    });
  })
  .catch(error => console.error('Error al cargar el archivo HTML:', error));