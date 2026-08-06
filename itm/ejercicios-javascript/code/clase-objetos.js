function mostrarFechaHora()
{   
var fecha 
fecha=new Date ();
document.write(fecha.getDate()+"/");
document.write((fecha.getMonth()+1)+"/");
document.write(fecha.getYear());
document.write("<br>");
document.write("Es la hora ");
document.write(fecha.getHours()+ ":");
document.write(fecha.getMinutes()+ ":");
document.write(fecha.getSeconds());
}  
mostrarFechaHora();






