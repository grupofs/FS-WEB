<?php  include_once 'bd/conexion.php'; ?>

<!DOCTYPE html>
<html lang="es-PE">
<head>
    <?php include_once 'views/header.php'; ?>
</head>

<!-- page wrapper -->
<body class="boxed_wrapper" íd="CuerpoWeb">
    <!-- .preloader -->
        <!--     <div class="preloader"></div> -->
    <!-- /.preloader -->
     <script>
        window.onload = function() {
          document.getElementById('loadh').className = 'fixed-header';
        };     
     </script>
    <!-- Main Header -->
    <header id="loadh" class="main-header fixed-header">
        <div class="container">
          <?php /*include_once 'views/main_menu_options.php';*/ ?>
        </div>
        <!--Sticky Header-->
        <div class="sticky-header">
          <?php include_once 'views/main_menu_options_sticky.php'; ?>
        </div>
        <!--End Sticky Header-->
    </header>
    <!-- End Main Header -->

    <!-- Main slider -->
    <section class="main-slider" id="inicio">
      <?php include_once 'views/main_slider.php'; ?>
    </section>
    <!-- main-slider end -->
    <section class="sec-pad-espacio centred NosotrosFSclass" style="background-color: white;" ></section> <!-- Espaciado -->

    <!-- INICIO MODULO NOSOTROS -->
    <section class="destin-details NosotrosFSclass" id="NosotrosFS">
      <?php include_once 'views/menu_nosotros.php'; ?>
    </section>
    <!-- FIN MODULO NOSOTROS -->

    
    <section class="sec-pad-espacio centred NosotrosFSclass" style="background-color: white;" ></section> <!-- Espaciado -->

    <!-- INICIO MODULO SERVICIOS -->
    <section class="destin-details ServiciosFSclass" id="ServiciosFS">
      <?php include_once 'views/menu_servicios.php'; ?>
    </section>
    <!-- FIN MODULO SERVICIOS -->
    

   
    <section class="sec-pad-espacio centred ServiciosFSclass" style="background-color: white;" id=" "></section> <!-- Espaciado -->

    <!--<section class="testimonial-section-service gallery-section sec-pad ServiciosFSclass lazy" id="AreaTecnica" data-original="images/FS/grupofs-6tecnica.jpg" style="background-image: url(images/fancybox/blank.gif);"> -->
      <?php /*include_once 'views/menu_servicios_area_tecnica.php';*/ ?>
    <!--</section>-->

    <section class="sec-pad-espacio centred" style="background-color: white;"></section> <!-- Espaciado -->

    <!--<section class="testimonial-section-service gallery-section sec-pad ServiciosFSclass lazy" id="AsuntosRegulatorios" data-original="images/FS/grupofs-7regulatorios.jpg" style="background-image: url(images/fancybox/blank.gif);">-->
      <?php /*include_once 'views/menu_servicios_asuntos_regulatorios.php';*/ ?>
    <!--</section>-->
    
    <section class="sec-pad-espacio centred" style="background-color: white;" id=" "></section><!-- Espaciado -->

    <!-- <section class="testimonial-section-service gallery-section sec-pad ServiciosFSclass lazy" id="ProcesosTermicos" data-original="images/FS/validacion_termica_alimentos-estudio_f0_conservas.jpg" style="background-image: url(images/fancybox/blank.gif);"> -->
      <?php /*include_once 'views/menu_servicios_procesos_termicos.php';*/ ?>
    <!-- </section> -->



    <!-- Lista de Servicios -->
    <?php include_once 'views/servicios_1.php'; ?>
    

    <section class="sec-pad-espacio centred SociosFSclass" style="background-color: white;" id="SociosFS"></section><!-- Espaciado -->

    <!-- INICIO MODULO SOCIOS -->
    <section class="testimonial-section sec-pad centred SociosFSclass lazy" id="SociosFS" data-original="images/FS/grupofs-10socios.jpg" style="background-image: url(images/fancybox/blank.gif);">
      <?php include_once 'views/menu_socios.php'; ?>
    </section>
    <!-- FIN MODULO SOCIOS -->

    <!--<section class="sec-pad-espacio centred ClientesFSclass" style="background-color: white;" id="ClientesFS"></section> Espaciado -->
    
   <!-- INICIO MODULO CLIENTES  
    <section class="testimonial-section sec-pad centred ClientesFSclass lazy" id="tabClientes" data-original="images/FS/grupofs-9clientes.jpg" style="background-image: url(images/fancybox/blank.gif);">
      <#?php include_once 'views/menu_clientes.php'; ?>   
    </section>
      FIN MODULO CLIENTES -->

    <section class="sec-pad-espacio centred ClientesFSclass" style="background-color: white;" id="TestimoniosFS" ></section><!-- Espaciado -->

    <!-- INICIO MODULO CLIENTES_TESTIMONIOS -->
    <section class="testimonial-section sec-pad centred ClientesFSclass lazy" data-original="images/FS/grupofs-5-testimonios.jpg" style="background-image: url(images/fancybox/blank.gif);" >
      <?php include_once 'views/menu_cliente_testimonios.php'; ?>   
    </section>
    <!-- FIN DE TESTIMONIOS DE CLIENTES_TESTIMONIOS -->
   
    <section class="sec-pad-espacio centred EventosFSclass" style="background-color: white;" id="EventosFS"></section> <!-- Espaciado -->

    <!-- INICIO MODULO EVENTOS -->
    <section class="testimonial-section sec-pad centred EventosFSclass lazy" id="EventosFS" data-original="images/FS/grupofs-11eventos.jpg" style="background-image: url(images/fancybox/blank.gif);" >
      <?php include_once 'views/menu_eventos.php'; ?>
    </section>
    <!-- FIN MODULO EVENTOS -->

    <section class="sec-pad-espacio centred ContactoFSclass" style="background-color: white;" id="ContactoFS"></section> <!-- Espaciado -->

    <!-- INICIO MODULO CONTACTO -->
    <section class="contact-section sec-pad testimonial-section-service ContactoFSclass lazy" id="ContactoFS" data-original="images/FS/grupofs-12contacto.jpg" style="background-image: url(images/fancybox/blank.gif);"  >
      <?php include_once 'views/menu_contacto.php'; ?>
    </section>
    <!-- FIN MODULO CONTACTO -->

    <!-- main-footer -->
    <footer class="main-footer" style="background-color:#044372;">
      <?php include_once 'views/footer.php'; ?>
    </footer>
    <!-- main-footer end -->

    <!-- footer-bottom -->
    <div class="footer-bottom centred" >
        <div class="container">
            <div class="copyright">
                Copyright <strong id="Año"></strong> | Todos los Derechos Reservados | Grupo FS - Área de Sistemas
            </div>
        </div>
    </div>
    <!-- footer-bottom end -->
    
    <!-- INICIO Popups-->
    <?php include_once 'views/popups.php'; ?>
    <!-- FIN Popups-->

    <!-- INICIO Whatsapp-->
    <?php include_once 'views/modal_whatsapp.php'; ?>
    <!-- FIN Whatsapp-->
   
    <!--INICIO SCROLL-->
    <div class="scroll-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>
    <!--FIN SCROLL-->

    <!--jquery js -->
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbFmCIpwcwqR3WdaZFg9YO5cArtMjjxqs"></script>
    <script src="js/isotope.js"></script>
    <script src="js/gmaps.js"></script>
    <script src="js/map-helper.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/contacto.js"></script>
    <script src="js/jquery.lazyload.js"></script>
    <!-- main-js -->
    <script src="js/script.js?v=5"></script>
    <!-- WHATSAPP -->
    <script src="./js/whatsapp.js"></script>
    <!-- LAZY -->
    <script src="./js/lazy.js"></script>
</body><!-- End of .page_wrapper -->

</html>