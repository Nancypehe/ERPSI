<?php
session_start();
if(!isset($_SESSION["autenticado"])){
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/estilos.css">
	<title>ERP</title>
</head>
<body>
	<section>
		<nav>
			<h2>Bienvenido: <?php echo $_SESSION["usuario"]; ?></h2>
			<ul>
				<a href=""><li>Inicio</li></a>
				<a href="?sec=usu"><li>Usuario</li></a>
				<a href="?sec=asi"><li>Asistencia</li></a>
				<a href="?sec=bal"><li>Balance</li></a>
				<a href="?sec=cli"><li>Cliente</li></a>
				<a href="?sec=com"><li>Compra</li></a>
				<a href="?sec=det"><li>Detalle de compra</li></a>
				<a href="?sec=dev"><li>Devolucion</li></a>
				<a href="?sec=emp"><li>Empleado</li></a>
				<a href="?sec=eva"><li>Evaluacion</li></a>
				<a href="?sec=jor"><li>Jornada</li></a>
				<a href="?sec=man"><li>Mantenimiento</li></a>
				<a href="?sec=pro"><li>Proveedor</li></a>
				<a href="?sec=rem"><li>Remplazo</li></a>
				<a href="?sec=ven"><li>Venta</li></a>
				<a href="?sec=cerrar"><li>Cerrar Sesion</li></a>
			</ul>
		</nav>
		<article>
			<?php
			if(isset($_GET["sec"])){
				$sec =$_GET["sec"];
				switch ($sec) {
					case 'usu':
					require("php/vistaUsuario.php");
					break;
					case 'cerrar':
				    session_destroy();
					header("Location: index.php");
					break;
					case 'asi':
					require("php/vistaAsistencia.php");
					break;
					case 'bal':
					require("php/vistaBalance.php");
					break;
					case 'cli':
					require("php/vistaCliente.php");
					break;
					case 'com':
					require("php/vistaCompra.php");
					break;
					case 'det':
					require("php/vistaDetalleCompra.php");
					break;
					case 'dev':
					require("php/vistaDevoluciones.php");
					break;
					case 'emp':
					require("php/vistaEmpleado.php");
					break;
					case 'eva':
					require("php/vistaEvaluacion.php");
					break;
					case 'jor':
					require("php/vistaJornada.php");
					break;
					case 'man':
					require("php/vistaMantenimiento.php");
					break;
					case 'pro':
					require("php/vistaProveedor.php");
					break;
					case 'rem':
					require("php/vistaRemplazo.php");
					break;
					case 'ven':
					require("php/vistaVenta.php");
					break;
				}
			}
			?>
		</article>
	</section>
</body>
</html>