<?php
include 'Conex.php';

if(isset($_POST['registrar'])){

    mysqli_select_db($enlace, $nombreBD);
    $IDprov=$_POST['IDprov'];

    $busqueda1="SELECT * FROM PRODUCTO WHERE ID_PRODUCTO LIKE '$IDprov';";
    $resultado1=mysqli_query($enlace,$busqueda1);
        if(mysqli_num_rows($resultado1) > 0){
        
        echo '<script language="javascript">alert("El Proveedor con el ID indicado ya existe");</script>';

    }else{
        header('Location:./registrar.php');
    }
    mysqli_close($enlace);  
}
elseif(isset($_POST['busqueda'])){

    mysqli_select_db($enlace, $nombreBD);
    $IDprov=$_POST['IDprov'];

    $busqueda1="SELECT * FROM PROVEEDOR WHERE ID_PROVEEDOR LIKE '$IDprov';";
    $resultado1=mysqli_query($enlace,$busqueda1);
        if(mysqli_num_rows($resultado1) > 0){
            
        $busqueda2="SELECT * FROM PROVEEDOR WHERE ID_PROVEEDOR = '$IDprov' ORDER BY NOMBRE_PROVEEDOR;";
        $resultado2=mysqli_query($enlace,$busqueda2);
     
        
        if(mysqli_num_rows($resultado2) > 0){
            while($fila=mysqli_fetch_array($resultado2)){
        
                echo "********* Datos del Proveedor con ID: " . $fila[0] . "*********";
                echo '<br>';
                echo "EL nombre es: " . $fila[1];
                echo '<br>';
                echo "El CIF es: ". $fila[2];
                echo '<br>';
                echo "El número de teléfono es: " . $fila[3];

        }
    }
    

    }else{
       
        echo '<script language="javascript">alert("El Proveedor con el ID indicado no existe");</script>';
   
}
}

elseif(isset($_POST['delete'])){

    mysqli_select_db($enlace, $nombreBD);
    $IDprov=$_POST['IDprov'];

    $busqueda1="SELECT * FROM PROVEEDOR WHERE ID_PROVEEDOR LIKE '$IDprov';";
    $resultado1=mysqli_query($enlace,$busqueda1);
        if(mysqli_num_rows($resultado1) > 0){
            mysqli_select_db($enlace, $nombreBD);
    
            $borra1="DELETE  FROM PROVEEDOR where ID_PROVEEDOR LIKE '$IDprov';";
            
            
            
            mysqli_query($enlace,$borra1);
            
            mysqli_close($enlace);
            echo '<script language="javascript">alert("El Proveedor ha sido borrado correctamente");</script>'; 
        
            }
        
    

    else{
        echo '<script language="javascript">alert("El Proveedor con el ID indicado no existe");</script>'; 
}
}
elseif(isset($_POST['actualizar'])){

    mysqli_select_db($enlace, $nombreBD);
    $IDprov=$_POST['IDprov'];

    $busqueda1="SELECT * FROM PROVEEDOR WHERE ID_PROVEEDOR LIKE '$IDprov';";
    $resultado1=mysqli_query($enlace,$busqueda1);;
        if(mysqli_num_rows($resultado1) > 0){
            header('Location:Modificar.php');
    

    }else{
        echo '<script language="javascript">alert("El Proveedor con el ID indicado no existe");</script>'; 
        
    }
}

?>
<html>
<link href="proveedor.css" rel="stylesheet" type="text/css">
    <body>
<center>
    <h1>Editor de Proveedores</h1>
<fieldset id="fieldset">
<form method="POST" action=""> 
       <p>Introduzca el ID del proveedor :<input type="text" name="IDprov"/></p>
       <br>
       <input type="submit" name="registrar" id="button" value="Registrar" />
       <input type="submit" name="busqueda" id="button" value="Buscar Proveedor"/>
      <input type="submit" name="delete" id="button" value="Eliminar Proveedor" />
       <input type="submit" name="actualizar" id="button" value="Actualizar Proveedor" />
       <br>
       <input type="reset" name="Reset" id="button" value="Limpiar" />
       <a href="http://localhost/Proyectoiaw/index.php"><input type="button" name="Inicio" id="button" value="Volver Al Inicio" /></a>
    </form>
</fieldset>
</center>
</body>
</html>