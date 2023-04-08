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
    
    <section class="destin-details ServiciosFSclass unique_page" style="background-image: url(images/fancybox/blank.gif);">
        <div class="container">
            <div class="volver_principal"><i class="fa fa-chevron-left"></i> <?php echo $txt_volver; ?></div> 
            <div class="row items-container clearfix bg_servicios" style="padding:24px">
                <div class="col-lg-6 col-md-12 text-left">
                    <h2 style="margin-bottom:30px">SPINAK Consulting</h2>
                    <p style="font-size: 15px;font-weight: 600;color:#888888">
                    La empresa Spinak Consulting provee servicios especializados de consultoría y capacitación en inocuidad alimentaria en la industria de alimentos enlatados y en la 
                    industria de procesamiento y envasado aséptico. El dueño y director, Stephen H. Spinak tiene más de 40 años de experiencia en la industria cárnica con el US FDA 
                    (Agencia de Alimentos y Drogas de los EEUU), el USDA (Departamento de Agricultura de los EEUU) y con asociaciones líderes en el sector de alimentos en conserva. 
                    Por cerca de 15 años, se encargó en la FDA de la División de Alimentos en Conserva de Baja Acidez y Acidificados con injerencia en EEUU y a nivel internacional, 
                    convirtiéndolo en un experto en el procesamiento térmico de estos alimentos.
                    <br><br>
                    Desde que la empresa se constituyó en el 2006 se han dictado más de 100 cursos de 
                    capacitación fuera de los EEUU para la industria de alimentos en conserva y las agencias de gobierno encargadas de la inocuidad alimentaria. Spinak Consulting brinda 
                    asistencia a las empresas para que desarrollen e implementen de manera inocua, nuevas tecnologías diseñadas para el procesamiento y envasado aséptico de alimentos. 

                    <br><br>
                    Desde sus inicios como empresa, Spinak Consulting, hizo una alianza con Grupo FS para brindar de manera conjunta servicios especializados a la Industria Aséptica en 
                    Latino América, con el fin de ser un soporte técnico para el sector. 
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 text-center lista_p_servic" style="position:relative">
                    <img src="./images/img_spinak_consulting.png" class="servicios_detalle" style="max-width:100%; margin-bottom:10px">

                    <p style="font-size: 15px;font-weight: 600;color:#888888">
                    
                    Servicios para la Industria Aséptica.<br>
                    </p>
                    <ul style="text-align:left;">
                        <li>Estudios de distribución de temperatura para tanques asépticos. </li>
                        <li>Auditorias completas de sistemas de procesamiento y envasado aséptico. </li>
                        <li>Cursos de Capacitación “in house” de procesamiento y envasado aséptico.</li> 
                        <li>Evaluación del tubo de retención y proceso de esterilización.</li>
                        <li>Auditorias de cumplimiento del sistema de esterilización, llenado y envasado del producto.</li>
                        <li>Evaluación de las desviaciones del proceso.</li>
                        <li>Evaluación y selección de proveedores de equipos.</li>
                        <li>Servicios de validación.</li>
                        <li>Investigación de deterioro.</li>
                        <li>Asistencia en la Detención de importaciones por parte del US FDA.</li>
                        <li>Asistencia con los Informes de inspección de la US FDA/USDA.</li>
                        <li>Implementación de nuevas tecnologías y aceptación regulatoria. </li>
                    </ul>
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