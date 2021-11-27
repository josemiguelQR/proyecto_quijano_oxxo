<?php

include("conexion.php");
$con=conectar();

$idcliente=$_GET['idcliente'];

$sql="DELETE FROM `clientes` WHERE idcliente='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientes.php");
    }
?>