var nombre;
var nota;
nombre=prompt('Ingrese su nombre:','');
nota=parseInt(prompt('Ingrese su nota:',''), 10);
if (nota>=4)
{
    document.write(nombre+' está aprobado con un '+nota);
}
else
{
    document.write(nombre+' está reprobado con un '+nota);
}
