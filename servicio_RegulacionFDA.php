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

    <section class="destin-details ServiciosFSclass unique_page" id="RegulacionFDA" style="background-image: url(images/fancybox/blank.gif);">
        <div class="container">
            <div class="volver_principal" style="display:block"><i class="fa fa-chevron-left"></i> <?php echo $txt_volver; ?></div> 
            <div class="row items-container clearfix bg_servicios" style="padding:24px">
                <div class="col-lg-6 col-md-12 text-left">
                <div class="titulo_servi1 titulo_principal text-left"><?php echo $titulo_servicioRegulacionFDA; ?></div>
                    <img src="./images/FS/serv5_1.jpg?v=2" class="servicios_detalle" style="max-width:100%">
                </div>
                <div class="col-lg-6 col-md-12 text-left lista_p_servic" style="position:relative">
                    <p class="parrafo_serv">
                        <?php echo $regulacion_fda_1; ?>
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 text-left">
                <div class="titulo_servi1"><?php echo $metodologia_trabajo; ?></div>
                </div>
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="row cuadros_prog cuad5">
                        <?php echo $regulacion_fda_2; ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 text-left">
                    <div class="col-lg-12 col-md-12 text-left">
                    <div class="titulo_servi1"><?php echo $valor_agregado; ?></div>
                    </div>
                    <table class="tabla_serv_icons">
                        <?php echo $regulacion_fda_3; ?>
                        
                    </table>
                </div>
                <div class="col-lg-6 col-md-12 text-left">
                    <img src="./images/FS/serv5_4_titulo.jpg" class="servicios_detalle" style="max-width:100%; visibility: hidden;margin-bottom:0">
                    <table class="tabla_serv_icons">
                        <?php echo $regulacion_fda_4; ?>
                    </table>
                </div>

                <?php
                $servicio=pathinfo(__FILE__, PATHINFO_FILENAME);
                $subserv[] = array("portada"=>'serv5_6.jpg', "link"=>'serv5_1');
                $subserv[] = array("portada"=>'serv5_7.jpg', "link"=>'serv5_2');
                $subserv[] = array("portada"=>'serv5_8.jpg', "link"=>'serv5_3');
                $subserv[] = array("portada"=>'serv5_9.jpg', "link"=>'serv5_4');
                $subserv[] = array("portada"=>'serv5_10.jpg', "link"=>'serv5_5');
                $subserv[] = array("portada"=>'serv5_11.jpg', "link"=>'serv5_6');
                $subserv[] = array("portada"=>'serv5_12.jpg', "link"=>'serv5_7');
                $subserv[] = array("portada"=>'serv5_13.jpg', "link"=>'serv5_8');
                $subserv[] = array("portada"=>'serv5_14.jpg', "link"=>'serv5_9');
                $lista_subservicios="";
                foreach($subserv as $pos){
                    $lista_subservicios.= '
                    <div class="col-lg-4 col-md-6 text-center">
                        <a href="./subs.php?s='.$servicio.'&l='.$pos['link'].'"><img src="./images/FS/'.$pos['portada'].'" class="servicios_detalle" style="max-width: 315px !important;"></a>
                    </div>
                    ';
                }
                echo $lista_subservicios;
                ?>
                
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