<?php
include 'Conex.php';
$Tipot=array('Empresa','Particular');

if(isset($_POST['complet'])){

    mysqli_select_db($enlace, $nombreBD);
    $auto=$_POST['auto'];

    $busqueda1="SELECT * FROM CLIENTES WHERE DNI LIKE '$auto';";
    $resultado1=mysqli_query($enlace,$busqueda1);
        if(mysqli_num_rows($resultado1) > 0){

            while($fila=mysqli_fetch_array($resultado1)){
        
                $auto1=$fila[0];
                $auto2=$fila[1];
                $auto3=$fila[2];
                $auto4=$fila[3];
                $auto5=$fila[4];
                $auto6=$fila[5];
				$auto7=$fila[6];
                $auto8=$fila[7];


    }
}
}

if(isset($_POST['actualizar'])){

$ID=$_POST['ID'];
$DNI=$_POST['DNI'];
$Trato=$_POST['gender'];
$Nombre=$_POST['Nombre'];
$Correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$tipo=$_POST['Tipo'];
$Pedido=$_POST['Pedido'];


    mysqli_select_db($enlace, $nombreBD);

$actua1="UPDATE CLIENTES SET ID_CLIENTE = '$ID', DNI ='$DNI', TRATO='$Trato', NOMBRE='$Nombre', CORREO='$Correo', TELEFONO='$telefono', TIPO='$tipo', ID_PEDIDO='$Pedido' WHERE DNI LIKE '$DNI';";


mysqli_query($enlace,$actua1);

mysqli_close($enlace);
}



?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<i><h1>Actualizacion de cliente</h1></i>
<form action="" method="POST">
<h3>Autocompletar datos anteriores</h3>
<p>DNI</p><input type="text" name="auto" >
<input type="submit" name="complet" value="Autocompletar">
<br>
<br>
<br>
<br>
<p>ID </p><input type="text" name="ID" value="<?php if (isset($_POST['complet'])){echo $auto1;} ?>">
<br>
<p>DNI </p><input type="text" name="DNI" value="<?php if (isset($_POST['complet'])){echo $auto2;} ?>">
<br>

<p><input type="radio" id="Señor" name="gender" value="Señor"/>Señor</p>
<p><input type="radio" id="Señora" name="gender" value="Señora"/>Señora</p>
<p><input type="radio" id="Otro" name="gender" value="Otro"/>Otro</p>


<br>
<P>Nombre </P><input type="text" name="Nombre" value="<?php if (isset($_POST['complet'])){echo $auto4;} ?>">
<br>
<p>Correo electronico </p><input type="email" name="correo" value="<?php if (isset($_POST['complet'])){echo $auto6;} ?>">
<br>
<p>Teléfono  </p><input type="number" name="telefono" value="<?php if (isset($_POST['complet'])){echo $auto5;} ?>">
<br>
<br>
<p>Tipo
<select name="Tipo" >
                    <?php
				foreach ($Tipot as $val){
				?>
				<option value="<?php echo $val?>">
				<?php echo $val;
				?>
				<?php
				}
				?>



</select></p>
<br>
<p>Pedido:</p>
<select name="Pedido">
<?php
mysqli_select_db($enlace, $nombreBD);
$busqueda1="SELECT * FROM PEDIDOS;";
$resultado1=mysqli_query($enlace,$busqueda1);
    foreach ($resultado1 as $val){

        


?>		
                <option value="<?php echo $val['ID_PEDIDO'];?>"> <?php echo $val['ID_PEDIDO'];?></option>
                <?php
                }
                ?>
                </select>


<br>  
<br>


<input type="submit" name="actualizar" value="Actualizar Cliente">
<input type="submit" name="Reset" value="Limpiar" />
<br>
<a href="clientes.php"><input type="button" name="Inicio" value="Volver Al Menu" /></a>


</form>
</body>
</html>