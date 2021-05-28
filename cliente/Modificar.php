<?php
include 'Conex.php';
$Tipot=array('Empresa','Particular');

if(isset($_POST['actualizar'])){

$ID=$_POST['ID'];
$DNI=$_POST['DNI'];
$Trato=$_POST['gender'];
$Nombre=$_POST['Nombre'];
$Correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$tipo=$_POST['Tipo'];


    mysqli_select_db($enlace, $nombreBD);

$actua1="UPDATE CLIENTES SET ID_CLIENTE = '$ID', DNI ='$DNI', TRATO='$Trato', NOMBRE='$Nombre', CORREO='$Correo', TELEFONO='$telefono', TIPO='$tipo' WHERE DNI LIKE '$DNI';";


mysqli_query($enlace,$actua1);

mysqli_close($enlace);
}

echo '<script language="javascript">alert("El Cliente ha sido actualizado correctamente");</script>';

?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<i><h1>Actualizacion de cliente</h1></i>
<form action="" method="POST">
<p>ID </p><input type="text" name="ID" >
<br>
<p>DNI </p><input type="text" name="DNI" REQUIRED>
<br>

<p><input type="radio" id="Señor" name="gender" value="Señor"/>Señor</p>
<p><input type="radio" id="Señora" name="gender" value="Señora"/>Señora</p>
<p><input type="radio" id="Otro" name="gender" value="Otro"/>Otro</p>


<br>
<P>Nombre </P><input type="text" name="Nombre">
<br>
<p>Correo electronico </p><input type="email" name="correo">
<br>
<p>Teléfono  </p><input type="number" name="telefono">
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


<input type="submit" name="actualizar" value="Actualizar Cliente">
<input type="submit" name="Reset" value="Limpiar" />
<br>
<a href="clientes.php"><input type="button" name="Inicio" value="Volver Al Inicio" /></a>


</form>
</body>
</html>