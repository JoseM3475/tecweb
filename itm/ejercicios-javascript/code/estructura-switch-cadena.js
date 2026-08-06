var col;

col = prompt("Ingrese el color que quiera en el fondo de ventana (rojo, verde, azul)", "");

switch (col) {
    case "rojo":
        document.body.style.setProperty("background-color", "#ff0000", "important");
        break;

    case "verde":
        document.body.style.setProperty("background-color", "#00ff00", "important");
        break;

    case "azul":
        document.body.style.setProperty("background-color", "#0000ff", "important");
        break;

    default:
        document.write("Debe ingresar un color RGB");
}