var selec
var num
selec=prompt("Ingrese un valor entre 1 y 10","");
selec=parseInt(selec);
num=parseInt(Math.random()*10)+1;
if (num==selec) 
    document.write("Ganó el número que se sorteó, es el "+num);
else 
    document.write("Lo sentimos, se sorteó el valor "+num+" y usted eligió el "+selec);






