<script>
$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<html>
		<body>
			<?php
			include ("conexion.php");
			if (isset ($_POST['id']))
			{
			
				$id=$_POST['id'];
				$sql="DELETE from paciente where CUIL='".$id."'";
				mysqli_query ($conexion, $sql) or die ("<script language='javascript'> alert('No es posible eliminar este usuario'); 
				$('#principal').html('');
				$('#principal').load('admin_usuarios.php');</script>");	
			}
			$sql="select * from usuarios";
			$res=mysqli_query($conexion, $sql);
			
			?>
			<br><br>
			<div class="form-group">

					<input type="button" name="Nuevo" class="btn btn-info btn-md" value="Nuevo" onclick="nuevo_usuario()">
			</div>
			<table class="table table-striped" id="example">
				<thead>
					<tr>
						<th>CUIL</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Direccion</th>
						<th>Titulo</th>
						<th>Cargo</th>
						<th></th>
						<th></th>
					</tr>	
				</thead>
				<tbody>
	<?php
			while($row=$res->fetch_assoc())
			{
			?>
					<tr>
						<td><?php echo $row['CUIL']?></td>
						<td><?php echo $row['NOMBRE']?></td>
						<td><?php echo $row['APELLIDO']?></td>
						<td><?php echo $row['DIRECCION']?></td>
						<td><?php echo $row['TITULO']?></td>
						<td><?php echo $row['CARGO']?></td>
						<td><input type="button" name="Modificar" class="btn btn-info btn-md" value="Modificar" onclick="muestra_modificar_paciente(<?php echo $row['CUIL']?>)"></td>
						<td><input type="button" name="Eliminar" class="btn btn-info btn-md" value="Eliminar" onclick="eliminar_paciente(<?php echo $row['CUIL']?>)"></td>
					</tr>	
	<?php
			}
	?>	
				</tbody>
			</table>		
		</body>		
</html>