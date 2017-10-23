<?php 
include("conexion.php");

session_start();

if(isset($_POST['ingresar'])){
	$nombre = $_POST['nombre'];
	$contrasena = $_POST['contrasena'];
	$instruccion = "SELECT * FROM usuario WHERE nombre =\"".$nombre."\"AND contrasena =\"".$contrasena."\"";
	$resultado = mysqli_query($conectar, $instruccion);
	if(mysqli_num_rows($resultado)==1){
		$usuario = mysqli_fetch_array($resultado);
		echo "<h1>Bienvenido Amo</h1>";
		$_SESSION['sesion_iniciada'] = $usuario;
		header("location: principal.html");
		exit;
	}
}else{
	print_r($_POST);
}
?>