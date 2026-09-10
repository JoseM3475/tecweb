var contador = 0;

function incrementar(){
    contador++;
    alert("El valor de la variable contador es: " + contador);
}

function decrementar(){
    contador--;
    alert("El valor de la variable contador es: " + contador);
}

function mostrar(){
    var nombre = document.form2.nombre.value;
    var edad = document.form2.edad.value;

    alert('El nombre es: ' + nombre + ' y la edad es: ' + edad);
}

function validarPass(){
    var contrasena = document.form3.contrasena.value;

    if(contrasena.length < 5){
        alert('La contraseña debe tener minimo 5 caracteres');
    } else{
        alert('La contraseña es correcta');
    }
}

function datosColores(){
    var inputnumero = document.getElementById('numero');
    var inputcolor = document.getElementById('color');
    var inputvalor = document.getElementById('valor');

    inputnumero.value = document.form4.select1.selectedIndex
    inputcolor.value = document.form4.select1.options[document.form4.select1.selectedIndex].text;
    inputvalor.value = document.form4.select1.options[document.form4.select1.selectedIndex].value;
}

function contarLenguajes(){
    var contador = 0;

    if(document.form5.lenguaje1.checked){
        contador++;
    }

    if(document.form5.lenguaje2.checked){
        contador++;
    }

    if(document.form5.lenguaje3.checked){
        contador++;
    }

    if(document.form5.lenguaje4.checked){
        contador++;
    }

    alert('El usuario conoce ' + contador + ' lenguajes de programación.')
}

function validarCV(){
    if (document.form6.curriculum.value.length > 100){
        alert('Curriculum muy largo');
    }else{
        alert('Curriculum enviado');
    }
}

function vaciar(control){
    control.value = '';
}

function verificarEntrada(control){
    if (control.value == ''){
        alert('Debe ingresar datos');
    }
}

function pintar(col){
    document.bgColor = col;
}

function focusOnForm(){
    document.form2.nombre.focus();
}
