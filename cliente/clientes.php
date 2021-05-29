<?php
include 'Conex.php';

if(isset($_POST['registrar'])){

    mysqli_select_db($enlace, $nombreBD);
    $comprDNI=$_POST['comprDNI'];

    $busqueda1="SELECT * FROM CLIENTES WHERE DNI LIKE '$comprDNI';";
    $resultado1=mysqli_query($enlace,$busqueda1);

        if(mysqli_num_rows($resultado1) > 0){
         echo '<script language="javascript">alert("El Cliente con el DNI indicado ya existe");</script>';
       
       

    }else{
        header('Location:./registrar.php');
    }
    mysqli_close($enlace);  
}
elseif(isset($_POST['busqueda'])){

    mysqli_select_db($enlace, $nombreBD);
    $comprDNI=$_POST['comprDNI'];

    $busqueda1="SELECT * FROM CLIENTES WHERE DNI LIKE '$comprDNI';";
    $resultado1=mysqli_query($enlace,$busqueda1);
    if(mysqli_num_rows($resultado1) > 0){


        $busqueda2="SELECT * FROM CLIENTES where DNI LIKE '$comprDNI' ORDER BY NOMBRE;";
                $resultado2=mysqli_query($enlace,$busqueda2);
        if(mysqli_num_rows($resultado2) > 0){
            while($fila=mysqli_fetch_array($resultado2)){
                
        
                echo "********* Datos del cliente con DNI: " . $fila[1] . "*********";
                echo '<br>';
                echo "Su ID de cliente es: " . $fila[0];
                echo '<br>';
                echo "Su Trato es " . $fila[2];
                echo '<br>';
                echo "Su nombre es: " . $fila[3];
                echo '<br>';
                echo "Su correo es: " .  $fila[5];
                echo '<br>';
                echo "Su Teléfono: ". $fila[4];
                echo '<br>';
                echo "El tipo de cliente es: " . $fila[6];
                echo '<br>';
                echo "El ID de Pedido es: " . $fila[7];

        }
    }

    
        
    
    }else{
       
        echo '<script language="javascript">alert("El Cliente con el DNI indicado no existe");</script>';
        
    
 
    

}
}
elseif(isset($_POST['delete'])){

    mysqli_select_db($enlace, $nombreBD);
    $comprDNI=$_POST['comprDNI'];

    $busqueda1="SELECT * FROM CLIENTES WHERE DNI LIKE '$comprDNI';";
    $resultado1=mysqli_query($enlace,$busqueda1);;
        if(mysqli_num_rows($resultado1) > 0){

            mysqli_select_db($enlace, $nombreBD);
    
            $borra1="DELETE  FROM CLIENTES where DNI LIKE '$comprDNI';";
            
            
            
            mysqli_query($enlace,$borra1);
            
            mysqli_close($enlace);
            echo '<script language="javascript">alert("El Cliente ha sido borrado correctamente");</script>'; 
        
            
    

    }else{

        echo '<script language="javascript">alert("El Cliente con el DNI indicado no existe");</script>'; 
     
}
}
elseif(isset($_POST['actualizar'])){

    mysqli_select_db($enlace, $nombreBD);
    $comprDNI=$_POST['comprDNI'];

    $busqueda1="SELECT * FROM CLIENTES WHERE DNI LIKE '$comprDNI';";
    $resultado1=mysqli_query($enlace,$busqueda1);

        if(mysqli_num_rows($resultado1) > 0){
            header('Location:Modificar.php');

    }else{
        echo '<script language="javascript">alert("El Cliente con el DNI indicado no existe");</script>'; 
        
    }
}

?>
<html>
    <body>
    <link href="cliente.css" rel="stylesheet" type="text/css">
<center>
    <fielset id="titu">
    <h1>Editor de clientes</h1>
</fieldset>
<fieldset id="fieldset">
<form method="POST" action=""> 
       <p>Introduzca el DNI :<input type="text" name="comprDNI"/></p>
       <br>
       <input type="submit" name="registrar" id="button" value="Registrar" />
       <input type="submit" name="busqueda"  id="button" value="Buscar Cliente"/>
      <input type="submit" name="delete" id="button" value="Eliminar Cliente" />
       <input type="submit" name="actualizar" id="button" value="Actualizar Cliente" />
       <br>
       <input type="reset" name="Reset" id="button" value="Limpiar" />
       <a href="http://localhost/Proyectoiaw/inicio.php"><input type="button" name="Inicio" id="button" value="Volver Al Inicio" /></a>
    </form>
</fieldset>
</center>
</body>
</html>