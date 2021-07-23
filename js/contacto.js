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
                console.log('response', res.response)
                if (res.response == 'ok') {
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