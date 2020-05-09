$(document).ready(function(){
    $('li').removeClass('current');


    var navbarHeight = 20;
    var didScroll = false;

    $(window).scroll(function() {
    didScroll = true;
   
    });

    setInterval(function() {
    if (didScroll) {
        didScroll = false;
        // Check your page position and then
        // Load in more results
        var top = $(window).scrollTop() + navbarHeight;
        
        

        if ($('.main-slider').offset().top < top) {
            $('li').removeClass('current');
            $('li#InicioFSid').addClass('current');
            
        }

        if ($('.NosotrosFSclass').offset().top < top) {
            $('li').removeClass('current');
            $('li#NosotrosFSid').addClass('current');
            $('div#quienes_somos').addClass('animated fadeIn')
           
        }

        if ($('.ServiciosFSclass').offset().top < top) {
            $('li').removeClass('current');
            $('li#ServiciosFSid').addClass('current');

            $('div#quienes_somos').removeClass('animated fadeIn') //QUITAMOS LA CLASE ANTERIOR AL SUBIR
         
        } 
                
        if ($('.SociosFSclass').offset().top < top) {
            $('li').removeClass('current');
            $('li#SociosFSid').addClass('current');

            $('div#socios_animacion').addClass('animated fadeIn')
        }

        if ($('.ClientesFSclass').offset().top < top) {
            $('li').removeClass('current');
            $('li#ClientesFSid').addClass('current');

            $('div#socios_animacion').removeClass('animated fadeIn');
            $('div#areaTecnica').addClass('animated fadeIn');
        } 
        
        if ($('.EventosFSclass').offset().top < top) {
            $('li').removeClass('current');
            $('li#EventosFSid').addClass('current');

            $('div#areaTecnica').removeClass('animated fadeIn');
            $('.tablaEventos').addClass('animated fadeIn');
        }

        if ($('.ContactoFSclass').offset().top < top) {
            $('li').removeClass('current');
            $('li#ContactoFSid').addClass('current');

            $('.tablaEventos').removeClass('animated fadeIn');
        }
    }
    }, 100);


    var ano = (new Date).getFullYear();
    $("#Año").text( ano );

})
