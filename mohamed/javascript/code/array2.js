function mostrarFecha(meses,dias)
{

  var num;
  num=prompt('Ingrese número de mes:','');
  num=parseInt(num);
  document.write('Corresponde al mes:'+meses[num-1]);
  document.write('<br>');
  document.write('Tiene '+dias[num-1]+' dias');

}



var meses;
meses=new Array(12);
meses [0]='Enero';
meses [0]='Febrero';
meses [0]='Marzo';
meses [0]='Abril';
meses [0]='Mayo';
meses [0]='Junio';
meses [0]='Julio';
meses [0]='Agosto';
meses [0]='Septiembre';
meses [0]='Octubre';
meses [0]='Noviembre';
meses [0]='Diciembre';

var dias;
dias=new Array(12);
dia[0]=31;
dia[1]=31;
dia[2]=31;
dia[3]=31;
dia[4]=31;
dia[5]=31;
dia[6]=31;
dia[7]=31;
dia[8]=31;
dia[9]=31;
dia[10]=31;
dia[11]=31;

mostrarFecha(meses,dias);
