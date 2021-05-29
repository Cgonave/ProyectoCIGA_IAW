<?php
include 'Conex.php';

if(isset($_POST['registrar'])){

$ID=$_POST['ID'];
$Nombre=$_POST['Nombre'];
$Marca=$_POST['Marca'];
$precio=$_POST['Precio'];
$Cantidad=$_POST['Cantidad'];
$Estado=$_POST['Estado'];
$Proveedor=$_POST['Proveedor'];


    mysqli_select_db($enlace, $nombreBD);

$inser1="INSERT INTO PRODUCTO (ID_PRODUCTO, NOMBRE_PRODUCTO, MARCA_PRODUCTO, PRECIO, CANTIDAD, ESTADO, ID_PROVEEDOR) VALUES ('$ID', '$Nombre', '$Marca', '$precio', '$Cantidad', '$Estado','$Proveedor');";


mysqli_query($enlace,$inser1);

mysqli_close($enlace);
}

?>

<html>
<head>
<link href="productos2.css" rel="stylesheet" type="text/css">
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
<p>Proveedor:</p>
<select name="Proveedor">
<?php
mysqli_select_db($enlace, $nombreBD);
$busqueda1="SELECT * FROM PROVEEDOR;";
$resultado1=mysqli_query($enlace,$busqueda1);
    foreach ($resultado1 as $val){

        


?>
                <option value="<?php echo $val['ID_PROVEEDOR'];?>"> <?php echo $val['NOMBRE_PROVEEDOR'];?></option>
                <?php
                }
                ?>
                </select>


<br>            
<br>

<input type="submit" name="registrar" id="button" value="Registrar Producto">
<input type="submit" name="Reset" id="button" value="Limpiar" />
<a href="producto.php"><input type="button" id="button" name="Inicio" value="Volver Al Menu" /></a>


</form>
</body>
</html>