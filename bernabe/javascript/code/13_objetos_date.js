

function mostrarFecha(){
    var fecha;
    fecha = new Date();

    document.write('La fecha de hoy es: ');
    document.write(fecha.getDate() + '/');
    document.write(fecha.getMonth() + '/');
    document.write(fecha.getFullYear());
    document.write('<br>');
    document.write('Es la hora: ');
    document.write(fecha.getHours() + ':');
    document.write(fecha.getMinutes());

}

mostrarFecha();