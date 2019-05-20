<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- El VIEWPORT permite el funcion de diseño responsivo o adaptable a pantalla -->
	<meta name="viewport" content="whidth=divice-whidth, initial-scale=1">

	<title>Uso de funciones</title>
	<!-- AÑADIENDO BOOTSTRAP-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="index.php" method="post" accept-charset="utf-8" class="form-horizontal">
			<h1> Envio de datos en formulario</h1>
			<br>
			<div class="form-group">
				<label class="col-md-2 control-label">Nombre:</label>
				<div class="col-md-4">
					<input type="text" name="txtNombre" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Apellido Paterno:</label>
				<div class="col-md-4">
					<input type="text" name="txtPaterno" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Apellido Materno:</label>
				<div class="col-md-4">
					<input type="text" name="txtMaterno" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label">Ciudad:</label>
				<div class="col-md-3">
					<input type="text" name="txtCiudad" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-2 control-label"></label>
				<button type="submit" name="btnEnviar" class="btn btn-primary">Enviar</button>
				<button type="reset" name="btnlimpiar" class="btn btn-danger">Cancelar</button>
			</div>
		</form>
	</div>

	<?php 
	include 'funciones.php';
	if(isset($_POST['btnEnviar'])){
		$nom="";
		$pat="";$mat="";
		$nom=$_POST['txtNombre'];
		$pat=$_POST['txtPaterno'];
		$mat=$_POST['txtMaterno'];
		$ciu=$_POST['txtCiudad'];

		echo ("<h2>Su nombre completo es:<strong> ".nombreCompleto($nom, $pat, $mat)." </strong></h2>");
		echo ("<h2>Su codigo es:<strong> ".generaCodigo($nom, $pat, $mat)." </strong></h2>");
		echo ("<h2>Su email es:<strong> ".generaCorreo($nom, $pat)." </strong></h2>");

	}


	 ?>






<!--AÑADIENDO BOOTSTRAP.JS Y JQUERY-->
<script src="bootstrap/js/jquery-1.12.4.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>	
</body>
</html>