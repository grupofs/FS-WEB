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
    
    <section class="destin-details ServiciosFSclass unique_page" id="SistemasIntegradosGestion" style="background-image: url(images/fancybox/blank.gif);">
        <div class="container">
            <div class="volver_principal"><i class="fa fa-chevron-left"></i> Volver</div> 
            <div class="row items-container clearfix bg_servicios" style="padding:24px">
                <div class="col-lg-6 col-md-12 text-left">
                    <img src="./images/FS/serv13_1.png" class="servicios_detalle" style="max-width:100%">
                </div>
                <div class="col-lg-6 col-md-12 text-center" style="position:relative">
                    <p class="parrafo_serv">
                        SMETA son la siglas de Sedex Members Ethical Trade Audit y es una de las auditorías éticas más requeridas a nivel comercial.
                        Dentro de su estructura completa las mejores prácticas en el campo de la responsabilidad social empresarial.
                        El concepto utiliza el código de la Iniciativa de Comercio Ético (ETI, por sus letras en inglés) y la legislación local
                        como herramienta de medición. Incluye cuatro módulos: Salud y seguridad; Estándares de trabajo; Medio ambiente (opcional)   ; 
                        Ética empresarial (opcional).
                    </p>
                </div>
                <div class="col-lg-12 col-md-12 text-left">
                    <div style='font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px; margin-bottom:15px'>Metodología del trabajo</div>
                </div>
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="row cuadros_prog">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6"><div>Auditoría de diagnóstico</div></div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6"><div>Diseño e implementación del sistema META</div></div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6"><div>Auditoría interna</div></div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6"><div>Capacitación</div></div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 text-left">
                    <div style='font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px; margin-bottom:5px; margin-top:20px'>Valor agregado</div>
                </div>
                <div class="col-lg-6 col-md-12 text-center">
                    <table class="tabla_serv_icons">
                        <tr>
                            <td>
                                <img src="./images/icons/1.png" style="width:52px;margin-right: 15px;">
                            </td>
                            <td style="font-weight: 600; text-align: left;">
                            El staff de consultores tiene competencia en la implementación de estándares internacionales reconocidos por la Organización
Internacional de Normalización (ISO), lo que garantiza que se recojan las mejores prácticas y enfoques, de tal forma que nuestros
clientes puedan afrontar de manera exitosa las auditorias de homologación.
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-6 col-md-12 text-center">
                    <table class="tabla_serv_icons">
                        <tr>
                            <td>
                                <img src="./images/icons/18.png" style="width:52px;margin-right: 15px;">
                            </td>
                            <td style="font-weight: 600; text-align: left;">
                                Soporte técnico y legal en temas relacionados al servicio.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="./images/icons/8.png" style="width:52px;margin-right: 15px;">
                            </td>
                            <td style="font-weight: 600; text-align: left;">
                                Asistencia técnica duante el proceso de homologación y levantamiento de no conformidades que conlleve a aprobar de manera exitosa la auditoria externa.
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