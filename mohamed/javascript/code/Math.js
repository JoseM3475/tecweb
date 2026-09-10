var select=prompt('Ingrese un valor 1 y 10','');
selec=parseInt(selec);
var num=parseInt(Math.random()*10+1);
if (num==selec)
  document.write('Ganó el número que se sorteó es el '+num);
else
  document.write('Lo siento se sorteó el valor '+num+' y usted elegió el '+selec);        