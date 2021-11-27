<?php 
    include("conexion.php");
    $con=conectar();

$idarticulo=$_GET['id'];

$sql="SELECT * FROM articulos WHERE idarticulo='$idarticulo'";
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
                    
                                <input type="hidden" name="idarticulo" value="<?php echo $row['idarticulo']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="cantidad" placeholder="Cantidad" value="<?php echo $row['Cantidad']  ?>">
                                <input type="text" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo $row['Precio']  ?>">
                                <input type="text" class="form-control mb-3" name="marca" placeholder="Marca" value="<?php echo $row['Marca']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo" placeholder="Tipo de producto" value="<?php echo $row['Tipo de Producto']  ?>">
                                <input type="text" class="form-control mb-3" name="distribuidor" placeholder="Distribuidor" value="<?php echo $row['Distribuidor']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>