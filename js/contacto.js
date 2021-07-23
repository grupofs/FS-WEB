$(document).ready(function(){
   $("#contact-form").submit(function(e){
        e.preventDefault();

        var datos = $(this).serialize();

        $.ajax({
            type:'post',
            url:'bd/contacto.php',
            data:datos,
            success:function(response){
                console.log('response', response)
                if (response == 'ok') {
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
   })
})