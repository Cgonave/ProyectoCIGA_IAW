<?php
if(isset($_POST['cliente'])){
    header('Location:.\cliente\clientes.php');

}
elseif(isset($_POST['producto'])){
    header('Location:.\productos\producto.php');

}
elseif(isset($_POST['proveedor'])){
    header('Location:.\proveedor\proveedor.php');

}
?>
<html>
    <body>
<center>
    <h1>Menu Principal</h1>
<fieldset>
<h2>Indique la acción que desea realizar</h2>
<form method="POST" action=""> 
      
       <input type="submit" name="cliente" value="Editor de Clientes" />
       <input type="submit" name="producto" value="Editor de productos"/>
      <input type="submit" name="proveedor" value="Editor de Proveedores" />

</fieldset>
</center>
</body>
</html>