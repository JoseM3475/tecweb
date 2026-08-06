/*
Autor: Profe
Nombre: 7_condicionales_anidados.js
Fecha: 2026-08-05
Proyecto: Ejercicios de JavaScript
*/

var nota1, nota2, nota3, nota4, nota5;
nota1=prompt('Ingrese 1ra. nota:','');
nota2=prompt('Ingrese 2da. nota:','');
nota3=prompt('Ingrese 3ra. nota:','');
nota4=prompt('Ingrese 4ta. nota:','');
nota5=prompt('Ingrese 5ta. nota:','');
//Convertimos los 5 strings en enteros
nota1 = parseInt(nota1);
nota2 = parseInt(nota2);
nota3 = parseInt(nota3);
nota4 = parseInt(nota4);
nota5 = parseInt(nota5);
var pro;
pro = (nota1 + nota2 + nota3 + nota4 + nota5)/5;
var mejor, peor;
mejor = nota1;
peor = nota1;

if(nota2 > mejor)
{
    mejor = nota2;
}
if(nota3 > mejor)
{
    mejor = nota3;
}
if(nota4 > mejor)
{
    mejor = nota4;
}
if(nota5 > mejor)
{
    mejor = nota5;
}

if(nota2 < peor)
{
    peor = nota2;
}
if(nota3 < peor)
{
    peor = nota3;
}
if(nota4 < peor)
{
    peor = nota4;
}
if(nota5 < peor)
{
    peor = nota5;
}
if(pro>=7)
{
    document.write('promocionado');
}
else
{
    if(pro>=4)
    {
        document.write('regular');
    }
    else
    {
        document.write('reprobado');
    }
}
document.write('<br>');
document.write('Promedio: ' + pro);
document.write('<br>');
document.write('Mejor nota: ' + mejor);
document.write('<br>');
document.write('Peor nota: ' + peor);
document.write('<br>');
document.write('Fin del ejercicio 7. Condicionales anidados.')