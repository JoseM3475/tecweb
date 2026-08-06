function cargar(sueldos)
{   
 var f;
 for(f=0;f<sueldos.length;f++)
    {   
      var v;
      v=prompt("Ingrese sueldo:", "");
      sueldos [f]=parseInt(v);
      } 
}  

function calcularGastos(sueldos)
{   
 var total=0;
 var f;
 for(f=0;f<sueldos.length;f++)
    {   
      total=total+sueldos[f];
      v=prompt("Ingrese sueldo:", "");
      sueldos [f]=parseInt(v);
    } 

    {   document.write("Listado de sueldos<br>");
        for(f=0;f<sueldos.length;f++)
        { 
            document.write(sueldos[f]+"<br>");
            
        }

document.write("Total de gastos en sueldos:"+total);
}  
} 

var sueldos;
sueldos=new Array (5);
cargar (sueldos);
calcularGastos(sueldos);







