var col;

col = prompt("Ingrese el color que quiera en el fondo de ventana (rojo, verde, azul)", "");

switch (col) {   
    case "rojo":
        document.body.style.backgroundColor = "#ff0000";
        break;

    case "verde":
        document.body.style.backgroundColor = "#00ff00";
        break;

    case "azul":
        document.body.style.backgroundColor = "#0000ff";
        break;

    default:
        document.write("Debe ingresar un color RGB");
}