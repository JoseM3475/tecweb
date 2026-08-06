var col;
col=prompt("Ingrese el color con que se quiere pintar el fondo de la ventana (rojo, verde, azul) ", "");
switch(col) {
    case "rojo": document.body.style.backgroundColor="red";
    break;
    case "verde": document.body.style.backgroundColor="green";
    break;
    case "azul": document.body.style.backgroundColor="blue";
    break;
}