<?php include("header.php"); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Empleados</h1>
			</div>

			<div class="articulo">
			<h1>¿Buscas empleo?
				Unete a nuestra familia
			</h1><br>
      <div class="familia">
				<img src="img/familia.png" alt="FalconMasters">
			</div><br>
            <p>Deja aqui tus datos y nosotros te contactaremos</p><br>
<form>
  <label for="fname">Nombre</label><br>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Apellidos</label><br>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="nac">Fecha de nacimiento</label><br>
  <input type="date" id="nac" name="nac"><br><br>
  <label for="curp">CURP</label><br>
  <input type="text" id="curp" name="curp"><br><br>
  <label for="correo">Correo electrónico</label><br>
  <input type="text" id="correo" name="correo"><br><br>
  <label for="tfno">Número de teléfono</label><br>
  <input type="text" id="tfno" name="tfno"><br><br>
  <label for="estado">Estado</label><br>
  <select name="estado">
      <option value="no">Seleccione uno...</option>
      <option value="Aguascalientes">Aguascalientes</option>
      <option value="Baja California">Baja California</option>
      <option value="Baja California Sur">Baja California Sur</option>
      <option value="Campeche">Campeche</option>
      <option value="Chiapas">Chiapas</option>
      <option value="Chihuahua">Chihuahua</option>
      <option value="CDMX">Ciudad de México</option>
      <option value="Coahuila">Coahuila</option>
      <option value="Colima">Colima</option>
      <option value="Durango">Durango</option>
      <option value="Estado de México">Estado de México</option>
      <option value="Guanajuato">Guanajuato</option>
      <option value="Guerrero">Guerrero</option>
      <option value="Hidalgo">Hidalgo</option>
      <option value="Jalisco">Jalisco</option>
      <option value="Michoacán">Michoacán</option>
      <option value="Morelos">Morelos</option>
      <option value="Nayarit">Nayarit</option>
      <option value="Nuevo León">Nuevo León</option>
      <option value="Oaxaca">Oaxaca</option>
      <option value="Puebla">Puebla</option>
      <option value="Querétaro">Querétaro</option>
      <option value="Quintana Roo">Quintana Roo</option>
      <option value="San Luis Potosí">San Luis Potosí</option>
      <option value="Sinaloa">Sinaloa</option>
      <option value="Sonora">Sonora</option>
      <option value="Tabasco">Tabasco</option>
      <option value="Tamaulipas">Tamaulipas</option>
      <option value="Tlaxcala">Tlaxcala</option>
      <option value="Veracruz">Veracruz</option>
      <option value="Yucatán">Yucatán</option>
      <option value="Zacatecas">Zacatecas</option>
  </select><br><br>
  <label for="ciudad">Ciudad</label><br>
  <input type="text" id="ciudad" name="ciudad"><br><br>
  <label for="direccion">Dirección</label><br>
  <input type="text" id="direccion" name="direccion"><br><br>
  <label for="direccion">Código Postal</label><br>
  <input type="text" id="cp" name="cp"><br><br>
  <input type="submit" value="Enviar">
</form>
			</div>
			<?php include("sidebar.php"); ?>

		</div>
	</section>
<?php include("footer.php"); ?>
</body>
</html>