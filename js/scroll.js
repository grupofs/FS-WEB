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

        }

        if ($('.ServiciosFSclass').offset().top < top) {
            $('li').removeClass('current');
            $('li#ServiciosFSid').addClass('current');
        }
                
        if ($('.SociosFSclass').offset().top < top) {
            $('li').removeClass('current');
            $('li#SociosFSid').addClass('current');
        }

        if ($('.ClientesFSclass').offset().top < top) {
            $('li').removeClass('current');
            $('li#ClientesFSid').addClass('current');
        } 
        
        if ($('.EventosFSclass').offset().top < top) {
            $('li').removeClass('current');
            $('li#EventosFSid').addClass('current');
        }

        if ($('.ContactoFSclass').offset().top < top) {
            $('li').removeClass('current');
            $('li#ContactoFSid').addClass('current');
        }
    }
    }, 100);
})
