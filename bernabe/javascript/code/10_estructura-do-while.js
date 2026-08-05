var valor;



do{
    valor = prompt('Introduzca un valor entre 0 y 999');
    valor = parseInt(valor);

    if(valor < 10){
        document.write('El valor tiene 1 dígito');
    } else{
        if(valor < 100){
            document.write('El valor tiene 2 dígitos');
        } else{
            document.write('El valor tiene 3 dígitos');
        }
    }
} while (valor != 0)