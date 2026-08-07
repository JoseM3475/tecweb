var sueldos;
sueldos = new Array(5);



function cargar(sueldos){
    var contador;

    for(contador = 0; contador < 5; contador++){
        var sueldo;
        sueldo = prompt('Introduzca el sueldo del operario ' + (contador + 1));
        sueldos[contador] = parseInt(sueldo);    
    }
}

function calcularGastos(sueldos){
    var total = 0;
    var acumulador;

    for(acumulador = 0; acumulador < sueldos.length; acumulador++){
        total = total + sueldos[acumulador];
    }

    document.write('Listado de sueldos: <br>');
    
    for(acumulador = 0; acumulador < sueldos.length; acumulador++){
        document.write('Operario '+ (acumulador + 1)+ ': ' +  sueldos[acumulador] + '<br>');
    }

    document.write('Total de gastos en sueldos: ' + total);


}

cargar(sueldos);
calcularGastos(sueldos);