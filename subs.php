<?php  include_once 'bd/conexion.php'; ?>

<!DOCTYPE html>
<html lang="es-PE">
<head>
    <?php include_once 'views/header.php'; ?>
    <style>
        .titulo1{margin-bottom:10px; padding:20px;color:#fff; background:#2f3980; font-size:28px !important; font-weight:bold; line-height:normal;left: -74px; padding-left:74px; text-transform:inherit}
        .titulo2{margin-bottom:10px; padding:15px;color:#2f3980; font-size:28px; line-height:28px !important; font-weight:bold; padding-left:0; text-transform:inherit}
        .subtitulo1{margin-bottom:15px; font-weight:normal; color:#777 !important; font-size:20px !important}
        .volver_principal{
    margin-top: 100px;
    display: block;
}
    </style>
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

            <?php
                $href = $_GET["l"];
                $href_s = $_GET["s"];

                if($href_s=="serv8_2"){
                    $link_regreso="subs.php?s=servicio_RegistrosAutorizacionesCertificaciones&l=serv8_2";
                }else{
                    $link_regreso='./'.$href_s.'.php';
                }
                
                foreach(${$href} as $val){
                    echo '
                    <a class="volver_principal" href="'.$link_regreso.'"><i class="fa fa-chevron-left"></i> '.$txt_volver.'</a> 
                    <div class="row items-container clearfix bg_servicios" style="padding:24px">
                        
                        <div class="col-lg-6 col-md-12 text-left lista_p_servic" style="position:relative">';
                            
                    if(trim($val["titulo1"])!==""){echo '<h1 class="titulo1">'.$val["titulo1"].'</h1>';}
                    
                    echo '  <h2 class="titulo2">'.$val["titulo2"].'</h2>
                            <h3 class="subtitulo1">'.$val["subtitulo1"].'</h3>
                            <p>
                            '.$val["texto"].'
                            </p>
                        </div>

                        <div class="col-lg-6 col-md-12 text-left">
                            <img src="./images/FS/'.$val["imagen"].'" class="servicios_detalle" style="max-width:100%; margin-top:80px">
                        </div>
                    
                    ';
                }

                if(isset(${$href."_col0"})){
                    echo${$href."_col0"};
                }

                

                echo '<div class="col-lg-6 col-md-12 text-left">';
                if(isset(${$href."_col1_0"})){
                    echo${$href."_col1_0"};
                }
                echo '<table class="tabla_serv_icons">';
                foreach(${$href."_col1"} as $val1){
                    echo '
                    <tr>
                        <td>';
                        if($val1["icon"]=="transparente.png"){
                            echo'<img src="./images/icons/'.$val1["icon"].'" style="width:12px;margin-right: 15px;">';
                        }else{
                            echo'<img src="./images/icons/'.$val1["icon"].'" style="width:52px;margin-right: 15px;">';    
                        }
                        echo'
                        </td>
                        <td style="font-weight: 600;">'.$val1["text"].'</td>
                    </tr>';
                }
                echo '</table></div>';

                

                echo '<div class="col-lg-6 col-md-12 text-left">';
                if(isset(${$href."_col3_0"})){
                    echo${$href."_col3_0"};
                }
                echo '<table class="tabla_serv_icons">';
                foreach(${$href."_col3"} as $val3){
                    echo '
                    <tr>
                        <td>';
                        if($val3["icon"]=="transparente.png"){
                            echo'<img src="./images/icons/'.$val3["icon"].'" style="width:12px;margin-right: 15px;">';
                        }else{
                            echo'<img src="./images/icons/'.$val3["icon"].'" style="width:52px;margin-right: 15px;">';    
                        }
                        echo'
                        </td>
                        <td style="font-weight: 600;">'.$val3["text"].'</td>
                    </tr>';
                }
                echo '</table></div>';


                


                if(isset(${$href."_col4"})){
                    foreach(${$href."_col4"} as $val4){
                        echo $val4;
                    }
                }


                echo '</div>';

                //<b>Asi mismo le brindamos:</b>
            ?>

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