<?php
include 'Conex.php';

if(isset($_POST['actualizar'])){

$ID=$_POST['ID'];
$Nombre=$_POST['Nombre'];
$Marca=$_POST['Marca'];
$precio=$_POST['Precio'];
$Cantidad=$_POST['Cantidad'];
$Estado=$_POST['Estado'];
$Proveedor=$_POST['Proveedor'];

    mysqli_select_db($enlace, $nombreBD);

$actua1="UPDATE PRODUCTO SET ID_PRODUCTO = '$ID', NOMBRE_PRODUCTO='$Nombre', MARCA_PRODUCTO='$Marca', PRECIO='$precio', CANTIDAD='$Cantidad', ESTADO='$Estado', ID_PROVEEDOR='$Proveedor' WHERE ID_PRODUCTO LIKE '$ID';";


mysqli_query($enlace,$actua1);

mysqli_close($enlace);
}

?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<i><h1>Actualizacion de Producto</h1></i>
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

<input type="submit" name="actualizar" value="Actualizar Producto">
<input type="submit" name="Reset" value="Limpiar" />


</form>
</body>
</html>