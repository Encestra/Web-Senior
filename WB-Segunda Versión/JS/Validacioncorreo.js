
function validateEmail() {
    var input = document.getElementById("myEmailInput");
    var value = input.value;
  
    // Verificar la presencia de un símbolo "@" en el valor ingresado
    if (!value.includes("@")) {
        alert("Ingrese un correo electrónico válido con el símbolo @.");
        return false;
    }
  
    // Verificar si el dominio es uno de los tres dominios permitidos
    var dominiosPermitidos = ["Hotmail.com", "Outlook.com", "gmail.com"];
    var dominioValido = false;
  
    for (var i = 0; i < dominiosPermitidos.length; i++) {
        if (value.endsWith("@" + dominiosPermitidos[i])) {
            dominioValido = true;
            break;
        }
    }
  
    if (!dominioValido) {
        alert("Ingrese un correo electrónico válido con uno de los dominios permitidos: Hotmail.com, Outlook.com, gmail.com");
        return false;
    }
  
    // La validación ha sido exitosa
    return true;
}

// Ejemplo de cómo llamar a la función de validación
document.getElementById("myEmailInput").addEventListener("blur", validateEmail);
document.getElementById("myEmailInput").addEventListener("Keyup", validateEmail);