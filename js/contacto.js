$(document).ready(function(){
   $("#contact-form").submit(function(e){
        e.preventDefault();

        var datos = $(this).serialize();

        $.ajax({
            type:'post',
            url:'bd/contacto.php',
            data:datos,
            success:function(response){
                var res = JSON.parse(response); 
                if (res.response == 'ok') {
                    Swal.fire(
                        'Datos Enviados!',
                        'Gracias por comunicarse con nosotros, en unos minutos nos pondremos en contacto con usted!',
                        'success'
                    );

                    $("#btnEnviar").text('Enviado!');

                    $(".form_name").val('');
                    $(".form_email").val('');
                    $(".form_message").val('');
                } else {
                    Swal.fire(
                        'Datos no Enviados!',
                        'Favor de ingresar los campos requeridos',
                        'error'
                    );

                    $("#btnEnviar").text('Enviar!');

                }
                

            }
        })
   });


   $("#service-form").submit(function(e){
        e.preventDefault();

        var datos = $(this).serialize();

        $.ajax({
            type:'post',
            url:'bd/servicio.php',
            data:datos,
            success:function(response){
                var res = JSON.parse(response); 
                if (res.response == 'ok') {
                    Swal.fire(
                        'Datos Enviados!',
                        'Gracias por comunicarse con nosotros, en unos minutos nos pondremos en contacto con usted!',
                        'success'
                    );

                    $("#send_form_service").text('Enviado!');

                    $(".service_name").val('');
                    $(".service_email").val('');
                    $(".service_message").val('');
                } else {
                    Swal.fire(
                        'Datos no Enviados!',
                        'Favor de ingresar los campos requeridos',
                        'error'
                    );

                    $("#send_form_service").text('Enviar!');

                }
                

            }
        })
   })
})