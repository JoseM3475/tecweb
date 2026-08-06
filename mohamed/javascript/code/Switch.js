var valor;
valor=prompt('Ingrese un valor comprendido entre 1 y 7:',''); 
//Convertimos a enteros valor)=parseInt(valor);
switch (valor) {
    case 1: document.write('uno');
            break;
    case 2: document.write('dos');
            break;
    case 3: document.write('tres');                
             break;
    case 4: document.write('cuatro');
             break;
    case 5: document.write('cinco');                  
             break;
    case 6: document.write('seis');            
            break;
    case 7: document.write('siete');   
    
default:document.write('debe ingresar un valor comprendido entre 1 y 7.');    
             
}