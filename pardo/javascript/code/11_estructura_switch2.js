var col;
col=prompt('Ingrese el color que se quiere pintar el fondo de la ventana(rojo, verde, azul)' ,'');
switch(col){
     case 'rojo': document.bgColor='#ff0000';
                  break;
     case 'verde': document.bgColor='#00ff00';
                  break;
     case 'azul': document.bgColor='#0000ff';
                  break;
}