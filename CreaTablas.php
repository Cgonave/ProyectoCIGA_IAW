<?php
include 'Conex.php';

mysqli_select_db ($enlace, $nombreBD);

$tabla1="CREATE TABLE PRODUCTO (
    ID_PRODUCTO VARCHAR(10) PRIMARY KEY,
    NOMBRE_PRODUCTO VARCHAR(30) NOT NULL,
    MARCA_PRODUCTO VARCHAR(20),
    PRECIO VARCHAR(20),
    CANTIDAD INTEGER(20),
    ESTADO VARCHAR(20)
    

);";
mysqli_query ($enlace, $tabla1);

$tabla2="CREATE TABLE PROVEEDOR (
   ID_PROVEEDOR VARCHAR(20) PRIMARY KEY,
    NOMBRE_PROVEEDOR VARCHAR(30),
    CIF_EMPRESA VARCHAR(12) NOT NULL,
    NUMERO_TELEFONO varchar(9)
    
    

);";
mysqli_query ($enlace, $tabla2);

$tabla3="CREATE TABLE CLIENTES (
    ID_CLIENTE VARCHAR(20) PRIMARY KEY,
    DNI VARCHAR (9) NOT NULL,
    TRATO VARCHAR (10),
    NOMBRE VARCHAR (50),
    TELEFONO varchar (9),
    CORREO VARCHAR(50),
    TIPO VARCHAR(10)
    
);";
mysqli_query ($enlace, $tabla3);
mysqli_close ($enlace);
?>