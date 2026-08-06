/*
Autor: Profe
Nombre: 5_condicional_simple.js
Fecha: 2026-08-05
Proyecto: Ejercicios de JavaScript
*/

var nombre;
var nota;
nombre = prompt('Ingrese nombre:','');
nota = prompt('Ingrese nota:','');
if (nota>=4){
    document.write(nombre + " está aprobado con un " + nota);
}