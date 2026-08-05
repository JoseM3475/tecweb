var numero;
var suma = 0;

do {
    numero = prompt("Introduce un número (0 para terminar):");
    numero = parseInt(numero);

    suma = suma + numero;

} while (numero != 0);

document.write("La suma total es: " + suma);
