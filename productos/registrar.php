<?php
include 'Conex.php';

if(isset($_POST['registrar'])){

$ID=$_POST['ID'];
$Nombre=$_POST['Nombre'];
$Marca=$_POST['Marca'];
$precio=$_POST['Precio'];
$Cantidad=$_POST['Cantidad'];
$Estado=$_POST['Estado'];


    mysqli_select_db($enlace, $nombreBD);

$inser1="INSERT INTO PRODUCTO (ID_PRODUCTO, NOMBRE_PRODUCTO, MARCA_PRODUCTO, PRECIO, CANTIDAD, ESTADO) VALUES ('$ID', '$Nombre', '$Marca', '$precio', '$Cantidad', '$Estado');";


mysqli_query($enlace,$inser1);

mysqli_close($enlace);
}

?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<i><h1>Registro de Producto</h1></i>
<form action="" method="POST">
<p>ID </p><input type="text" name="ID" >
<br>
<P>Nombre </P><input type="text" name="Nombre">
<br>
<P>Marca </P><input type="text" name="Marca">
<br>
<p>Precio  </p><input type="number" name="Precio">
<br>
<p>Cantidad  </p><input type="number" name="Cantidad">
<br>
<P>Estado </P><input type="text" name="Estado">
<br>
<br>

<input type="submit" name="registrar" value="Registrar Producto">
<input type="submit" name="Reset" value="Limpiar" />


</form>
</body>
</html>