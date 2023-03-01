<?php
	require ('conection.php');
	$conn = conectar();
	$idSesion = $_GET['idSesion'];
	
	$sql = "SELECT * FROM usuarios sesiones where idSesion = '$idSesuion'";
	$query=mysqli_query($conn,$sql);

	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="updateSesion.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre Sesion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombreSesion" placeholder="Nombre" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="idUsu" value="<?php echo $row['idUsu'] ?>" />
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Descripcion</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="descS" placeholder="descripcion"   required>
					</div>
				</div>
                                <div class="form-group">
					<label for="password" class="col-sm-2 control-label">Precio</label>
					<div class="col-sm-10">
                                            <input type="text" class="form-control" id="password" name="precio" placeholder="precio"   required>
					</div>
				</div>
				
				
				
				
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
                                            <a href="mostrarSesiones.php.php.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>