const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	señas: /^[a-zA-Z0-9\_\-]{4,380}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{3,50}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,10}$/, // 4 a 10 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{10}$/,// 10 numeros.
    altura: /^[1-2]{1}([\\.][0-9]{1,2})?$/,
    peso: /^[0-9]{1,2}([\\.][0-9]{1,3})?$/,
    edad: /^[0-9]{1,2}$/,
    Sexo: /^(Masculino|Femenino)$/,
    direccion:/^[a-zA-Z0-9\.\_\-]{4,30}$/,
    ciudad:/^[a-zA-Z0-9\.\_\-]{3,15}$/,
    fecha:/^(?:(?:(?:0?[1-9]|1\d|2[0-8])[/](?:0?[1-9]|1[0-2])|(?:29|30)[/](?:0?[13-9]|1[0-2])|31[/](?:0?[13578]|1[02]))[/](?:0{2,3}[1-9]|0{1,2}[1-9]\d|0?[1-9]\d{2}|[1-9]\d{3})|29[/]0?2[/](?:\d{1,2}(?:0[48]|[2468][048]|[13579][26])|(?:0?[48]|[13579][26]|[2468][048])00))$/
}

const campos = {
	correo: false,
	telefono: false
}

/*Funcion de validacion para el imput.foreach*/

const validarFormulario = (e) => {
	switch (e.target.name) {                                                            /*Valida segun el nombre de input"*/
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');                       /*Ejecuta la funcion "validarCampo" y le parametriza los datos de la constante expresiones, el evento del input y asigna un nombre"*/
		break;
		case "telefono":
			validarCampo(expresiones.password, e.target, 'telefono');
		break;
	}
}


inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);   /*Cuando se levante la tecla ejecuta la funcion "validarFormulario"*/
	input.addEventListener('blur', validarFormulario);      /*Cuando den click fuera del form ejecuta la funcion "validarFormulario"*/
});