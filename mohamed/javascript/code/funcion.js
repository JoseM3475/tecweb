
var contador=0;    
function incrementar()
{
   contador++;
   alert('El contador ahora vale :' + contador); 
}


<form>

 <input type="button" onClick="incrementar()"value="incrementar">
 <input type="button" onclick="descrementar()"value="descrementar">

</form> 