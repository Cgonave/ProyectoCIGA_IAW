<?php
$host='localhost';
$user='root';
$pwd='iaw';

$enlace= mysqli_connect ($host, $user, $pwd);

if (! $enlace) {
    echo "No hay conexión";
}
$nombreBD='cristian_bd_final';
?>