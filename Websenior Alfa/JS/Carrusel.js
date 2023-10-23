
document.addEventListener("DOMContentLoaded", function() {
    const carrusel = document.querySelector(".carrusel");
    const btnUp = document.querySelector(".btn-up");
    const btnDown = document.querySelector(".btn-down");
  
    let scrollAmount = 0;
    const contenido = carrusel.firstElementChild.offsetHeight;
    const maxScrollAmount = (carrusel.childElementCount - 1) * contenido;
  
    btnUp.addEventListener("click", function() {
      if (scrollAmount === 0) {
        return;
      } else {
        scrollAmount -= contenido;
      }
      carrusel.style.transform = `translateY(-${scrollAmount}px)`;
    });
  
    btnDown.addEventListener("click", function() {
      if (scrollAmount === maxScrollAmount) {
        scrollAmount = 0;
      } else {
        scrollAmount += contenido;
      }
      carrusel.style.transform = `translateY(-${scrollAmount}px)`;
    });
  });

  /*El evento "DOMContentLoaded" se dispara cuando se ha cargado completamente el DOM de la página. Aquí, se utiliza para asegurarse de que el código JavaScript se ejecute después de que todos los elementos HTML estén disponibles.

document.querySelector(".carrusel") selecciona el elemento con la clase "carrusel". Esto se refiere al contenedor del carrusel vertical.

document.querySelector(".btn-up") y document.querySelector(".btn-down") seleccionan los elementos con las clases "btn-up" y "btn-down".

scrollAmount es una variable que lleva el seguimiento del desplazamiento actual del carrusel. Inicialmente, se establece en 0.

contenido obtiene la altura de cada elemento del carrusel 

(carrusel.firstElementChild.offsetHeight). Esto se utiliza para determinar cuánto se debe desplazar el carrusel verticalmente.

maxScrollAmount se calcula como (carrusel.childElementCount - 1) * contenido. Representa la cantidad máxima de desplazamiento permitido, que es igual a la altura total de todos los elementos del carrusel menos la altura de un solo elemento.

btnUp.addEventListener("click", function() { ... }) Cuando se hace clic en el botón, se ejecuta la función proporcionada.

En la función de clic del botón de subir, se verifica si scrollAmount es igual a 0, lo que indica que el carrusel está en la parte superior. Si es así, se establece scrollAmount en maxScrollAmount para que el carrusel se desplace al último elemento. Si scrollAmount no es 0, se resta itemHeight de scrollAmount para desplazar el carrusel hacia arriba en la altura de un elemento.

carousel.style.transform = translateY(-${scrollAmount}px); actualiza la propiedad transform del carrusel para desplazarlo verticalmente según el valor de scrollAmount. Utiliza la función translateY de CSS junto con el valor negativo de scrollAmount para lograr el desplazamiento hacia arriba.

btnDown.addEventListener("click", function() { ... }) asigna un evento de clic al botón de bajar. Cuando se hace clic en el botón, se ejecuta la función proporcionada.

En la función de clic del botón de bajar, se verifica si scrollAmount es igual a maxScrollAmount, lo que indica que el carrusel está en la parte inferior. Si es así, se establece scrollAmount en 0 para que el carrusel vuelva al primer elemento. Si scrollAmount no es igual a maxScrollAmount, se suma contenido a scrollAmount para desplazar el carrusel hacia abajo en la altura de un elemento.

Al igual que en el caso del botón de subir, carousel.style.transform = translateY(-${scrollAmount}px); se utiliza para actualizar la propiedad transform y desplazar el carrusel verticalmente según el valor de scrollAmount*/