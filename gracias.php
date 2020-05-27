<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:index.php");
}elseif ($_SESSION['rol']==1) {
  header("Location:admin.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
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
  <body>
    <!-- Navbar
    ================================================== -->
    <?php
    include("include/menu.php");
    ?>
    <br><br>
    <h2 class="centro"> Felicidades a Completado el registro</h2>

  </body>
</html>
