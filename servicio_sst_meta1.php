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
            <div class="volver_principal"><i class="fa fa-chevron-left"></i> Volver</div> 
            <div class="row items-container clearfix bg_servicios" style="padding:24px">
                <div class="col-lg-6 col-md-12 text-left">
                    <img src="./images/FS/serv12_1.png" class="servicios_detalle" style="max-width:100%">
                </div>
                <div class="col-lg-6 col-md-12 text-center" style="position:relative">
                    <p class="parrafo_serv" style="text-align:justify">
                    Nuestros servicios de consultoría lo llevan a cumplir de manera efectiva con los requisitos establecidos en la normativa nacional en materia de seguridad y salud en el trabajo (Ley 29783 y su reglamento y otras normas aplicables) de forma que se cuente con todos los mecanismos necesarios para salva- guardar la seguridad y salud de sus trabajadores, además de evitar multas o sanciones que afecten la imagen la empresa.
                    <br><br>
                    Entre otros beneficios del contar un sistema de SST tenemos: Contribuye a la reducción en la    rotación del personal, dando confianza y bienestar a sus colaboradores al mostrarse como una    compañía que se preocupa por sus condiciones de trabajo; Mejora la imagen de su compañía,    fortalece la credibilidad ante sus clientes, porque la organización sufrirá menos incidentes por lesiones y Mejora los procesos de la organización gracias a la participación de sus colaboradores, esto genera ahorros importantes en materia de seguridad y salud en el trabajo,
                    <br><br>
                    Diseñamos e implementamos el sistema de Seguridad y Salud en el Trabajo bajo el ciclo de calidad PHVA y cumplimiento de los estándares mínimos de las normativas aplicables según su sector y   actividades.

                    </p>
                </div>
                <div class="col-lg-12 col-md-12 text-left">
                    <div style='font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px; margin-bottom:15px'>Metodología del trabajo</div>
                </div>
                <!-- <div class="col-lg-12 col-md-12 text-left">
                    <img src="./images/FS/serv12_4.png" style="max-width:100%; margin-bottom: 30px;">
                </div> -->
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="row cuadros_prog cuad5">
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Se hace una evaluación de los procedimientos que se están llevando a cabo</div></div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Se establece un plan de acción, para aquellos que se requiera mejorar o implementar</div></div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Se diseñan, ejecutan y difunden todas las actividades necesarias para la implementación o actualización del sistema</div></div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Por medio de auditorías, medimos resultados</div></div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Apoyamos en la implementación y toma de medidas y acciones de mejora</div></div>
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
                                El staff de consultores tiene competencia en la implementación de están- dares internacionales reconocidos por la Organización Internacional de Normalización (ISO), lo que garantiza que se recojan las mejores prácticas y enfoques, de tal forma que nuestros clientes puedan afrontar de manera exitosa las auditorias de homologación o certificación o de fiscalización.
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
                                Contamos con auditores autorizados para la evaluación periódica del Sistema de gestión de seguridad y salud en el trabajo, aprobada mediante DS N°014-2013-TR.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="./images/icons/8.png" style="width:52px;margin-right: 15px;">
                            </td>
                            <td style="font-weight: 600; text-align: left;">
                                Soporte técnico y legal en temas relacionados al servicio.
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