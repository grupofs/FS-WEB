$(document).ready(function(){
   $("#contact-form").submit(function(e){
        e.preventDefault();

        console.log("CLick");
        
        var datos = $(this).serialize();

        $.ajax({
            type:'post',
            url:'http://meichtec.com/contacto.php',
            data:datos,
            success:function(response){
                console.log(response);
                $("#btnEnviar").text('Enviado!');

                $(".form_name").val('');
                $(".form_email").val('');
                $(".form_message").val('');

            }
        })
   })
})