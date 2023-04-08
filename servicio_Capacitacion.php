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
          <?php include_once 'views/main_menu_options.php'; ?>
        </div>
        <!--Sticky Header-->
        <div class="sticky-header">
          <?php include_once 'views/main_menu_options_sticky.php'; ?>
        </div>
        <!--End Sticky Header-->
    </header>
    <!-- End Main Header -->
    
    <section class="destin-details ServiciosFSclass unique_page" id="RegistrosAutorizacionesCertificaciones" style="background-image: url(images/fancybox/blank.gif);">
        <div class="container">
            <div class="volver_principal"><i class="fa fa-chevron-left"></i> Volver</div> 
            <div class="row items-container clearfix bg_servicios" style="padding:24px">
                <div class="col-lg-6 col-md-12 text-left">
                    <img src="./images/FS/serv10_1.jpg" class="servicios_detalle" style="max-width:100%">
                </div>
                <div class="col-lg-6 col-md-12 text-center" style="position:relative">
                    <p class="parrafo_serv">
                        Es importante que su personal conozca, entienda y se mantenga actualizado en temas normativos, tecnológicos, científicos, entre otros temas de interés, para lo cual, desarrollamos sesiones de aprendizaje, presenciales o virtuales, para un determinado público objetivo.
                    </p>
                </div>
               
                <div class="col-lg-12 col-md-12 text-left">
                    <div style='font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px; margin-bottom:15px'>Metodología del trabajo</div>
                </div>

                <div class="col-lg-12 col-md-12 text-center">
                    <div class="row cuadros_prog cuad5">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6"><div>Reunión previa con el cliente para definir contenido</div></div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6"><div>Elaboración de contenidos técnicos didácticos y personalizados</div></div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6"><div>Exposición del tema, presencial o virtual</div></div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6"><div>Evaluación de la eficacia</div></div>
                    </div>
                </div>


                <div class="col-lg-6 text-left">
                    <div style='font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px'>Valor agregado</div>
                    <table class="tabla_serv_icons">
                        <tr>
                            <td><img src="./images/icons/17.png" style="width:52px;margin-right: 15px;"></td>
                            <td style="font-weight: 600;">Nuestros tutores tienen experiencia en la implementación  de estándares internacionales reconocidos por la 
                        GFIS, ISO, AIB International, YUM, HACCP, entre otros, lo que garantiza que se recojan las mejores prácticas y enfoques en la elaboración de nuestros contenidos técnicos.</td>
                        </tr>
                        <tr>
                            <td><img src="./images/icons/12.png" style="width:52px;margin-right: 15px;"></td>
                            <td style="font-weight: 600;">Nuestros cursos y seminarios se adaptan al personal objetivo, sea este, gerencial, técnico u operario.</td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-6 text-left">
                    <div style='font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px'>Producto del servicio</div>
                    <!-- <img src="./images/FS/serv10_4.png" class="" style="max-width:100%"> -->
                    <table class="tabla_serv_icons">
                        <tr>
                            <td><img src="./images/icons/18.png" style="width:52px;margin-right: 15px;"></td>
                            <td style="font-weight: 600;">
                                Personal capacitado, preparado para mantener su Sistema / Norma y responder ante auditorias o inspecciones legales o reglamentarias.
                            </td>
                        </tr>
                        <tr>
                            <td><img src="./images/icons/15.png" style="width:52px;margin-right: 15px;"></td>
                            <td style="font-weight: 600;">
                                Certificados electrónicos a nombre de GRUPO FS por participante.
                            </td>
                        </tr>
                    </table>

                    
                </div>
                
            </div>
        </div>
    </section>


<?php include_once 'views/formulario_servicios.php'; ?>


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
    <script src="js/script.js?v=4"></script>
    <!-- WHATSAPP -->
    <script src="./js/whatsapp.js"></script>
    <!-- LAZY -->
    <script src="./js/lazy.js"></script>
</body><!-- End of .page_wrapper -->

</html>