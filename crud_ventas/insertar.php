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

$sql="INSERT INTO `ventas`(`idventa`, `Fecha de venta`, `Vendedor`, `Direccion de la tienda`, `Articulos vendidos`, `Precio pagado`, `Metodo de pago`) VALUES('$idventa','$Fecha','$Vendedor','$DireccionTienda','$Articulos','$Pp','$Metodo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ventas.php");
    
}else {
}
?>