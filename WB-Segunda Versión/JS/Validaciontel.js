function validacion(event) {
    var key = event.key;
  
    // Verificar si la tecla presionada es la letra "e" o el símbolo de Euler (ℯ)
    if (key.toLowerCase() === "e" || key === "-") {
        // Prevenir la entrada de la letra "e" o el símbolo de menos
        event.preventDefault();
    }
}