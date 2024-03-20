const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{11,20}$/, 
	edad: /^\d{1,2}$/, 
	fecha: /^(0[1-9]|[12][0-9]|3[01])[-\/](0[1-9]|1[0-2])[-\/](19|20)\d\d$/,
	juego: /^[a-zA-ZÀ-ÿ\s'-]{5,20}$/,
    comida: /^[a-zA-ZÀ-ÿ\s'-]{5,20}$/,
	// telefono: /^\d{7,14}$/ 
	
}

const campos = {
	nombre: false,
	edad: false,
	fecha: false,
	juego: false,
	comida: false,
	// telefono: false
	
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "edad":
			validarCampo(expresiones.edad, e.target, 'edad');
			validarCampo();
		break;	
		case "fecha":
			validarCampo(expresiones.fecha, e.target, 'fecha');
		break;
		case "juego":
			validarCampo(expresiones.juego, e.target, 'juego');
		break;
		case "comida":
			validarCampo(expresiones.comida, e.target, 'comida');
		break;
		// case "telefono":
		// 	validarCampo(expresiones.telefono, e.target, 'telefono');
		// break;
		
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

const validarPassword2 = () => {
	const inputPassword1 = document.getElementById('password');
	const inputPassword2 = document.getElementById('password2');

	if(inputPassword1.value !== inputPassword2.value){
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['password'] = false;
	} else {
		document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__password2 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__password2 i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['password'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();
		var nom = document.getElementById('nombre').value;
		var edad = document.getElementById('edad').value;
		var fecha = document.getElementById('fecha').value;
		var juego = document.getElementById('juego').value;
		var comida = document.getElementById('comida').value;
		

	const terminos = document.getElementById('terminos');
	if(campos.nombre && campos.edad && campos.fecha  && campos.juego && campos.comida && terminos.checked ){
		formulario.reset();
		console.log(nom);console.log(edad);console.log(fecha);console.log(juego);console.log(comida);
		$.post ("registro.php?cod=datos",{nom: nom, edad: edad, fecha: fecha, juego: juego, comida: comida}, function(document){$("#mensaje").html(document);
		
		}),
		
		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
	} 
});
