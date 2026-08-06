function ConvertimosCatellano(x)
{
 if (x==1)
    return "uno";
 else
   if (x==2)
    return "dos";
 else
   if (x==3)
    return "tres";
 else 
   if (x==4)
    return "cuatro";
 else
   if (x==5)
    return "cinco"
 else
   return "valor incorrecto"
}

var valor;
valor=prompt("Ingrese un valor entre 1 y 5","")
valor=parseInt(valor);
var r;
r=ConvertimosCastellano(valor);
document.write(r);
