<?php

$nombre = $_POST['form_name'];
$email = $_POST['form_email'];
$mensaje = wordwrap($_POST['form_message'],70,"\r\n");

$contenido = "DE: ".$email."\n";
$contenido .= "MENSAJE: ".$mensaje;

echo $contenido;
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