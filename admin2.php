<html>
    <head>
        <title>Registro de Corneas</title>
        <meta charset="utf-8">
        <link rel="icon" href="img/ojo.ico" type="image/x-icon">
        <link rel="stylesheet" href="estilo.css">
    </head>
</html>


<?php
include("conexion.php");
$cuil = '';
$nombre= '';
$apellido= '';
$direccion= '';
$titulo= '';
$cargo= '';


if (isset($_POST['Guardar'])) {
  $cuil = $_POST['cuil'];
  $nombre= $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $direccion = $_POST['direccion'];
  $titulo = $_POST['titulo'];
  $cargo = $_POST['cargo'];

  
  $query = "INSERT INTO INSERT INTO usuarios (CUIL, NOMBRE, APELLIDO, DIRECCION, TITULO, CARGO) VALUES ('$cuil', '$nombre', '$apellido','$direccion','$titulo','$cargo')";
  if (mysqli_query($mysqli, $query)) {
    echo "<h3>Alta de Socio Exitosa</h3>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($mysqli);
} 
?>

<h1 align="center"> ALTA DE SOCIOS</h1>
      <form action="alta.php" method="POST">
          
          <label>Ingrese el Cuil:</label>
          <input name="cuil" type="number"  placeholder="cuil">
          <br><br>
          <label>Ingrese el Nombre:</label>
          <input required name="nombre" type="text"   placeholder="Nombre">
          <br><br>
          <label>Ingrese el Apellido:</label>
          <input name="apellido" type="text"   placeholder="Apellido">
          <br><br>
          <label>Ingrese la Direccion:</label>
          <input name="direccion" type="text"   placeholder="Direccion">
          <br><br>
          <label>Ingrese el Titulo:</label>
          <input name="titulo" type="text"   placeholder="titulo">
          <br><br>
          <label>Ingrese el Cargo:</label>
          <input name="cargo" type="text"  placeholder="cargo">
          <br><br>
          
        <button class="boton" name="Guardar">Guardar</button>
        <input type="button" onclick="location.href='listado.php'"class="boton" name="cancelar" value="Cancelar" >
              
      </form>