var meses;
meses = new Array(12);

meses[0] = 'Enero';
meses[1] = 'Febrero';
meses[2] = 'Marzo';
meses[3] = 'Abril';
meses[4] = 'Mayo';
meses[5] = 'Junio';
meses[6] = 'Julio';
meses[7] = 'Agosto';
meses[8] = 'Septiembre';
meses[9] = 'Octubre';
meses[10] = 'Noviembre';
meses[11] = 'Diciembre';

var dias;
dias = new Array(12);

dias[0] = 31; // Enero
dias[1] = 28; // Febrero
dias[2] = 31; // Marzo
dias[3] = 30; // Abril
dias[4] = 31; // Mayo
dias[5] = 30; // Junio
dias[6] = 31; // Julio
dias[7] = 31; // Agosto
dias[8] = 30; // Septiembre
dias[9] = 31; // Octubre
dias[10] = 30; // Noviembre
dias[11] = 31; // Diciembre

function mostrarFecha(meses, dias){
    var num;
    num = prompt('Introduzca un numero y le diré que mes cae y cuantos dias tiene: ');

    document.write('El mes es: ' + meses[num - 1] + '<br>');
    document.write('Este mes tiene ' + dias[num - 1] + ' dias');
}

mostrarFecha(meses, dias);