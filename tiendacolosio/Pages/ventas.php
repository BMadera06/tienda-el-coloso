<!DOCTYPE html>
<html>
<head>
	<title>Ventas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Librerias/diseño_funciones.css">
</head>
<body>
	<nav class="menuCSS3">
			<ul>
				<li><a href="ventas.php">Ventas</a></li>
				<li><a href="almacen.php">Almacén</a>
				<li><a href="proveedores.php">Proveedores</a></li>
				<li><a href="usuarios.php">Usuarios</a></li>
				<li><a href="reportes.php">Reportes</a></li>
				<li><a href="#">Salir</a></li>
			</ul>
	</nav>
	<div class="container">

		<div class="mitad">
		<div>
		<br>
		<label for="caja_busqueda">Buscar</label>
		<input type="text" name="caja_busqueda" id="caja_busqueda"></input>
		<br>
		

		<form action="probar.php" method = "POST">  
		<div id="datos"></div>
		<input type="submit" value="Terminar venta" class="myButton">
		</form>

		</div>
		</div>
</section>
		
	</div>

<script src="../Librerias/jquery.min.js"></script>
<script src="../Librerias/main.js"></script>

</body>
</html>