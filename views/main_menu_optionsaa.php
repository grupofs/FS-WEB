<?php
if(basename(__FILE__) == 'index.php' || basename(__FILE__) == '') { 
    $base_origen="";
} else { 
    $base_origen="/";
}
?>
<div class="header-content">

                <div class="row">

                    <div class="col-lg-3 col-md-12 col-12 logo-column">

                        <figure class="logo-box">

                            <a href="<?php echo $base_origen; ?>#"><img src="images/FS/logoFS.png" alt="GrupoFS Logo"></a>

                        </figure>

                    </div>

                    <div class="col-lg-9 col-md-12 col-12 menu-column">

                        <div class="menu-area">

                            <nav class="main-menu navbar-expand-lg">

                                <div class="navbar-header">

                                    <!-- Toggle Button -->      

                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    </button>

                                </div>

                                <div class="navbar-collapse collapse clearfix">

                                    <ul class="navigation clearfix" id="menu_nav">

                                        <li id="InicioFSid" class="current"><a href="<?php echo $base_origen; ?>#">INICIO</a></li>

                                        <li id="NosotrosFSid"class="dropdown"><a href="<?php echo $base_origen; ?>#NosotrosFS">NOSOTROS</a>

                                            <ul>

                                                <li id="btnSomosBarra"><a href="<?php echo $base_origen; ?>#details">¿Quienes Somos?</a></li>

                                                <li id="btnMisionBarra"><a href="<?php echo $base_origen; ?>#review">Mision</a></li>

                                                <li id="btnVisionBarra"><a href="<?php echo $base_origen; ?>#review1">Vision</a></li>

                                            </ul>

                                        </li>

                                        <li id="ServiciosFSid"><a href="<?php echo $base_origen; ?>#ServiciosFS">SERVICIOS</a>

                                            <!--<ul>

                                                <li><a href="#AreaTecnica">Área Técnica</a></li>

                                                <li><a href="#AsuntosRegulatorios">Asuntos Regulatorios</a></li>

                                                <li><a href="#ProcesosTermicos">Procesos Térmicos</a></li>

                                            </ul>--> 

                                        </li>

                                        <li id="ClientesFSid" class="dropdown"><a href="<?php echo $base_origen; ?>#ClientesFS">CLIENTES</a>

                                            <ul>

                                                <li><a href="<?php echo $base_origen; ?>#Testimonios">Testimonios</a></li>

                                                <li id="btnAreaTecnica"><a href="<?php echo $base_origen; ?>#ClientesFS">Área Técnica</a></li>

                                                <li id="btnAsuntos"><a href="<?php echo $base_origen; ?>#ClientesFS">Asuntos Regulatorios</a></li>

                                                <li id="btnProcesosTermicos"><a href="<?php echo $base_origen; ?>#ClientesFS">Procesos Térmicos</a></li>

                                            </ul>

                                        </li>  

                                        <li id="SociosFSid"><a href="<?php echo $base_origen; ?>#SociosFS">socios</a></li>   

                                        <li id="EventosFSid"><a href="<?php echo $base_origen; ?>#EventosFS">eventos</a></li>   

                                        <li id="ContactoFSid"><a href="<?php echo $base_origen; ?>#ContactoFS">Contacto</a></li>   

                                    </ul>

                                </div>

                            </nav>

                        </div>

                    </div>

                </div>

            </div>