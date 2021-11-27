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

$sql="UPDATE `clientes` SET `Nombre`='[$nombre]',`Apellidos`='[$apellidos]',`Correo electronico`='[$correo]',`Numero de telefono`='[$numero]',`Direccion`='[$direc]',`Codigo postal`='[$cp]' WHERE `idcliente`='$idcliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientes.php");
    }
?>