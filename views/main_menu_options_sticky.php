<?php
if(basename(__FILE__) == 'index.php' || basename(__FILE__) == '') { 
    $base_origen="";
} else { 
    $base_origen="/";
}
?>
<div class="container">
  <div class="header-content">
    <div class="row">
        <div class="col-lg-2 col-md-12 col-12 logo-column">
            <figure class="small-logo-box img-responsive" style="margin: 18px 0;">
                <a href="<?php echo $base_origen; ?>#"><img src="images/FS/logoFS.png" alt="Logo Grupo Fs"></a>
            </figure>
        </div>

        <div class="col-lg-8 col-md-12 col-12 menu-column">
            <div class="menu-area">
                <nav class="main-menu navbar-expand-lg">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix" id="menu_nav">
                            <li id="InicioFSid" class="current"><a href="<?php echo $base_origen; ?>#inicio"><?php echo $header["inicio"]; ?></a></li>
                            <li id="NosotrosFSid" ><a href="<?php echo $base_origen; ?>#NosotrosFS"><?php echo $header["nosotros"]; ?></a> </li>
                            <li id="ServiciosFSid"><a href="<?php echo $base_origen; ?>#ServiciosFS"><?php echo $header["servicios"]; ?></a></li>
                            <li id="SociosFSid"><a href="<?php echo $base_origen; ?>#SociosFS"><?php echo $header["socios"]; ?></a></li>   
                            <li id="ClientesFSid"><a href="<?php echo $base_origen; ?>#TestimoniosFS"><?php echo $header["testimonios"]; ?></a></li>  
                            <li id="EventosFSid"><a href="<?php echo $base_origen; ?>#EventosFS"><?php echo $header["eventos"]; ?></a></li>   
                            <li id="ContactoFSid"><a href="<?php echo $base_origen; ?>#ContactoFS"><?php echo $header["contactenos"]; ?></a></li> 
                            <li id="CambiarIdioma" class="dropdown"><a href="javascript:void(0)"><img src="./images/spanglish.png" style="width:24px;"></a>
                                <ul>
                                    <li class="cambiar_idioma" id="idioma_esp"><a href="javascript:void(0)"><img src="./images/icon_spanish.png" style="width:24px;"> Español</a></li>
                                    <li class="cambiar_idioma" id="idioma_eng"><a href="javascript:void(0)"><img src="./images/icon_eeuu.png" style="width:24px;"> English</a></li>
                                </ul>
                            </li>     
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="col-lg-2 col-md-12 col-12 logo-column">
            <figure class="small-logo-box img-responsive" style="margin: 18px 0;">
                <a href="<?php echo $base_origen; ?>#"><img src="images/FS/logoFS2.jpg" alt="Logo Grupo Fs2"></a>
            </figure>
        </div>


    </div>
</div>
</div>