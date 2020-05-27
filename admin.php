<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Proyecto Academias</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
				<link rel="stylesheet" type="text/css" href="css/fondo.css">

 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<br>



  <!-- Navbar
    ================================================== -->

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>


		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">

		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">



	<div class="span12">
		<div class="caption">

<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
	<h2> Administración de usuarios registrados</h2> <br><br>
		<div class="">
			<h3>Verificar datos</h3>
			<form class="" action="mostrarformtres.php" method="post">
				<b>Archivos enviados: &nbsp &nbsp</b>
				<input type="submit" name="" value="Mostrar">
			</form>
			<form class="" action="validacion.php" method="post">
				<b>Numero de Expediente: </b>	<input type="text" name="numeroexpediente" value=""><br>
		&nbsp &nbsp			<input type="checkbox" id="checkbox" name="Actanacimiento" value="si">&nbsp &nbsp<b>Acta de Nacimiento: </b><br>
		&nbsp &nbsp			<input type="checkbox" id="checkbox" name="Certificado" value="si">&nbsp &nbsp<b>Certificado de Estudios: </b><br>
		&nbsp &nbsp			<input type="checkbox" id="checkbox" name="Comprantedomicilio" value="si">&nbsp &nbsp<b>Comprante de Domicilio: </b><br>
		&nbsp &nbsp			<input type="checkbox" id="checkbox" name="Curp"  value="si">&nbsp &nbsp<b>Curp: </b><br>
		&nbsp &nbsp			<input type="checkbox" id="checkbox" name="Comprantepago" value="si">&nbsp &nbsp<b>Comprobante de Pago:</b><br><br>
			<input type="submit" name="Verificar" value="Verificar">
			</form>

			<br>
			<form class="" action="reporte.php" method="post">
				<h3>Reporte</h3>
				<b>Generar reporte De todos los Aspitantes:</b> <input type="submit" name="" value="Acpetar">
			</form>

		<hr class="soft"/>
		<h4>Tabla de Usuarios</h4>

		<div class="row-fluid" >




			<?php

				require("connect_db.php");
				$sql=("SELECT * FROM login");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table  border='1'; class='table table-hover';>";
				echo " <thead class=''>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Usaurio</td>";
						echo "<td>Password</td>";
						echo "<td>Correo</td>";
						echo "<td>Password del administrador</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";
					echo " </thead>";

			?>

			<?php
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class=''>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";


				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";



					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){

						$sqlborrar="DELETE FROM login WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}

			?>



		<div class="span8">

		</div>
		</div>
		<br/>



		<!--EMPIEZA DESLIZABLE-->

		 <!--TERMINA DESLIZABLE-->





		</div>






<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>

</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>
