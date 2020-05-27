<?php
  include 'plantilla.php';
  require 'conexionbd.php';
  $query="SELECT login.user,login.email,formulario.Numero_Expediente,formulario.Curp,formulario.Escuela,formulario.Direccion,formulario.Ciudad,formulario.Estado,formulario.Nombre_Padre,formulario.Nombre_Madre,formulario.Telefono_contacto
   FROM login INNER JOIN formulario
  ON login.id=formulario.Numero_Expediente ";
  $resultado=$Mysqli->query($query);

  $pdf = new PDF('P','mm',array('394','520'));
  $pdf ->AliasNbPages();
  $pdf ->AddPage();

  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('helvetica','B',10);
  $pdf->Cell(40,10,'Nombre',1,0,'C',1);
  $pdf->Cell(40,10,'Correo Electronico',1,0,'C',1);
  $pdf->Cell(30,10,'Num Expediente',1,0,'C',1);
  $pdf->Cell(35,10,'Curp',1,0,'C',1);
  $pdf->Cell(30,10,'Escuela',1,0,'C',1);
  $pdf->Cell(30,10,'Direccion',1,0,'C',1);
  $pdf->Cell(30,10,'Ciudad',1,0,'C',1);
  $pdf->Cell(25,10,'Estado',1,0,'C',1);
  $pdf->Cell(40,10,'Padre',1,0,'C',1);
  $pdf->Cell(40,10,'Madre',1,0,'C',1);
  $pdf->Cell(30,10,'Telefono',1,1,'C',1);

  $pdf->SetFont('helvetica','',8);
  while ($row=$resultado->fetch_assoc()) {
    $pdf->Cell(40,6,$row['user'],1,0,'C',0);
    $pdf->Cell(40,6,$row['email'],1,0,'C',0);
    $pdf->Cell(30,6,$row['Numero_Expediente'],1,0,'C',0);
    $pdf->Cell(35,6,$row['Curp'],1,0,'C',0);
    $pdf->Cell(30,6,$row['Escuela'],1,0,'C',0);
    $pdf->Cell(30,6,$row['Direccion'],1,0,'C',0);
    $pdf->Cell(30,6,$row['Ciudad'],1,0,'C',0);
    $pdf->Cell(25,6,$row['Estado'],1,0,'C',0);
    $pdf->Cell(40,6,$row['Nombre_Padre'],1,0,'C',0);
    $pdf->Cell(40,6,$row['Nombre_Madre'],1,0,'C',0);
    $pdf->Cell(30,6,$row['Telefono_contacto'],1,1,'C',0);
  }


  $pdf->Output();
 ?>
