/*
Autor: Profe
Nombre: 6_condicional_compuesto.js
Fecha: 2026-08-05
Proyecto: Ejercicios de JavaScript
*/

var num1, num2;
num1 = prompt('Ingrese el primer número:','');
num2 = prompt('Ingrese el segundo número:','');
num1 = parseInt(num1);
num2 = parseInt(num2);
if (num1 > num2)
{
    document.write('El mayor es '  + num1);
}
else{
    document.write('El mayor es: ' + num2);
}
document.write("Fin del ejercicio 6. Condicional Compuesto")