<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'conexionbd.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

  $mail = new PHPMailer(true);

     // Configuración del servidor
    $mail -> SMTPDebug = 0 ;                      // Habilita la salida de depuración detallada
    $mail -> isSMTP ();                                            // Enviar usando SMTP
    $mail -> Host        = 'smtp.gmail.com' ;                    // Configure el servidor SMTP para enviar a través de
    $mail -> SMTPAuth    = true ;
    $mail -> Username ='gabrom231231@gmail.com' ;
    $mail -> Password ='polonorte';
    $mail -> SMTPSecure = 'tls';                      // Habilitar autenticación SMTP      // Habilita el cifrado TLS; `PHPMailer :: ENCRYPTION_SMTPS` animó
    $mail -> Port  = 587 ;                                    // Puerto TCP para conectarse, use 465 para `PHPMailer :: ENCRYPTION_SMTPS` arriba

    // Destinatarios
    $mail -> setFrom ( 'gabrom231231@gmail.com' , 'Prueba' );
    $sqlReceptor="SELECT * FROM login ORDER BY id DESC LIMIT 1";
    $resultReceptor=$Mysqli->query($sqlReceptor);
    while ($row_receptor = mysqli_fetch_assoc($resultReceptor)) {
      $correo_receptor=$row_receptor['email'];
      $receptor=$row_receptor['user'];
      $id=$row_receptor['id'];
      $mail->addAddress($row_receptor['email']);
      // Adjuntos
      // Contenido
      $mail -> isHTML ( true );                                  // Establezca el formato de correo electrónico en HTML
      $mail -> Asunto = 'Prueba' ;
      $body ="<b> Datos bancarios </b> <br>
                          Institucion Bancaria: Bancomer <br>
                          Numero de cuenta: 171413511152 <br>
                          Nombre del la escuela: Unidad Academica Preparatoria No.8 <br>";
      $body .="Referencia: ";
      $body .=$id;
      $body .="<br> <br>";
      $body .=  " <b> Continuar Formulario </b> <br>
                 http://localhost/Proyecto/indexsesion.php  ";
      $mail -> Body= $body;

      if ($mail->send()) {
          echo "Envaido";die();
          } else {
        echo "error",$mail->ErrorInfo;die();
      }
    }
//    $mail -> addAddress ( 'vvvhunter22@gmail.com' , 'Edgar Fregoso' );     // Agregar un destinatario




 ?>
