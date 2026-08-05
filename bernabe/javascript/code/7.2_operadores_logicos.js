var dia;
var mes;
var anio;

dia = parseInt(dia);
mes = parseInt(mes);

dia = prompt('Introduzca el dia de su fecha');
mes = prompt('Introduzca el mes de su fecha');


dia = parseInt(dia);
mes = parseInt(mes);



if(dia > 15){
    document.write('El dia corresponde a la segunda quincena del mes');
    document.write('<br>');
} else{
    document.write('El dia corresponde a la primera quincena del mes');
    document.write('<br>');
}


if(mes == 1 || mes == 2 || mes == 3){
    document.write('La fecha corresponde a el primer trimestre')
} else {
    if(mes == 4 || mes == 5 || mes == 6){
        document.write('La fecha corresponde al segundo trimestre')
    } else {
        document.write('La fecha corresponde a el tercer trimestre ')
    }
}