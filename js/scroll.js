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
            $('div#quienes_somos').addClass('animated flipInX')
           
        }

        if ($('.ServiciosFSclass').offset().top < top) {
            $('li').removeClass('current');
            $('li#ServiciosFSid').addClass('current');

            $('div#quienes_somos').removeClass('animated flipInX') //QUITAMOS LA CLASE ANTERIOR AL SUBIR
         
        }
                
        if ($('.SociosFSclass').offset().top < top) {
            $('li').removeClass('current');
            $('li#SociosFSid').addClass('current');

            $('div#socios_animacion').addClass('animated fadeInLeftBig')
        }

        if ($('.ClientesFSclass').offset().top < top) {
            $('li').removeClass('current');
            $('li#ClientesFSid').addClass('current');

            $('div#socios_animacion').removeClass('animated fadeInLeftBig');
            $('div#areaTecnica').addClass('animated flipInX');
        } 
        
        if ($('.EventosFSclass').offset().top < top) {
            $('li').removeClass('current');
            $('li#EventosFSid').addClass('current');

            $('div#areaTecnica').removeClass('animated flipInX');
            $('.tablaEventos').addClass('animated flipInX');
        }

        if ($('.ContactoFSclass').offset().top < top) {
            $('li').removeClass('current');
            $('li#ContactoFSid').addClass('current');

            $('.tablaEventos').removeClass('animated flipInX');
        }
    }
    }, 100);
})
