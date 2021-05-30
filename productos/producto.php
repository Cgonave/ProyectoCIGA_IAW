<?php
include 'Conex.php';

if(isset($_POST['registrar'])){

    mysqli_select_db($enlace, $nombreBD);
    $IDpro=$_POST['IDpro'];

    $busqueda1="SELECT * FROM PRODUCTO WHERE ID_PRODUCTO LIKE '$IDpro';";
    $resultado1=mysqli_query($enlace,$busqueda1);
        if(mysqli_num_rows($resultado1) > 0){
        
        echo '<script language="javascript">alert("El Producto con el ID indicado ya existe");</script>';

    }else{
        header('Location:./registrar.php');
    }
    mysqli_close($enlace);  
}
elseif(isset($_POST['busqueda'])){

    mysqli_select_db($enlace, $nombreBD);
    $IDpro=$_POST['IDpro'];

    $busqueda1="SELECT * FROM PRODUCTO WHERE ID_PRODUCTO LIKE '$IDpro';";
    $resultado1=mysqli_query($enlace,$busqueda1);
        if(mysqli_num_rows($resultado1) > 0){
            
        $busqueda2="SELECT * FROM PRODUCTO  WHERE ID_PRODUCTO LIKE '$IDpro' ORDER BY NOMBRE_PRODUCTO;";
        $resultado2=mysqli_query($enlace,$busqueda2);
     
        
        if(mysqli_num_rows($resultado2) > 0){
            while($fila=mysqli_fetch_array($resultado2)){
        
                echo "********* Datos del Producto con ID: " . $fila[0] . "*********";
                echo '<br>';
                echo "EL nombre es: " . $fila[1];
                echo '<br>';
                echo "La marca es: " .  $fila[2];
                echo '<br>';
                echo "El precio es: ". $fila[3];
                echo '<br>';
                echo "La cantidad disponible es: " . $fila[4];
                echo '<br>';
                echo "El estado es: " . $fila[5];
                echo '<br>';
                echo "El ID del Proveedor es: " . $fila[6];
        }
    }

    

    }else{
       
        echo '<script language="javascript">alert("El Producto con el ID indicado no existe");</script>';
   
}
}

elseif(isset($_POST['delete'])){

    mysqli_select_db($enlace, $nombreBD);
    $IDpro=$_POST['IDpro'];

    $busqueda1="SELECT * FROM PRODUCTO WHERE ID_PRODUCTO LIKE '$IDpro';";
    $resultado1=mysqli_query($enlace,$busqueda1);;
        if(mysqli_num_rows($resultado1) > 0){
            mysqli_select_db($enlace, $nombreBD);
    
            $borra1="DELETE  FROM PRODUCTO where ID_PRODUCTO LIKE '$IDpro';";
            
            
            
            mysqli_query($enlace,$borra1);
            
            mysqli_close($enlace);
            echo '<script language="javascript">alert("El Producto ha sido borrado correctamente");</script>'; 
        
            }
        
    

    else{
        echo '<script language="javascript">alert("El Producto con el ID indicado no existe");</script>'; 
}
}
elseif(isset($_POST['actualizar'])){

    mysqli_select_db($enlace, $nombreBD);
    $IDpro=$_POST['IDpro'];

    $busqueda1="SELECT * FROM PRODUCTO WHERE ID_PRODUCTO LIKE '$IDpro';";
    $resultado1=mysqli_query($enlace,$busqueda1);;
        if(mysqli_num_rows($resultado1) > 0){
            header('Location:Modificar.php');
    

    }else{
        echo '<script language="javascript">alert("El Producto con el ID indicado no existe");</script>'; 
        
    }
}

?>
<html>
<link href="productos.css" rel="stylesheet" type="text/css">
    <body>
<center>
    <h1>Editor de Productos</h1>
<fieldset id="fieldset">
<form method="POST" action=""> 
       <p>Introduzca el ID del Producto :<input type="text" name="IDpro"/></p>
       <br>
       <input type="submit" name="registrar" id="button" value="Registrar" />
       <input type="submit" name="busqueda" id="button" value="Buscar Producto"/>
      <input type="submit" name="delete" id="button" value="Eliminar Producto" />
       <input type="submit" name="actualizar" id="button" value="Actualizar Producto" />
       <br>
       <input type="reset" name="Reset" id="button" value="Limpiar" />
       <a href="http://localhost/Proyectoiaw/index.php"><input type="button" name="Inicio" id="button" value="Volver Al Inicio" /></a>
    </form>
</fieldset>
</center>
</body>
</html>