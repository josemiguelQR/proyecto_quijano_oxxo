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

$sql="UPDATE `articulos` SET `Nombre`='$Nombre', `Cantidad`='$Cantidad', `Precio`='$Precio', `Marca`='$Marca', `Tipo de Producto`='$Tipo', `Distribuidor`='$Distribuidor' WHERE `idarticulo`='$idarticulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulos.php");
    }
?>