<?php

$nombre = $_POST['service_name'];
$email = $_POST['service_email'];
$business = $_POST['service_business'];
$mensaje = wordwrap($_POST['service_message'],70,"\r\n");

$contenido = "DE: ".$email."\n";
$contenido .= "EMPRESA: ".$business;
$contenido .= "MENSAJE: ".$mensaje;

$emailContacto = 'consultasfs@grupofoodsolutions.onmicrosoft.com';
$emailSistemas = 'sistemas@grupofoodsolutions.onmicrosoft.com';
if (!empty($nombre)&&!empty($email)&&!empty($mensaje)) {

   $send = mail($emailContacto.','.$emailSistemas,'CONTACTO DESDE LA WEB',$contenido);
   if ($send) {
        $data['response']="ok";
   } else {
        $data['response']="fail";
   }
    
   

} else {
    $data['response']="error";
   
}
 echo json_encode($data);