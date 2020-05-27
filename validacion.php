<?php
include "conexionimg.php";
if (isset($_POST['Verificar'])) {
  $numeroexpediente=$_POST['numeroexpediente'];
  $Actanacimiento=$_POST['Actanacimiento'];
  $Certificado=$_POST['Certificado'];
  $Comprantedomicilio=$_POST['Comprantedomicilio'];
  $Curp=$_POST['Curp'];
  $Comprantepago=$_POST['Comprantepago'];

  $sql="INSERT INTO verificacion VALUES('','$numeroexpediente','$Actanacimiento','$Certificado','$Comprantedomicilio','$Curp','$Comprantepago')";
  $result=mysqli_query($conexion,$sql);
  if ($sql) {
    echo ' <script>alert("VALIDACION CORRECTA")</script> ';
    echo " <script>location.href='admin.php'</script> ";
  }
}

?>
