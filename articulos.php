<?php include("header.php"); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Articulos</h1>
			</div>

			<div class="articulo">
       
<h1>Introduzca los datos de sus articulos de compra
  para continuar con su compra
</h1><br>

<form>
  <label for="id">Id</label><br>
  <input type="text" id="id" name="id"><br><br>
  <label for="name">Nombre</label><br>
  <input type="text" id="name" name="name"><br><br>
  <label for="cantidad">Cantidad</label><br>
  <input type="text" id="cantidad" name="cantidad"><br><br>
  <label for="precio">Precio</label><br>
  <input type="text" id="precio" name="precio"><br><br>
  <label for="marca">Marca</label><br>
  <input type="text" id="marca" name="marca"><br><br>
  <input type="submit" value="Enviar"><br><br>
  <div class="articulos">
				<img src="img/articulos.jpg" alt="FalconMasters">
			</div>
			</div>

			<?php include("sidebar.php"); ?>
		</div>
	</section>
<?php include("footer.php"); ?>
</body>
</html>