<html>
<head>
<title>ERP</title>
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<form action="" method="post">
		<h2>Ingresar al sistema</h2>
		Usuario:
		<input type="text" name="user"><br>
		Password:
		<input type="password" name="pass"><br>
		<input type="submit" value="Ingresar" name="ingresar">
	</form>
	<?php
	if(isset($_POST["ingresar"])){
	require_once("php/usuario.php");
	$obj = new Usuario();
	$u = $_POST["user"];
	$p= $_POST["pass"];
	$resultado = $obj->comprobar($u,$p);
	if($resultado==true){
		session_start();
		$_SESSION["usuario"]= $u;
		$_SESSION["autenticado"]= true;
		header("Location: home.php");
	}else{
		echo "<h2>Usuario y/o password no encontrado</h2>";
	}
}
	?>
</body>
</html>