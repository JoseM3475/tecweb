var dia, mes, año;
dia=prompt("Ingrese día: ", "");
mes=prompt("Ingrese mes: ", "");
año=prompt("Ingrese el año: ", "");
dia=parseInt(dia);
mes=parseInt(mes);
año=parseInt(año);
if (mes==1 || mes==2 || mes==3 ){
    document.write("Estamos en el primer trimestre del año");
}