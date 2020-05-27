<?php
  include "conexionimg.php";
  if (isset($_POST['envio'])) {
    $numexpediente=$_POST['numexpediente'];
    $curp=$_POST['curp'];
    $escuela=$_POST['escuela'];
    $direccion=$_POST['direccion'];
    $ciudad=$_POST['ciudad'];
    $estado=$_POST['estado'];
    $nompadre=$_POST['nompadre'];
    $nommadre=$_POST['nommadre'];
    $telefonocont=$_POST['telefonocont'];
    $insert="INSERT INTO formulario VALUES ('$numexpediente','$curp','$escuela','$direccion','$ciudad','$estado','$nompadre','$nommadre','$telefonocont')";

    $result=mysqli_query($conexion,$insert);
    if (!$result) {
      echo "Error al registrarte";
    }else {
      echo ' <script>alert("Datos guardados")</script> ';
      echo " <script>location.href='formarchivos.php'</script> ";
    }

    mysqli_close($conexion);
  }

 ?>
 <?php
 session_start();
 if (@!$_SESSION['user']) {
   header("Location:index.php");
 }elseif ($_SESSION['rol']==1) {
   header("Location:admin.php");
 }
 ?>
