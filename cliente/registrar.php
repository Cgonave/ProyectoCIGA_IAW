<?php
include 'Conex.php';
$Tipot=array('Empresa','Particular');

if(isset($_POST['registro'])){

$ID=$_POST['ID'];
$DNI=$_POST['DNI'];
$Trato=$_POST['gender'];
$Nombre=$_POST['Nombre'];
$Correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$tipo=$_POST['Tipo'];
$Pedido=$_POST['Pedido'];



    mysqli_select_db($enlace, $nombreBD);

$inser1="INSERT INTO CLIENTES (ID_CLIENTE, DNI, TRATO, NOMBRE, CORREO, TELEFONO, TIPO, ID_PEDIDO) VALUES ('$ID','$DNI', '$Trato', '$Nombre', '$Correo', '$telefono', '$tipo','$Pedido');";


mysqli_query($enlace,$inser1);

mysqli_close($enlace);
}
?>

<html>
<head>
<link href="cliente2.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
</head>
<body>
<i><h1>Formulario de Registro</h1></i>
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

<p><input type="checkbox" name="terminos" value="Acepto los terminos y condiciones de uso."/>Acepto los terminos y condiciones de uso.</p>
<p><input type="checkbox" name="terminos" value="Tengo conocimiento sobre la ley de proteccion de datos y manejo de información personal."/>Tengo conocimiento sobre la ley de proteccion de datos y manejo de información personal.</p>
<input type="submit" name="registro" id="button" value="Registrar Cliente">
<input type="submit" name="Reset" id="button" value="Limpiar" />
<br>
<a href="clientes.php"><input type="button" id="button" name="Inicio" value="Volver Al Menu" /></a>


</form>
           
</body>
</html>