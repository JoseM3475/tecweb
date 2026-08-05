var valor;
do {
    valor = prompt('Ingrese un valor entre 0 y 999:', '');
    valor = parseInt(valor);

    document.write('El valor ' + valor + ' tiene ');

    if (valor < 10) {
        document.write('1 dígito');
    }
    else if (valor < 100) {
        document.write('2 dígitos');
    }
    else {
        document.write('3 dígitos');
    }

    document.write('<br>');
} while (valor != 0);