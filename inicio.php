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
<link href="inicio.css" rel="stylesheet" type="text/css">
    <body>
<center>
    <fieldset id="titu">
    <h1>Menu Principal</h1>
</fieldset>
<fieldset id="fieldset">
<h2>Indique la acción que desea realizar</h2>
<hr id="linea">
<form method="POST" action=""> 
      <br>
      <br>
      <br>
      <br>
      <br>
       <input type="submit" name="cliente" id="cliente" value="Editor de Clientes" />
       <input type="submit" name="producto" id="producto" value="Editor de productos"/>
      <input type="submit" name="proveedor" id="proveedor" value="Editor de Proveedores" />

</fieldset>
</center>
</body>
</html>