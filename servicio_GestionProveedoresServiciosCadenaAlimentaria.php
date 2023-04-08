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
                    <img src="./images/FS/serv11_1.png" class="servicios_detalle" style="max-width:100%">
                    <!-- <img src="./images/FS/serv11_2.png" class="servicios_detalle" style="max-width:100%"> -->
                    <div style='font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px; margin-bottom:15px'>En este sentido, le damos soporte técnico y legal para:</div>
                </div>
                <div class="col-lg-6 col-md-12 text-center" style="position:relative">
                    <p class="parrafo_serv">
                        Como parte de los procedimientos de selección, aprobación y seguimiento de proveedores, los sistemas de gestión de calidad e inocuidad         alimentaria deben garantizar la inocuidad, calidad, legalidad y autenticidad de las materias primas, envases, procesos subcontratados y servicios que adquieren o contratan para el procesamiento, fabricación, envasado, almacenamiento, transporte y distribución de sus productos.
                    </p>
                </div>
                <div class="col-lg-6 text-left">

                    <table class="tabla_serv_icons">
                        <tr>
                            <td><img src="./images/icons/12.png" style="width:52px;margin-right: 15px;"></td>
                            <td style="font-weight: 600;">Planificar y diseñar su programa de control de proveedores / cadena de suministros.</td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-6 text-left">
                    <table class="tabla_serv_icons">
                        <tr>
                            <td><img src="./images/icons/4.png" style="width:52px;margin-right: 15px;"></td>
                            <td style="font-weight: 600;">
                                Evaluar la conformidad de las medidas de control o estrategias de mitigación aplicadas por los proveedores para controlar los peligros que puedan a afectar la inocuidad, calidad, legalidad o autenticidad de los productos proce- sados.

                            </td>
                        </tr>
                    </table>
                </div>


                <div class="col-lg-12 col-md-12 text-left">
                    <div style='font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px; margin-bottom:15px'>Metodología del trabajo</div>
                </div>

                <!-- <img src="./images/FS/serv11_4.png" style="max-width:100%; margin-bottom: 30px;"> -->
                <div class="col-lg-12 col-md-12 text-center" style="margin-bottom:20px">
                    <div class="row cuadros_prog cuad5">
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Elaboación del programa anual de auditoría y herramientas (check list)</div></div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Programación de auditorias</div></div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Realización de auditorías</div></div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Elaboración de informes completos: conformidades y no conformidades</div></div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Seguimiento de acciones correctivas</div></div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 text-left">
                    <div style='font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px; margin-bottom:15px'>Valor agregado</div>
                    <table class="tabla_serv_icons">
                        <tr>
                            <td><img src="./images/icons/2.png" style="width:52px;margin-right: 15px;"></td>
                            <td style="font-weight: 600;">
                                Uso de una plataforma “on line” para visualizar resultados y avances del programa por las partes interesadas.
                            </td>
                        </tr>
                        <tr>
                            <td><img src="./images/icons/4.png" style="width:52px;margin-right: 15px;"></td>
                            <td style="font-weight: 600;">
                                Reuniones periódicas con los clientes para revisión de resultados y mejoras al programa.
                            </td>
                        </tr>
                        <tr>
                            <td><img src="./images/icons/11.png" style="width:52px;margin-right: 15px;"></td>
                            <td style="font-weight: 600;">
                                Versatilidad y actualización de la plata- forma para mayor utilidad y beneficio del cliente.
                            </td>
                        </tr>
                        <tr>
                            <td><img src="./images/icons/14.png" style="width:52px;margin-right: 15px;"></td>
                            <td style="font-weight: 600;">
                                Aplicación de indicadores de gestión y evaluación de tendencias.
                            </td>
                        </tr>
                    </table>

                </div>

                <div class="col-lg-6 col-md-12 text-left">
                    <div style='font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px; margin-bottom:15px'>Producto del servicio</div>
                    <table class="tabla_serv_icons">
                        <tr>
                            <td><img src="./images/icons/18.png" style="width:52px;margin-right: 15px;"></td>
                            <td style="font-weight: 600;">
                                Programa anual de auditorías.
                            </td>
                        </tr>
                        <tr>
                            <td><img src="./images/icons/16.png" style="width:52px;margin-right: 15px;"></td>
                            <td style="font-weight: 600;">
                                Informes de auditoría por cada proveedor.
                            </td>
                        </tr>
                        <tr>
                            <td><img src="./images/icons/8.png" style="width:52px;margin-right: 15px;"></td>
                            <td style="font-weight: 600;">
                                Resultados de indicadores.
                            </td>
                        </tr>
                        <tr>
                            <td><img src="./images/icons/17.png" style="width:52px;margin-right: 15px;"></td>
                            <td style="font-weight: 600;">
                                Consultas y análisis de tendencias.
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