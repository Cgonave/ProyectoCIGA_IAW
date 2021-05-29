<?php
include 'Conex.php';
if(isset($_POST['complet'])){

    mysqli_select_db($enlace, $nombreBD);
    $auto=$_POST['auto'];

    $busqueda1="SELECT * FROM PROVEEDOR WHERE ID_PROVEEDOR LIKE '$auto';";
    $resultado1=mysqli_query($enlace,$busqueda1);
        if(mysqli_num_rows($resultado1) > 0){

            while($fila=mysqli_fetch_array($resultado1)){
        
                $auto1=$fila[0];
                $auto2=$fila[1];
                $auto3=$fila[2];
                $auto4=$fila[3];



    }
}
}

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
<h3>Autocompletar datos anteriores</h3>
<p>ID</p><input type="text" name="auto" >
<input type="submit" name="complet" value="Autocompletar">
<br>
<br>
<br>
<br>
<p>ID </p><input type="text" name="ID" value="<?php if (isset($_POST['complet'])){echo $auto1;} ?>">
<br>
<P>Nombre </P><input type="text" name="Nombre" value="<?php if (isset($_POST['complet'])){echo $auto2;} ?>">
<br>
<P>CIF </P><input type="text" name="CIF" value="<?php if (isset($_POST['complet'])){echo $auto3;} ?>">
<br>
<p>Teléfono  </p><input type="number" name="Telefono"value="<?php if (isset($_POST['complet'])){echo $auto4;} ?>">
<br>

<br>

<input type="submit" name="actualizar" value="Actualizar Proveedor">
<input type="submit" name="Reset" value="Limpiar" />
<a href="proveedor.php"><input type="button" name="Inicio" value="Volver Al Menu" /></a>


</form>
</body>
</html>