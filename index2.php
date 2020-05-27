<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/fondo.css">

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>






	<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
		<div class="container">
			<header class="header">

			</header>
				<br>
  		<!-- Navbar
    	================================================== -->
			<?php
			include("include/menu.php");
			?>
			<!-- ======================================================================================================================== -->


			<br>
			<h2>Formulario Datos Personales</h2><br><br>
			<form class="fomregistro" action="formulario.php" method="POST">
			<b>Numero de Expediente:  </b> <input class="centro" type="text" name="numexpediente" value=""><p></p>
			<b> Curp: </b>	<input class="centro1" type="text" name="curp" value=""><p></p>
		  <b>Escuela Proveniente: </b> <input class="centro2" type="text" name="escuela" value="" ><p></p>
			<b>Direccion: </b>	<input class="centro3" type="text" name="direccion" value="" ><p></p>
			<b>Ciudad: </b>	<input class="centro4" type="text" name="ciudad" value="" ><p></p>
			<b>Estado: </b>	<input class="centro5" type="text" name="estado" value="" placeholder=" "><p></p>
			<b>Nombre del Padre: </b>	<input class="centro6" type="text" name="nompadre" value="" placeholder=" "><p></p>
			<b> Nombre de la Madre: </b>	<input class="centro7" type="text" name="nommadre" value="" placeholder=""><p></p>
			<b>Telefono de Contacto: </b>	<input class="centro8" type="tel" name="telefonocont" value="" placeholder=" "><p></p>
				<input class="btn btn-success btn-primary" type="submit" value="Enviar" name="envio">
			</form>


	</body>
</html>
