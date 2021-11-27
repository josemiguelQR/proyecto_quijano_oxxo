<?php
include("conexion.php");
$con=conectar();

$idcliente=$_POST['idcliente'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$numero=$_POST['numero'];
$direc=$_POST['direccion'];
$cp=$_POST['cp'];

$sql="INSERT INTO `clientes`(`idcliente`, `Nombre`, `Apellidos`, `Correo electronico`, `Numero de telefono`, `Direccion`, `Codigo postal`) VALUES('$idcliente','$nombre','$apellidos','$correo','$numero','$direc','$cp')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: clientes.php");
    
}else {
}
?>