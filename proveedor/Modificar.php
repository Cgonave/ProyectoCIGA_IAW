<?php
include 'Conex.php';

if(isset($_POST['actualizar'])){

$ID=$_POST['ID'];
$Nombre=$_POST['Nombre'];
$CIF=$_POST['CIF'];
$Telefono=$_POST['Telefono'];


    mysqli_select_db($enlace, $nombreBD);

$actua1="UPDATE PROVEEDOR SET ID_PROVEEDOR='$ID', NOMBRE_PROVEEDOR='$Nombre', CIF_EMPRESA='$CIF', NUMERO_TELEFONO='$Telefono' WHERE ID_PROVEEDOR LIKE '$ID';";


mysqli_query($enlace,$actua1);

mysqli_close($enlace);
}

?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<i><h1>Actualizacion de Proveedor</h1></i>
<form action="" method="POST">
<p>ID </p><input type="text" name="ID" >
<br>
<P>Nombre </P><input type="text" name="Nombre">
<br>
<P>CIF </P><input type="text" name="CIF">
<br>
<p>Teléfono  </p><input type="number" name="Telefono">
<br>

<br>

<input type="submit" name="actualizar" value="Actualizar Proveedor">
<input type="submit" name="Reset" value="Limpiar" />
<a href="proveedor.php"><input type="button" name="Inicio" value="Volver Al Menu" /></a>


</form>
</body>
</html>