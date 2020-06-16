<?php

$nombre = $_POST['form_name'];
$email = $_POST['form_email'];
$mensaje = $_POST['form_message'];

$contenido = "DE: ".$email."\n";
$contenido .= "MENSAJE: ".$mensaje;


if (!empty($nombre)&&!empty($email)&&!empty($mensaje)) {
    mail('sistemas@grupofs.com,consultasfs@grupofs.com','CONTACTO DESDE LA WEB',$contenido);

    $data['response']="ok";

    return json_encode($data);
} else {
    $data['response']="Error";
    return json_encode($data);
}
