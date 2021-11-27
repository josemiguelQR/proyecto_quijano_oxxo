<?php 
    include("conexion.php");
    $con=conectar();

$idventa=$_GET['id'];

$sql="SELECT * FROM ventas WHERE idventa='$idventa'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="idventa" value="<?php echo $row['idventa']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha de venta" value="<?php echo $row['Fecha de venta']  ?>">
                                <input type="text" class="form-control mb-3" name="vendedor" placeholder="Vendedor" value="<?php echo $row['Vendedor']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion de la tienda" value="<?php echo $row['Direccion de la tienda']  ?>">
                                <input type="text" class="form-control mb-3" name="articulos" placeholder="Articulos vendidos" value="<?php echo $row['Articulos vendidos']  ?>">
                                <input type="text" class="form-control mb-3" name="pp" placeholder="Precio pagado" value="<?php echo $row['Precio pagado']  ?>">
                                <input type="text" class="form-control mb-3" name="metodo" placeholder="Metodo de pago" value="<?php echo $row['Metodo de pago']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>