var dia
var mes
var año
dia=prompt("Ingrese día:","");
mes=prompt("Ingrese mes:","");
año=prompt("Ingrese año:","");
dia=parseInt(dia);
mes=parseInt(mes);
año=parseInt(año);
if (mes==1 || mes==2 || mes==3)
{
document.write("corresponde al primer trimestre del año");
}