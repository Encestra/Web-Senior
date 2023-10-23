function limitNum() {
    var input = document.getElementById("telcon");
    var value = input.value;
    
    // Eliminar cualquier carácter que no sea un número
    value = value.replace(/\D/g, "");
    
    // Recortar el valor a un máximo de 10 dígitos
    value = value.slice(0, 10);
    
    // Actualizar el valor del campo de entrada
    input.value = value;
}