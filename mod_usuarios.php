<?php
session_start();
include ("conexion.php");
	if (isset($_POST['id']))
	{
	$id=$_POST['CUIL'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['presentacion'];
	$direccion=$_POST['direccion'];
	$titulo=$_POST['titulo'];
	$cargo=$_POST['cargo'];
		$insertar= "UPDATE usuarios SET nombre='".$nombre."', apellido='".$apellido."', direccion='".$direccion."', titulo='".$titulo."', cargo='".$cargo."' WHERE CUIL='".$id."'";
			echo "Usuario modificado con éxito";
			mysqli_query ($conexion, $insertar);
			?>
			<script>
				$('#principal').html('');
				$('#principal').load('admin_usuarios.php');
			</script>
		   <?php
	}
	$id=$_POST['CUIL'];
	$sql="SELECT * from usuarios where CUIL='".$id."'";
	$res=mysqli_query($conexion, $sql);
	$row=$res->fetch_assoc();

?>
<html>
	<body>
			<div class="form-group">
			<label for="nombre" class="text-white">Nombre</label><br>
			<input type="text" name="nombre" id="nombre" class="form-control">
		</div>
		<div class="form-group">
			<label for="apellido" class="text-white">Apellido</label><br>
			<input type="text" name="apellido" id="apellido" class="form-control">
		</div>
		<div class="form-group">
			<label for="direccion" class="text-white">Dirección</label><br>
			<input type="text" name="direccion" id="direccion" class="form-control">
		</div>
		<div class="form-group">
			<label for="titulo" class="text-white">Título</label><br>
			<input type="text" name="titulo" id="titulo" class="form-control">
		</div>
		<div class="form-group">
			<label for="cargo" class="text-white">Cargo</label><br>
			<input type="text" name="cargo" id="cargo" class="form-control">
		</div><br>
			<div class="form-group">
				<input type="submit" name="Ingresar" class="btn btn-info btn-md" value="Ingresar" onclick="modificar_usuario(<?php echo $cuil?>)">
			</div>
			<div class="form-group">
				<input type="button" name="Volver" class="btn btn-info btn-md" value="Volver al listado" onclick="admin_usuarios()">
			</div>
	</body>
</html>
