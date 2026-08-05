var num1;
var num2;
var num3;

num1 = prompt('Introduzca el primer numero');
num2 = prompt('Introduzca el segundo numero');
num3 = prompt('Introduzca el tercer numero');

num1 = parseInt(num1);
num2 = parseInt(num2);
num3 = parseInt(num3);

if(num1>num2 && num1>num3){
    document.write('El numero mayor es el ' + num1)
} else {
    if(num2>num3){
        document.write('El numero mayor es el ' + num2)
    } else{
        document.write('El numero mayor es el ' + num3)
    }
}