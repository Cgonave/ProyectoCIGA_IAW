<?php
include 'Conex.php';

if(isset($_POST['registrar'])){

$ID=$_POST['ID'];
$Nombre=$_POST['Nombre'];
$CIF=$_POST['CIF'];
$Telefono=$_POST['Telefono'];


    mysqli_select_db($enlace, $nombreBD);

$inser1="INSERT INTO PROVEEDOR (ID_PROVEEDOR, NOMBRE_PROVEEDOR, CIF_EMPRESA, NUMERO_TELEFONO) VALUES ('$ID', '$Nombre', '$CIF', '$Telefono');";


mysqli_query($enlace,$inser1);

mysqli_close($enlace);
}

?>

<html>
<head>
<link href="proveedor2.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
</head>
<body>
<i><h1>Registro de Proveedor</h1></i>
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

<input type="submit" name="registrar" id="button" value="Registrar Proveedor">
<input type="submit" name="Reset"  id="button" value="Limpiar" />
<a href="proveedor.php"><input type="button" name="Inicio"  id="button" value="Volver Al Menu" /></a>


</form>
</body>
</html>