<?php 
session_start();

if(!isset($_SESSION['sesion_iniciada'])){
	header("location: index.html");
	exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">	
	<title>Innovasport</title>
	<link rel="icon" type="image/png" href="img/icono.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header class="header">
		<span class="titulo">DeportStore</span>
		<h1>Lo que usa un gran deportista</h1>
	</header>
	<div class="menuh">
		<table>
			<tr>
				<td>
					<span></span>
				</td>
				<td>
					<ul>
						<li><a href="principal.html">Inicio</a></li>
						<li><a href="productos.html">Productos </a></li>
						<li><a href="qs.html">Quienes Somos</a></li>
						<li><a href="contacto.html">Contacto</a></li>
						<li><a href="cerrar.php">Salir</a></li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
	<center>
		<img src="img/foot.jpeg" height="146" width="345" alt="" class="i_p">
		<div class="informacion">
			<br>
			<h2>Innovasport</h2>
			<h2>Has ingresado con exito.</h2>
			<h2>Bienvenido <?php  echo $_SESSION['sesion_iniciada']['nombre']?></h2>
			<ul>
				<p>Innovasport te da la bienvenida a su pagina, en ella encontarás una gran variedad de productos relacionados al deporte. En Innovasport nos interesa que tu experiencia deportiva este lo más completa posible, es por eso que ponemos a tu dispoción productos de gran calidad a un buen precio. </p>
			</ul>
		</div>
		<img src="img/head.jpeg" height="173" width="292" alt="" class="i_p">
	</center>
	<br>
	<footer class="menu">
		<ul>
			<li><a href="twitter.com"><img src="img/twitter.png" height="30" width="30" alt=""></a></li>
			<li><a href="facebook.com"><img src="img/fb.png" height="30" width="30" alt=""></a></li>
			<li><a href="instagram.com"><img src="img/ig.jpeg" height="30" width="30" alt=""></a></li>
			
		</ul>
	</footer>
</body>
</html>