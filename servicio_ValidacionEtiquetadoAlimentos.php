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
    
    <section class="destin-details ServiciosFSclass unique_page" id="SistemasIntegradosGestion" style="background-image: url(images/fancybox/blank.gif);">
        <div class="container">
            <div class="volver_principal"><i class="fa fa-chevron-left"></i> <?php echo $txt_volver; ?></div> 
            <div class="row items-container clearfix bg_servicios" style="padding:24px">
                <div class="col-lg-6 col-md-12 text-left">
                    <img src="./images/FS/serv9_1.jpg" class="servicios_detalle" style="max-width:100%">
                </div>
                <div class="col-lg-6 col-md-12 text-center">
                    <p style="font-weight: 600;color:#888888; margin:auto">
                        <?php echo $ValidacionEtiquetadoAlimentos_1; ?>
                    </p>
                    <img src="./images/FS/serv9_2.jpg?v=2" class="servicios_detalle" style="max-width:100%">
                </div>
                <div class="col-lg-12 col-md-12 text-left">
                    <div class="titulo_servi1"><?php echo $metodologia_trabajo; ?></div>
                </div>
                <div class="col-lg-12 text-left">
                    <div style="font-weight:bold; margin-bottom:15px;padding-left: 40px;padding-right: 40px;">Tabla nutricional o de suplemento</div>
                </div>
                <div class="col-lg-12 col-md-12 text-center">                    
                    <div class="row cuadros_prog" style="padding-left: 40px;padding-right: 40px;">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6"><div>Revisión de resultados analíticos y elaboración del perfil nutricional según tamaño de porción, cálculo de los porcentajes de valores diarios</div></div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6"><div>Diseño de la tabla nutricional o tabla de suplemento de acuerdo a la normativa aplicable (FDA, CC.EE, etc)</div></div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-6"><div>Propuesta de alegaciones de contenido nutricional. Ej: "Buena fuente de hierro, sin azúcar añadida", "bajo en grasa saturada", etc.</div></div>
                    </div>
                </div>
                <div class="col-lg-12 text-left">
                    <div style="font-weight:bold; margin-top:15px; margin-bottom:15px;padding-left: 40px;padding-right: 40px;">Validación de artes</div>
                </div>
                <div class="col-lg-12 col-md-12 text-center">                    
                    <div class="row cuadros_prog" style="padding-left: 40px;padding-right: 40px;">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6"><div>Validación del nombre del producto según normas de identidad</div></div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6"><div>Verificación de fórmula e ingredientes permitidos</div></div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6"><div>Revisión integral de las artes y emisión de informe técnico con resultados</div></div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-6"><div>Segundo ciclo de revisión</div></div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 text-left">
                    <div class="titulo_servi1"><?php echo $txt_beneficios; ?></div>
                </div>
                <div class="col-lg-6 col-md-12 text-left">
                </div>
                    <?php echo $ValidacionEtiquetadoAlimentos_5; ?>


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