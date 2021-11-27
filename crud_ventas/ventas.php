<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM ventas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA VENTAS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="hidden" class="form-control mb-3" name="idventa" placeholder="idventa">
                                    <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha de venta">
                                    <input type="text" class="form-control mb-3" name="vendedor" placeholder="Vendedor">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion de la tienda">
                                    <input type="text" class="form-control mb-3" name="articulos" placeholder="Articulos vendidos">
                                    <input type="text" class="form-control mb-3" name="pp" placeholder="Precio pagado">
                                    <input type="text" class="form-control mb-3" name="metodo" placeholder="Metodo de pago">
                                    <input type="submit" class="btn btn-primary"> <a class="btn btn-primary" href="/proyecto_quijano_oxxo/index.php">Inicio</a> 
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>Fecha de venta</th>
                                        <th>Vendedor</th>
                                        <th>Direccion de la tienda</th>
                                        <th>Articulos vendidos</th>
                                        <th>Precio pagado</th> 
                                        <th>Metodo de pago</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idventa']?></th>
                                                <th><?php  echo $row['Fecha de venta']?></th>
                                                <th><?php  echo $row['Vendedor']?></th>
                                                <th><?php  echo $row['Direccion de la tienda']?></th>
                                                <th><?php  echo $row['Articulos vendidos']?></th> 
                                                <th><?php  echo $row['Precio pagado']?></th>
                                                <th><?php  echo $row['Metodo de pago']?></th>       
                                                <th><a href="actualizar.php?id=<?php echo $row['idventa'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idventa'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>