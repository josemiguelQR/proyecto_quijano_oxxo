<?php

include("conexion.php");
$con=conectar();

$idventa=$_GET['idventa'];

$sql="DELETE FROM `ventas` WHERE idventa='$idventa'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ventas.php");
    }
?>