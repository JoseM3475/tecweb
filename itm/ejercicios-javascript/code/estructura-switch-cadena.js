var col;
col=prompt ("ingrese el color que quiera en el fondo de ventana (rojo,verde,azul)", "");
switch (col)
{   
 case "rojo": document.bgColor="#ff0000";
         break;  
 case "verde": document.bgColor="#00ff00";
         break;  
 case "azul": document.bgColor="#0000ff";
         break;  
 default:document.write( "Debe ingresar un color RGB");
}
