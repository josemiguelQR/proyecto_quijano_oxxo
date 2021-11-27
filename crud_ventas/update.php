<?php

include("conexion.php");
$con=conectar();

$idventa=$_POST['idventa'];
$Fecha=$_POST['fecha'];
$Vendedor=$_POST['vendedor'];
$DireccionTienda=$_POST['direccion'];
$Articulos=$_POST['articulos'];
$Pp=$_POST['pp'];
$Metodo=$_POST['metodo'];


$sql="UPDATE `ventas` SET `Fecha de venta`='$Fecha', `Vendedor`='$Vendedor', `Direccion de la tienda`='$DireccionTienda', `Articulos vendidos`='$Articulos', `Precio pagado`='$Pp', `Metodo de pago`='$Metodo' WHERE `idventa`='$idventa'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ventas.php");
    }
?>