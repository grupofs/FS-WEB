<?php

$nombre = $_POST['form_name'];
$email = $_POST['form_email'];
$mensaje = $_POST['form_message'];

$contenido = "De: ".$email."\n";
$contenido .= "Mensaje: ".$mensaje;


if (!empty($nombre)&&!empty($email)&&!empty($mensaje)) {
    mail('sistemas@grupofs.com,consultasfs@grupofs.com','Contacto desde la Web',$contenido);

    $data['response']="ok";

    return json_encode($data);
} else {
    $data['response']="Error";
    return json_encode($data);
}
