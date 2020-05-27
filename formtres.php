<?php
include "conexionimg.php";
if (isset($_POST['registro'])) {
  $numeroexpediente=$_POST['numeroexpediente'];
  $nombreimagen=$_POST['nombreimagen'];
  $archivo= addslashes(file_get_contents($_FILES['archivo']['tmp_name']));

  $query = "INSERT INTO formularioarchivo VALUES ('','$numeroexpediente','$nombreimagen','$archivo')";
  $result=mysqli_query($conexion,$query);
  if (!$result) {
    echo "Error al registrarte";
  }else {
    echo ' <script>alert("Archivo Enviado")</script> ';
    echo " <script>location.href='formarchivos.php'</script> ";
  }

  mysqli_close($conexion);
}
 ?>
