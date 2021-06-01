<?php
session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
	header("location: ../index.php");
}
include '../Librerias/php/conexions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../Librerias/diseño_funciones.css">
	<meta name="viewport" content="width=device-width, user-scalable=no">
</head>
<body>
	<nav class="menuCSS3">
			<ul>
				<li><a href="ventas.php">Ventas</a></li>
				<li><a href="almacen.php">Almacén</a>
				<li><a href="proveedores.php">Proveedores</a></li>
				<li><a href="usuarios.php">Usuarios</a></li>
				<li><a href="reportes.php">Reportes</a></li>
				<li><a href='menu.php'">Salir</a></li>
			</ul>
	</nav> 
	<div class="container">
		<button>Reporte de empleados</button>
		<button>Reporte de productos</button>
		<button>Ventas del dia</button>
		<button>Productos vendidos</button>
	</div>
</body>
</html>