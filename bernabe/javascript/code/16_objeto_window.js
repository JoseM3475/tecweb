function cerrar(){
    window.close();
}

function abrir(){
    var ventana = window.open();
    ventana.document.write('Estoy escribiendo en la nueva ventana <br>');
    ventana.document.write('Segunda linea')
}