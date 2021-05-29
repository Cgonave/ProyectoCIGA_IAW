<?php
include 'Conex.php';

if(isset($_POST['complet'])){

    mysqli_select_db($enlace, $nombreBD);
    $auto=$_POST['auto'];

    $busqueda1="SELECT * FROM PRODUCTO WHERE ID_PRODUCTO LIKE '$auto';";
    $resultado1=mysqli_query($enlace,$busqueda1);
        if(mysqli_num_rows($resultado1) > 0){

            while($fila=mysqli_fetch_array($resultado1)){
        
                $auto1=$fila[0];
                $auto2=$fila[1];
                $auto3=$fila[2];
                $auto4=$fila[3];
                $auto5=$fila[4];
                $auto6=$fila[5];


    }
}
}

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
<link href="productos2.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
</head>
<body>
<i><h1>Actualizacion de Producto</h1></i>
<form action="" method="POST">
<h3>Autocompletar datos anteriores</h3>
<p>ID</p><input type="text" name="auto" >
<input type="submit" name="complet" id="button" value="Autocompletar">
<br>
<br>
<br>
<br>
<p>ID </p><input type="text" name="ID" value="<?php if (isset($_POST['complet'])){echo $auto1;} ?>">
<br>
<P>Nombre </P><input type="text" name="Nombre" value="<?php if (isset($_POST['complet'])){echo $auto2;} ?>">
<br>
<P>Marca </P><input type="text" name="Marca" value="<?php if (isset($_POST['complet'])){echo $auto3;} ?>">
<br>
<p>Precio  </p><input type="number" name="Precio" value="<?php if (isset($_POST['complet'])){echo $auto4;} ?>">
<br>
<p>Cantidad  </p><input type="number" name="Cantidad" value="<?php if (isset($_POST['complet'])){echo $auto5;} ?>">
<br>
<P>Estado </P><input type="text" name="Estado" value="<?php if (isset($_POST['complet'])){echo $auto6;} ?>" >
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

<input type="submit" name="actualizar" id="button" value="Actualizar Producto">
<input type="submit" name="Reset" id="button" value="Limpiar" />
<a href="producto.php"><input type="button" name="Inicio" id="button" value="Volver Al Menu" /></a>


</form>
</body>
</html>