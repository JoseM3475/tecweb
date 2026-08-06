var dia,mes,anio;
dia=prompt('Ingrese dia:','');
mes=prompt('Ingrese mes:','');
anio=prompt('Ingrese año:','');
dia=parseInt(dia, 10);
mes=parseInt(mes, 10);
anio=parseInt(anio, 10);
if (mes==1 || mes==2 || mes==3)
{
    document.write('corresponde al primer trimestre del año.');
}
else
{
    document.write('No corresponde al primer trimestre del año.');
}
