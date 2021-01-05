<?php
session_start();
if (isset($_POST['CUIL']))
{
	$CUIL=$_POST['CUIL'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$direccion=$_POST['direccion'];
	$titulo=$_POST['titulo'];
	$cargo=$_POST['cargo'];
		include ("conexion.php");
				$insertar= "insert into usuarios (CUIL, NOMBRE, APELLIDO, DIRECCION, TITULO, CARGO) values ('".$CUIL."','".$nombre."', '".$apellido."', '".$direccion."', '".$titulo."', '".$cargo."')";
				mysqli_query ($conexion, $insertar);
				echo "Carga Exitosa";
?>
		<script>
			$('#principal').html('');
			$('#principal').load('admin_usuarios.php');
		</script> 
	<?php		
}
?>
<html>
	<body>
							
		<div class="form-group">
			<label for="CUIL" class="text-white">CUIL:</label><br>
			<input type="number" name="CUIL" id="CUIL" class="form-control">
		</div>
		<div class="form-group">
			<label for="nombre" class="text-white">Nombre:</label><br>
			<input type="text" name="nombre" id="nombre" class="form-control">
		</div>
		<div class="form-group">
			<label for="apellido" class="text-white">Apellido:</label><br>
			<input type="text" name="apellido" id="apellido" class="form-control">
		</div>
		<div class="form-group">
			<label for="direccion" class="text-white">Direccion:</label><br>
			<input type="text" name="direccion" id="direccion" class="form-control">
		</div>
		<div class="form-group">
			<label for="titulo" class="text-white">Titulo:</label><br>
			<input type="text" name="titulo" id="titulo" class="form-control">
		</div>
		</div>
		<div class="form-group">
			<label for="cargo" class="text-white">Cargo:</label><br>
			<input type="text" name="cargo" id="cargo" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" name="Enviar" class="btn btn-info btn-md" value="Enviar" onclick="guardar_usuario()">
		</div>					
	</body>
</html>