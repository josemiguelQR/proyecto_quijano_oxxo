<?php
include("conexion.php");
$con=conectar();

$idarticulo=$_POST['idarticulo'];
$Nombre=$_POST['nombre'];
$Cantidad=$_POST['cantidad'];
$Precio=$_POST['precio'];
$Marca=$_POST['marca'];
$Tipo=$_POST['tipo'];
$Distribuidor=$_POST['distribuidor'];

$sql="INSERT INTO `articulos`(`idarticulo`, `Nombre`, `Cantidad`, `Precio`, `Marca`, `Tipo de Producto`, `Distribuidor`) VALUES('$idarticulo','$Nombre','$Cantidad','$Precio','$Marca','$Tipo','$Distribuidor')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: articulos.php");
    
}else {
}
?>