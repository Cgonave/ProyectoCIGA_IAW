<?php
include 'Conex.php';



$creaBD="CREATE DATABASE $nombreBD";

mysqli_query ($enlace, $creaBD);
//mysqli_close ($enlace);
?>