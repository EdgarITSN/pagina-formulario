<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mostrar Documentos</title>
    <link rel="stylesheet" href="css/fondotabla.css">

  </head>
  <body >
    <font face="helvetica">
    <center>
      <form class="" action="admin.php" method="post">
        <h2>Tabla de documentos recibidos</h2><br>
        <b>Regresar al panel de administrador </b> <input type="submit" name="" value="Regresar"><br><br>
      </form>
      <table >
        <thead>
          <tr>
            <th>id</th>
            <th>Numero_Expediente</th>
            <th>Nombre</th>
            <th>Imagen</th>
          </tr>
        </thead>
        <tbody >
          <?php
            include ("conexionimg.php");
            $query="SELECT * FROM  formularioarchivo";
            $resultado=$conexion->query($query);
              while ($row = $resultado->fetch_assoc()) {
           ?>
              <tr>
                <td><?php echo $row['idimagen']; ?></td>
                <td><?php echo $row['Numero_Expediente']; ?></td>
                <td><?php echo $row['Nombre_archivo']; ?></td>
                <td> <img onclick="javascript:this.width=450;this.height=538" ondblclick="javascript:this.width=225;this.height= 150;" height="150px" src="data:image/jpg;base64,<?php echo base64_encode($row['archivo']); ?>" alt=""/> </td>
              </tr>
           <?php
              }
            ?>
        </tbody>
      </table>
    </center>
    </font>
  </body>
</html>
