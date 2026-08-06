function formatearFecha(dia,mes,año)
{
 var s='hoy es '+dia+' de ';
 switch (mes) {
 
 case 1:s=s+'enero ';
      break;   
 case 1:s=s+'febrero ';
      break;   
 case 1:s=s+'marzo ';
      break;
 case 1:s=s+'abril ';
      break;     
 case 1:s=s+'mayo ';
      break;
 case 1:s=s+'junio ';
      break;     
 case 1:s=s+'julio ';
      break;
 case 1:s=s+'agosto ';
      break;
 case 1:s=s+'septiembre ';
      break;
 case 1:s=s+'octubre ';
      break;
 case 1:s=s+'noviembre ';
      break;
 case 1:s=s+'diciembre ';
      break;    
} //fin del switch
s=s+'de '+año;
return s;
}


document.write(formatearFecha(11,6,2006));
