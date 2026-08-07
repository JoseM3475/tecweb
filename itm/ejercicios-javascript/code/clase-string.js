var cadena;

cadena = prompt("Ingrese una cadena:" + "");

document.write("La cadena ingresada es: " + cadena);
document.write("<br>");

document.write("La cantidad de caracteres son: " + cadena.length);
document.write("<br>");

document.write("El primer caracter es " + cadena.charAt(0));
document.write("<br>");

document.write("Los tres primeros caracteres son " + cadena.substring(0, 3));
document.write("<br>");

if (cadena.indexOf("hola") != -1)
    document.write("Se ingresó la subcadena \"hola\"");
else
    document.write("No se ingresó la subcadena \"hola\"");

document.write("<br>");

document.write("La cadena convertida a mayúsculas es: " + cadena.toUpperCase());
document.write("<br>");

document.write("La cadena convertida a minúsculas es: " + cadena.toLowerCase());
document.write("<br>");
