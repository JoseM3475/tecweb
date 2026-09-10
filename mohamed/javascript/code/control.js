function mostrar()
{
   var nom=document.form1.nombre.value;
   var ed=document.form1.edad.value;
   alert('Ingreso el nombre:' + nom);
   alert('Ingreso el nombre:' + ed) 
}
<form> name="form1">
  Ingrese su nombre:
  <input type="text" name="nombre"><br>
  Ingrese su edad:
  <input type="button" value="Confirmar"  
</form>