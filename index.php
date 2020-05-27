<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
				<link rel="stylesheet" type="text/css" href="css/fondo.css">
	<title>Proyecto academias</title>
</head>
<body>

	<center><!--<div class="tit"><h2 >Inicio de sesión</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		<tr><td><label style="font-size: 14pt"><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success" type="text" name="mail"></td></tr>
		<tr><td><label style="font-size: 14pt"><b>Contraseña: </b></label></td>
			<td witdh=80> <input type="password" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>-->
<br>

<!-- formulario registro -->

<form method="post" action="">
	<fieldset  >
    <legend><h2>Registro</h2></legend>
    <div class="form-group" >
      <label ><b >Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label ><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label ><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label ><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>

    </div>

    <input  class="btn btn-success" type="submit" name="submit"  value="Registrarse"/>
	</fieldset>
</form>
<form class="" action="indexsesion.php" method="post">
	<input class="btn btn-primary" type="submit" name="submit" value="Iniciar Sesion ">
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
			require("enviar.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>


</body>
</html>
