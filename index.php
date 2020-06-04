<?php 
    include_once 'bd/conexion.php';
   
?>

<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>GRUPO FS || INICIO</title>

<!-- Stylesheets -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<!-- page wrapper -->
<body class="boxed_wrapper" íd="CuerpoWeb">


    <!-- .preloader -->
    <div class="preloader">
    </div>
    <!-- /.preloader -->


    <!-- Main Header -->
    <header class="main-header">
        <div class="container">
            <div class="header-content">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 logo-column">
                        <figure class="logo-box">
                            <a href="#"><img src="images/FS/logoFS.png" alt=""></a>
                        </figure>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 menu-column">
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
                                        <li id="InicioFSid" class="current"><a href="#">INICIO</a></li>
                                        <li id="NosotrosFSid"class="dropdown"><a href="#NosotrosFS">NOSOTROS</a>
                                            <ul>
                                                <li id="btnSomosBarra"><a href="#details">¿Quienes Somos?</a></li>
                                                <li id="btnMisionBarra"><a href="#review">Mision</a></li>
                                                <li id="btnVisionBarra"><a href="#review1">Vision</a></li>
                                            </ul>
                                        </li>
                                        <li id="ServiciosFSid" class="dropdown"><a href="#">SERVICIOS</a>
                                            <ul>
                                                <li><a href="#AreaTecnica">Área Técnica</a></li>
                                                <li><a href="#AsuntosRegulatorios">Asuntos Regulatorios</a></li>
                                                <li><a href="#ProcesosTermicos">Procesos Térmicos</a></li>
                                            </ul>
                                        </li>
                                        <li id="ClientesFSid" class="dropdown"><a href="#ClientesFS">CLIENTES</a>
                                            <ul>
                                                <li><a href="#Testimonios">Testimonios</a></li>
                                                <li id="btnAreaTecnica"><a href="#ClientesFS">Área Técnica</a></li>
                                                <li id="btnAsuntos"><a href="#ClientesFS">Asuntos Regulatorios</a></li>
                                                <li id="btnProcesosTermicos"><a href="#ClientesFS">Procesos Térmicos</a></li>
                                            </ul>
                                        </li>  
                                        <li id="SociosFSid"><a href="#SociosFS">socios</a></li>   
                                        <li id="EventosFSid"><a href="#EventosFS">eventos</a></li>   
                                        <li id="ContactoFSid"><a href="#ContactoFS">Contacto</a></li>   
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="header-content">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 logo-column">
                            <figure class="small-logo-box img-responsive">
                                <a href="#"><img src="images/FS/logoFS.png" alt=""></a>
                            </figure>
                        </div>
                        <div class="col-lg-9 col-md-12 col-sm-12 menu-column">
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
                                            <li id="InicioFSid" class="current"><a href="#">INICIO</a></li>
                                            <li id="NosotrosFSid"class="dropdown"><a href="#NosotrosFS">NOSOTROS</a>
                                                <ul>
                                                    <li id="btnSomosBarra1"><a href="#details">¿Quienes Somos?</a></li>
                                                    <li id="btnMisionBarra1"><a href="#review">Mision</a></li>
                                                    <li id="btnVisionBarra1"><a href="#review1">Vision</a></li>
                                                </ul>
                                            </li>
                                            <li id="ServiciosFSid" class="dropdown"><a href="#">SERVICIOS</a>
                                                <ul>
                                                    <li><a href="#AreaTecnica">Área Técnica</a></li>
                                                    <li><a href="#AsuntosRegulatorios">Asuntos Regulatorios</a></li>
                                                    <li><a href="#ProcesosTermicos">Procesos Térmicos</a></li>
                                                </ul>
                                            </li>
                                            <li id="ClientesFSid" class="dropdown"><a href="#ClientesFS">CLIENTES</a>
                                                <ul>
                                                    <li><a href="#Testimonios">Testimonios</a></li>
                                                    <li id="btnAreaTecnica1"><a href="#ClientesFS">Área Técnica</a></li>
                                                    <li id="btnAsuntos1"><a href="#ClientesFS">Asuntos Regulatorios</a></li>
                                                    <li id="btnProcesosTermicos1"><a href="#ClientesFS">Procesos Térmicos</a></li>
                                                </ul>
                                            </li>  
                                            <li id="SociosFSid"><a href="#SociosFS">socios</a></li>   
                                            <li id="EventosFSid"><a href="#EventosFS">eventos</a></li>   
                                            <li id="ContactoFSid"><a href="#ContactoFS">Contacto</a></li>   
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Sticky Header-->
    </header>
    <!-- End Main Header -->


    <!-- Main slider -->
    <section class="main-slider">
        <div class="container-fluid">
            <ul class="main-slider-carousel owl-carousel owl-theme slide-nav">
                <li class="slider-wrapper">
                    <div class="image"><img src="images/FS/slider1.jpg" alt=""></div>
                    <div class="slider-caption">
                        <div class="container">
                        
                        </div>                             
                    </div>
                    <div class="slide-overlay"></div>
                </li>

                <li class="slider-wrapper">
                    <div class="image"><img src="images/FS/slider2.jpg" alt=""></div>
                    <div class="slider-caption">
                        <div class="container">
                         
                        </div>                            
                    </div>
                    <div class="slide-overlay"></div>
                </li>

                <li class="slider-wrapper">
                    <div class="image"><img src="images/FS/slider3.png" alt=""></div>
                    <div class="slider-caption">
                        <div class="container">
                         
                        </div>                            
                    </div>
                    <div class="slide-overlay"></div>
                </li>
            </ul>
        </div>
    </section>
    <!-- main-slider end -->



    <!-- NOSOTROS MODULO -->
    <section class="destin-details NosotrosFSclass" id="NosotrosFS">
        <div class="">
            <h2 class="sec-title centred">CONOCENOS MÁS</h2>
            <br>
            <!-- <div class="title-text centred">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,<br />sed quia consequuntur magni dolores eos qui ratione</div> -->
            <div class="custom-tab-title centred NosotrosFSclass">
                <ul class="tab-title clearfix">
                    <li data-tab-name="details" id="btnSomos" ><i class="fa fa-building"></i> ¿Quienes Somos?</li>
                    <li data-tab-name="review" id="btnMision"><i class="fa fa-users"></i> Nuestra Misión</li>
                    <li data-tab-name="review1" id="btnVision"><i class="fa fa-eye"></i> Nuestra Visión</li>
                </ul>
            </div>
            
            <div class="tab-details-content">
                <div class="tab-content" id="details">
                    <section class="testimonial-section sec-pad centred" style="background-image: url(images/FS/grupo-fs-2quienes-somos.jpg);">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-sm-12">
                              
                            </div>
                            <div id="quienes_somos" class="col-lg-7 col-md-12 col-sm-12 ">
                                <div class="content-box">
                                    <h2>¿Quienes Somos?</h2>
                                    <br>
                                    <div class="text" style="color: white;">
                                        Somos un grupo empresarial creado en el 2003 para ofrecer inicialmente, servicios de consultoría en sistemas de gestión de calidad e inocuidadalimentaria. 
                                        Con el tiempo diversificamos nuestros servicios en áreas de   soporte en asuntos regulatorios, salud y seguridad ocupacional, procesamiento térmico, mermas, entre otros; manteniendo como fortaleza nuestro sistema de atención personalizado y permanente con todosnuestros clientes.
                                    </div>
    
                                    <div class="text NosotrosFSclass" style="color: white;">
                                        Contamos con una red de socios y contactos en los principales mercados del mundo, que nos ha permitido crecer y ofrecer nuestros servicios en toda Latinoamérica (Brasil, Chile, Colombia, Costa Rica, Ecuador, El Salvador, Guatemala, Honduras, México y Perú).
                                    </div>    
    
                                    <div class="text" style="color: white;">
                                        En el 2008 el grupo crea FS Certificaciones, primer organismo de inspección acreditado ante el INACAL, y en el 2013 implementa un Laboratorio de ensayo, también acreditado ante la misma entidad. Esto nos ha permitido ofrecer un servicio integral a nuestros clientes.
                                    </div>
                                    
                                </div>
                            </div>
                        </div> 
                    </section>
                </div>

                <div class="tab-content" id="review">
                    <section class="testimonial-section sec-pad centred" style="background-image: url(images/FS/grupofs-3mision.jpg);">
                        <div class="row">
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <div class="content-box">
                                    <h2 class="animated fadeIn">Nuestra Misión</h2><br>
                                    <div class="text animated fadeIn" style="color: white;">
                                        Ser  un  respaldo  técnico  permanente  para  nuestros  clientes,   con   servicios   confiables,   eficientes, personalizados y de la más alta calidad. Trabajamos con sentido de responsabilidad buscando el  mejoramiento  continuo  de  nuestros  clientes  y  de  nuestra empresa. Nos guiamos bajo los siguientes principios:
                                    </div>
                                    <br><br>
                                    <div class="row animated fadeIn">
                                        <div class="col-md-4">
                                            <img src="images/FS/mision11.png" alt="" style="width: 100px; height: 100px;" >
                                            <br><br>
                                            <p class="text" align="center" style="color: white;">Trabajo ético y comunicación abierta con nuestros clientes.</p>
                                        </div>
    
                                        <div class="col-md-4">
                                            <img src="images/FS/mision22.png" alt="" style="width: 100px; height: 100px;">
                                            <br><br>
                                            <p class="text"  align="center" style="color: white;">Disponer de un staff de consultores de reconocida experiencia, el cual está sujeto a una capacitación continua</p>
                                        </div>
    
                                        <div class="col-md-4 ">
                                            <img src="images/FS/mision33.png" alt="" style="width: 100px; height: 100px;">
                                            <br><br>
                                            <p class="text"  align="center" style="color: white;">Un ambiente de trabajo en el cual nuestros colaboradores pueden equilibrar el trabajo y la vida familiar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </section>
                </div>

                <div class="tab-content" id="review1">

                    <section class="testimonial-section sec-pad centred" style="background-image: url(images/FS/grupofs-4vision.jpg);">
                        <div class="row">

                            <div class="col-lg-5 col-md-12 col-sm-12">
                            </div>

                            <div class="col-lg-7 col-md-12 col-sm-12 animated fadeIn">

                                <div class="content-box ">
                                    <h2>Nuestra Visión</h2><br>
                                    <div class="text" style="color: white;">
                                        Que nuestras unidades de negocio sean reconocidas en Latinoamérica como un referente en la prestación de servicios de alta calidad técnica.
                                    </div>
                                    
                                    <div class="text " style="color: white;">
                                        Que los servicios ofrecidos faciliten y permitan elcrecimiento sostenible de nuestros clientes.
                                    </div>
                                </div>

                            </div>
                        </div> 
                    </section>

                </div>

            </div>
        </div>
    </section>

 <!-- FIN NOSOTROS MODULO -->
   
    <section class="sec-pad-espacio centred ServiciosFSclass" style="background-color: white;" id="ServiciosFS"></section>


    <section class="testimonial-section-service gallery-section sec-pad ServiciosFSclass" id="AreaTecnica" style="background-image: url(images/FS/grupofs-6tecnica.jpg);"> 
       <div class="container"> 
        <div class="sortable-masonry mixed-gallery-section">
            <ul class="filter-tabs filter-btns post-filter centred">
               
            </ul>


            <div class="row items-container clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 default-portfolio-item masonry-item all areatecnica">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <figure class="img-box"><img src="" alt=""></figure>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                             
                            <div class="float-right col-md-8">
                                <img src="images/FS/AreaTecni.png" alt="" width="240px" height="80px">
                           </div>
                           
                            <div class="content-box">
                             
                                <div class="text">
                                    <br><br><br><br>
                                </div>

                                <div class="accordion-box">
                                    <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                        <div class="acc-btn active">
                                            <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i><b> Implementación / Actualización (IM) de Sistemas y Normas  sujetas a Certificación</b></div>
                                          
                                            <div class="toggle-icon" data-toggle="modal" data-target="#ModalImplementacion">
                                                <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                            </div>
                                        </div>  
                                        <div class="acc-content collapsed">
                                            <p><b style="color:#044372; font-weight: bold;">Diagnóstico:</b> Determinar las condiciones iniciales y planificar el proceso de documentación e implementación.<span  style="color: #EE8700;" class="plus fa fa-plus"  data-toggle="modal" data-target="#ModalDiagnostico"></span></p>

                                            <p><b style="color:#044372; font-weight: bold;">Documentación e Implementación: </b>Diseñar un sistema acorde a los requisitos de la Norma de interés. <span style="color: #EE8700;" class="plus fa fa-plus" data-toggle="modal" data-target="#ModalDocumentacion"></span></p>

                                            <p><b style="color:#044372; font-weight: bold;">Auditoria interna: </b>Evaluar conformidad contra los requisitos de la Norma de interés para contribuir a la mejora del Sistema.<span style="color: #EE8700;" class="plus fa fa-plus" data-toggle="modal" data-target="#ModalAuditoria"></span></p>

                                            <p><b style="color:#044372; font-weight: bold;">Aprendizaje: </b>Lograr  la  toma  de  conciencia  y  formación  del personal, promoviendo cultura.<span style="color: #EE8700;" class="plus fa fa-plus" data-toggle="modal" data-target="#ModalAprendizaje"></span></p>
                                        </div>
                                    </div>

                                    <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                        <div class="acc-btn">
                                            <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i><b> Diseño y Desarrollo de Programa de Control de la Cadena de Suministro</b></div>
                                            <div class="toggle-icon" data-toggle="modal" data-target="#ModalSuministro">
                                                <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                        <div class="acc-btn">
                                            <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i><b> Elaboración de Estudios de Mermas y/o Desmedros</b></div>
                                            <div class="toggle-icon" data-toggle="modal" data-target="#ModalDesmedros">
                                                <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                        <div class="acc-btn">
                                            <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i><b> Elaboración del Diseño Sanitario de Planta (lay-out)</b></div>
                                            <div class="toggle-icon" data-toggle="modal" data-target="#ModalSanitario">
                                                <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                        <div class="acc-btn">
                                            <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i> <b>Elaboración del Plan de Defensa Alimentaria</b></div>
                                            <div class="toggle-icon" data-toggle="modal" data-target="#ModalDefensa">
                                                <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                        <div class="acc-btn">
                                            <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i><b> Elaboración del Plan de Mitigación de Fraude Alimentario</b></div>
                                            <div class="toggle-icon" data-toggle="modal" data-target="#ModalFraude">
                                                <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br><br>
                </div>
               
            </div>
        </div>
    </div>
    </section>

    <section class="sec-pad-espacio centred" style="background-color: white;"></section>
    

    <section class="testimonial-section-service gallery-section sec-pad ServiciosFSclass" id="AsuntosRegulatorios" style="background-image: url(images/FS/grupofs-7regulatorios.jpg);">
        <div class="container"> 
         <div class="sortable-masonry mixed-gallery-section">
             <ul class="filter-tabs filter-btns post-filter centred">
                
             </ul>
 
 
            <div class="row items-container clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 default-portfolio-item masonry-item all areatecnica">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="float-left">
                            <a href="images/FS/Clientes/brochure_Grupo_FS_AARR.pdf" target="_blank" id="linkAR">
                            <img src="images/FS/AsuntosReg.png" alt="" width="240px" height="80px" title="Descargar Archivo">
                            </a>
                        </div>
                        
                        <div class="content-box">
                        
                            <div class="text">
                                <br><br><br><br>
                            </div>

                        <div class="accordion-box">
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn active">
                                    <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i> <b>Permisos Sanitarios</b></div>
                                    <div class="toggle-icon">
                                        <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                    </div>
                                </div>

                                <div class="acc-content collapsed">
                                    <p><b style="color:#044372; font-weight: bold;" >Ante la Dirección General de Salud Ambiental (DIGESA)</b><br>- Registro Sanitario de Alimentos y Bebidas. <br>-Autorización  Sanitaria  para  la  Fabricación,  Importación  y  Comercialización de Juguetes y/o Útiles de Escritorio. <br>
                                    -Registro  Sanitario  de  Desinfectantes  y  Plaguicidas;  asi  como  Productos Químicos de Uso Industrial</p>

                                    <p><b style="color:#044372; font-weight: bold;" >Ante la Dirección General de Medicamentos, Insumos y Drogas (DIGEMID) </b>Aqui va Texto</p>

                                    <p><b style="color:#044372; font-weight: bold;" >Ante el Servicio Nacional de Sanidad Agraria – SENASA </b>Aqui va Texto</p>

                                    <p><b style="color:#044372; font-weight: bold;" >Ante el Organismo Nacional de Sanidad Pesquera –  SANIPES </b>Aqui va Texto</p>
                                </div>

                            </div>


                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i> <b>Autorización de Laboratorio – Buenas Prácticas de Manufactura (DIGEMID)</b></div>
                                    <div class="toggle-icon">
                                        <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et </p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i> <b>Autorización de Droguería - Buenas Prácticas de Almacenamiento (DIGEMID)</b></div>
                                    <div class="toggle-icon">
                                        <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et </p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i> <b>Validación de etiquetado de alimentos</b></div>
                                    <div class="toggle-icon">
                                        <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et </p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i> <b>Elaboración de Tabla Nutricional y Advertencias Publicitarias (Octógonos)</b></div>
                                    <div class="toggle-icon">
                                        <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et </p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i> <b>Servicio de custodia de registros (Droguería)</b></div>
                                    <div class="toggle-icon">
                                        <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et </p>
                                </div>
                            </div>
                        </div>

                    </div>

                        </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            
                            <figure class="img-box"><img src="" alt=""></figure>

                        </div>
                </div>
                     <br><br>
            </div>
 
            
             </div>

         </div>
     </div>
    </section>
    
    <section class="sec-pad-espacio centred" style="background-color: white;"></section>

    <section class="testimonial-section-service gallery-section sec-pad ServiciosFSclass" id="ProcesosTermicos" style="background-image: url(images/FS/grupofs-8termicos.jpg);">
        <div class="container"> 
         <div class="sortable-masonry mixed-gallery-section">
             <ul class="filter-tabs filter-btns post-filter centred">
                
             </ul>
 
             <div class="row items-container clearfix">
                 <div class="col-lg-12 col-md-12 col-sm-12 default-portfolio-item masonry-item all areatecnica">
                     <div class="row">
                         <div class="col-lg-6 col-md-12 col-sm-12">
                             <figure class="img-box"><img src="" alt=""></figure>
                         </div>
                         <div class="col-lg-6 col-md-12 col-sm-12">
                              
                            <div class="float-right">
                                 <img src="images/FS/ProcesosTerm.png" alt="" width="240px" height="80px">
                            </div>
                            
                             <div class="content-box">
                              
                                 <div class="text">
                                     <br><br><br><br>
                                 </div>
 
                                 <div class="accordion-box">
                                    <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                        <div class="acc-btn active">
                                            <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i> <b>Estudios de Validación Térmica</b></div>
                                            <div class="toggle-icon">
                                                <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                            </div>
                                        </div>
        
                                        <div class="acc-content collapsed">
                                            <p>Penetración de calor (estudios F<small>o</small>) y distribución de temperatura en autoclaves, marmitas, secadores, pasteurizadores, entre otros.Sistemas  de  procesamiento  y  envasado  aséptico;  asi  como,              llenado y mantenimiento en caliente/frío.Mapeos térmicos (frío y calor), curvas o Perfiles de temperatura (mapeos térmicos), entre otros.</p>
                                        </div>
        
                                    </div>
        
        
                                    <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                        <div class="acc-btn">
                                            <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i> <b>Auditorias en Tratamiento Térmico</b></div>
                                            <div class="toggle-icon">
                                                <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                            </div>
                                        </div>
                                        <div class="acc-content">
                                            <p>Soporte técnico para visitas y auditorías oficiales de la US FDA (EE.UU.), DIGESA, SANIPES, entre otros; así como auditorías de sus clientes. </p>
                                        </div>
                                    </div>
                                    <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                        <div class="acc-btn">
                                            <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i> <b>Capacitación</b></div>
                                            <div class="toggle-icon">
                                                <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                            </div>
                                        </div>
                                        <div class="acc-content">
                                            <p>Cursos  oficiales  exigidos  por  la  US  FDA  (ej.  Better  Process     Control  School,  Controles  Preventivos  en  Alimentos  Tratados  Térmicamente) Cursos/talleres    especializados    en    procesamiento    térmico    (in-house).</p>
                                        </div>
                                    </div>
                                    <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                        <div class="acc-btn">
                                            <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i> <b>Trámites, registro y autorizaciones</b></div>
                                            <div class="toggle-icon">
                                                <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                            </div>
                                        </div>
                                        <div class="acc-content">
                                            <p>Ante la US FDA (Registros FDA: Bioterrorismo, FCE y SID # por producto), y otros países que requieran respaldo del tratamiento térmico (Colombia, Chile, Perú, etc.).Remoción del estatus de “Import Alert” (Lista Roja de la US FDA), para evitar detenciones automáticas al arribo de su mercadería. </p>
                                        </div>
                                    </div>
                                    <div class="accordion animated out SociosFSclass" data-delay="0" data-animation="fadeInUp">
                                        <div class="acc-btn">
                                            <div class="title"><i class="fa fa-caret-right" style="color: #EE8700;"></i> <b>Venta de Equipos de Recolección y Software de Análisis</b></div>
                                            <div class="toggle-icon">
                                                <span class="plus fa fa-plus"></span><span class="minus  fa fa-minus"></span>
                                            </div>
                                        </div>
                                        <div class="acc-content">
                                            <p>Somos representantes oficiales en Latinoamerica para la venta del equipo recolector de datos CALPLex y del software más completo de recolección y evaluación CALSoft 6 de TechniCAL Inc. (EE.UU.).  Tanto el equipo como el software son ampliamente utilizados a nivel mundial y aceptados por la USFDA.</p>
                                        </div>
                                    </div>
                                   
                                </div>
                             </div>
                         </div>
                     </div>
                     <br><br>
                 </div>
 
                
             </div>
         </div>
     </div>
    </section>

    <section class="sec-pad-espacio centred SociosFSclass" style="background-color: white;" id="ServiciosFS"></section>

    <!-- socios -->
    <section class="testimonial-section sec-pad centred SociosFSclass" id="SociosFS" style="background-image: url(images/FS/grupofs-10socios.jpg);">
        <div class="container">
            <h1 class="sec-title text-center" style="color: #EE8700;">Socios</h1>
                     <br>
            <div class="title-text"></div>
            <div class="row">
                <div class="col-lg-5">
                    <!-- Espaciado -->
                </div>
                
                <div id="socios_animacion" class="col-lg-7 float-right col-sm-12">
                   
                    <div class="row ">
                        <img id="SociosIMG" src="images/FS/Clientes/socio00.png" alt="" data-toggle="modal" data-target="#Technical">
                        <img id="SociosIMG" src="images/FS/Clientes/socio01.png" alt="" data-toggle="modal" data-target="#Safety">
                        <img id="SociosIMG" src="images/FS/Clientes/socio02.png" alt="" data-toggle="modal" data-target="#Agriconsult">
                    </div>
                         <br>
                    <div class="row">
                        <img id="SociosIMG" src="images/FS/Clientes/socio03.png" alt="" data-toggle="modal" data-target="#Spinak">
                        <img id="SociosIMG" src="images/FS/Clientes/socio04.png" alt="" data-toggle="modal" data-target="#iftps">
                        <img id="SociosIMG" src="images/FS/Clientes/socio05.png" alt="" data-toggle="modal" data-target="#fsc">
                    </div>
                    

                </div>
                <div class="ClientesFSclass"></div>
            </div>
        </div>
    </section>
    <!-- socios end -->

    <section class="sec-pad-espacio centred ClientesFSclass" style="background-color: white;" id="ClientesFS"></section>

      <!-- Clientes -->
    <section class="testimonial-section sec-pad centred ClientesFSclass" id="tabClientes" style="background-image: url(images/FS/grupofs-9clientes.jpg);">
       
        <div class="destin-details"  id="tabClientes" style="padding-top: 0%;">
            <div class="">
                <h1 class="sec-title centred">CLIENTES</h1>
                <br>
                <!-- <div class="title-text centred">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,<br />sed quia consequuntur magni dolores eos qui ratione</div> -->
                <div class="custom-tab-title-one centred" >
                    <ul class="tab-title clearfix">
                        <li data-tab-name="Area" id="btnClientes" class="active">Área Técnica</li>
                        <li data-tab-name="Asuntos" id="btnRegulatorio"> Asuntos Regulatorios</li>
                        <li data-tab-name="Procesos" id="btnTermicos"> Procesos Térmicos</li>
                    </ul>
                </div>
                
                <div class="tab-details-content-one">
                    
                    <div class="tab-content animated fadeIn" id="Area">
                        
                            <div class="row">
                                <div class="container">
                                    <img src="images/FS/Clientes/clie-at/agricolandrea.jpg" alt="" style="width: 8%;" class="rounded">
                                    <img src="images/FS/Clientes/clie-at/agroworld.jpg" alt="" style="width: 8%;" class="rounded">
                                    <img src="images/FS/Clientes/clie-at/ajinomoto.jpg" alt="" style="width: 8%;" class="rounded">
                                    <img src="images/FS/Clientes/clie-at/alicorp.jpg" alt="" style="width: 8%;" class="rounded">
                                    <img src="images/FS/Clientes/clie-at/andina.jpg" alt="" style="width: 8%;" class="rounded">
                                    <img src="images/FS/Clientes/clie-at/anita.jpg" alt="" style="width: 8%;" class="rounded">
                                    <img src="images/FS/Clientes/clie-at/apropal.jpg" alt="" style="width: 8%;" class="rounded">
                                    <img src="images/FS/Clientes/clie-at/avinka.jpg" alt="" style="width: 8%;" class="rounded">
                                </div> 
                            </div> 
                            <br> 
                            <div class="row">
                                <div class="container">
                                        <img src="images/FS/Clientes/clie-at/bimbo.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/biocon.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/cencosud.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/chrhansen.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/cogorno.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/elsol.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/emusa.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/eurogerm.jpg" alt="" style="width: 8%;" class="rounded">
                                </div> 
                                </div> 
                            <br>
                                <div class="row">
                                <div class="container">
                                        <img src="images/FS/Clientes/clie-at/global.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/gloria.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/incasur.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/inkcrops.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/lopesa.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/makro.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/metalpren.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/nacionalchocolates.jpg" alt="" style="width: 8%;" class="rounded">
                                </div> 
                                </div> 
                            <br>
                                <div class="row">
                                <div class="container">
                                        <img src="images/FS/Clientes/clie-at/nobex.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/pepsico.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/piscoporton.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/redondos.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/resinplast.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/saga.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/sanfernando.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-at/sinea.jpg" alt="" style="width: 8%;" class="rounded">
                                </div> 
                                </div> 
                            <br>    
                                <div class="row">
                                    <div class="container">
                                            <img src="images/FS/Clientes/clie-at/supesa.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-at/tasa.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-at/tottus.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-at/triunfo.jpg" alt="" style="width: 8%;" class="rounded">
                                    </div> 
                                </div> 

                    </div>
    
                    <div class="tab-content animated fadeIn" id="Asuntos">
                        
                                <div class="row">
                                    <div class="container">
                                            <img src="images/FS/Clientes/clie-ar/bobbibrown.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-ar/carestream.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-ar/cencosud.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-ar/colgate.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-ar/delosi.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-ar/essence.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-ar/esteelauder.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-ar/nestle.jpg" alt="" style="width: 8%;" class="rounded">
                                    </div> 
                                    </div> 
                                    <br> 
                                    <div class="row">
                                        <div class="container">
                                            <img src="images/FS/Clientes/clie-ar/oechsle.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-ar/pepsico.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-ar/saga.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-ar/supesa.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-ar/tottus.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-ar/transmeridian.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-ar/wishtrade.jpg" alt="" style="width: 8%;" class="rounded">
                                            <img src="images/FS/Clientes/clie-ar/" alt="" style="width: 8%;" class="rounded">
                                        </div> 
                                    </div> 
                                   
                    </div>
    
                    <div class="tab-content  animated fadeIn" id="Procesos">
    
                            <div class="row">
                                <div class="container">
                                        <img src="images/FS/Clientes/clie-pt/agrodely.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/aib.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/alicorp.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/austral.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/bhg.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/calera.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/colcafe.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/conalimentos.jpg" alt="" style="width: 8%;" class="rounded">
                                </div> 
                                </div> 
                                <br> 
                                <div class="row">
                                    <div class="container">
                                        <img src="images/FS/Clientes/clie-pt/costena.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/ecosac.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/envasur.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/gandules.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/grupogloria.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/hayduk.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/herdez.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/ile.jpg" alt="" style="width: 8%;" class="rounded">
                                    </div> 
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="container">
                                        <img src="images/FS/Clientes/clie-pt/jaremar.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/jumex.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/lindley.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/maravilla.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/multifood.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/nutrium.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/perufood.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/puertopaci.jpg" alt="" style="width: 8%;" class="rounded">
                                    </div> 
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="container">
                                        <img src="images/FS/Clientes/clie-pt/quicornac.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/salica.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/sanfernando.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/seafman.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/seafrost.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/tresa.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/usafish.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/viru.jpg" alt="" style="width: 8%;" class="rounded">
                                    </div> 
                                </div> 
                                <br>
                                <div class="row">
                                    <div class="container">
                                        <img src="images/FS/Clientes/clie-pt/wawa.jpg" alt="" style="width: 8%;" class="rounded">
                                        <img src="images/FS/Clientes/clie-pt/zenu.jpg" alt="" style="width: 8%;" class="rounded">
                                    </div> 
                                </div> 

                    </div> 
                        
                </div>
            </div>
        </div>
        <div id="Testimonios"></div>
    </section>
    <!-- Clientes end -->

    <section class="sec-pad-espacio centred " style="background-color: white;" ></section>
   
    <!-- TESTIMONIOS DE CLIENTES -->
    <section class="testimonial-section sec-pad centred ClientesFSclass"  style="background-image: url(images/FS/grupofs-5-testimonios.jpg);">
        <div class="container">
            <h2 class="sec-title">Testimonios de Nuestros Clientes</h2>
            <div class="title-text"></div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2">
                    <div class="testimonial-slider">
                        <div class="testimonial-content row">
                            <div class="author-info col-md-6">
                                <img class="col-lg-12 col-sm-12 col-md-12 float-right" id="TestimonioIMG" src="images/FS/Clientes/Testimonio.png" alt="">
                                
                                <h4 class="float-right">DELTAGEN DEL PERÚ S.A.</h4>
                            </div>
                            <div class="text col-md-6 EventosFSclass">
                                Muy bueno en todo momento se sintió el apoyo de ellos respecto  a  los  problemas  que  se  tenían  en  la  planta, rapidez  al  momento  de  contestar  las  interrogantes  que  teníamos y que no estaban contempladas en la asesoría".<br>"Buena  coordinación,  cumpliendo  los  objetivos  que  nos  trazábamos y siempre en coordinación si se presentaba algún inconveniente de última hora".
                            </div>
                        </div>
                        <div class="testimonial-content row">
                            <div class="author-info col-md-6">
                                <img class="col-lg-12 col-sm-12 col-md-12 float-right" id="TestimonioIMG" src="images/FS/Clientes/palmyra.png" alt="">
                                
                                <h4 class="float-right">PALMYRA DISTRIBUCIONES S.A.C.</h4>
                            </div>
                            <div class="text col-md-6 EventosFSclass">
                                <br><br>
                                "Agradecemos el apoyo y comprensión para la gestión de RS".
                            </div>
                        </div>
                        <div class="testimonial-content row">
                            <div class="author-info col-md-6">
                                <img class="col-lg-12 col-sm-12 col-md-12 float-right" id="TestimonioIMG" src="images/FS/Clientes/Griff.png" alt="">
                                
                                <h4 class="float-right">GRIFFITH FOOD S.A.S.</h4>
                            </div>
                            <div class="text col-md-6 EventosFSclass">
                                "Agradecemos el profesionalismo, cumplimiento, amabilidad, disponibilidad y efectividad en las gestiones que nos han apoyado".
                            </div>
                        </div>

                         <div class="testimonial-content row">
                            <div class="author-info col-md-6">
                                <img class="col-lg-12 col-sm-12 col-md-12 float-right" id="TestimonioIMG" src="images/FS/Clientes/laCosteña.png" alt="">
                                
                                <h4 class="float-right">CONSERVAS LA COSTEÑAS S.A.</h4>
                            </div>
                            <div class="text col-md-6 EventosFSclass">
                                <br><br>
                                "Buen servicio y apoyo en dudas y en las consultas". 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FIN DE TESTIMONIOS DE CLIENTES -->


    <section class="sec-pad-espacio centred EventosFSclass" style="background-color: white;" id=""></section> <!-- Espaciado -->
    

    <!-- Eventos -->
    <section class="testimonial-section sec-pad centred EventosFSclass" id="EventosFS" style="background-image: url(images/FS/grupofs-11eventos.jpg)">
        <div class="container">
            <h1 class="sec-title">Eventos</h1>
            <div class="row">
                <div class="col-lg-1">
                    <!-- Espaciado -->
                </div>

                <div class="col-lg-10">
                    <table class="tablaEventos table-responsive">

                        <thead>
                      
                          <th style="width: 90%;" id="thTable">Descripción del Evento</th>
                      
                          <th style="width: 15%;" id="thTable">Detalles</th>
                      
                          <th style="width: 15%;" id="thTable">Registrarse</th>
                      
                        </thead>
                        
                        <tbody id="EventosBody">

                        <?php 
                             $pdo=getPDO();

                             if ($pdo) 
                             {
                            
                                  $sql = "SELECT * FROM archivos  ORDER BY id_archivos DESC LIMIT 50;";
                                  $stmt = $pdo->prepare($sql);
                                  $stmt->execute(); 
                                  
                                  //Aquí, cualquiera de los dos procedimientos explicados en b1 y b2. 

                                  $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                    foreach ($arr as $row) {
                                        echo ' <tr>
                        
                                                <td><p style="color:#044372; font-weight: bold;"  class="text-left">&nbsp;'.$row["nombre_archivos"].'</p> <p class="text-left font-weight-normal">&nbsp;'.$row["ver_fecha"].'</p></td>
                                            
                                                <td><a href="http://grupofs.com/imagenes/'.$row["archivo_archivos"].'" target="_blank"><i style="color:#044372;" class="fa fa-plus" href="http://grupofs.com/imagenes/'.$row["archivo_archivos"].'"></i></a></td>
                                            
                                                <td><a href="'.$row["comentarios_text"].'" target="_blank"><i style="color:#044372;" class="fa fa-bullseye"></i></a></td>
                                
                                        </tr>';
                                      

                                    }
                            
                              } else {
                                  echo "Hubo un problema con la conexión";
                              }
                        ?>
                           
                        
                            
                        </tbody>
                      </table>
                </div>
                
                <div class="col-lg-1 ContactoFSclass">
                    <!-- Espaciado -->
                </div>
               

            </div>
        </div>
    </section>
    <!-- Eventos end -->
    

    <section class="sec-pad-espacio centred ContactoFSclass" style="background-color: white;" id=""></section> <!-- Espaciado -->



    <!-- CONTACTO -->
   
    <section class="contact-section sec-pad testimonial-section-service ContactoFSclass" id="ContactoFS"  style="background-image: url(images/FS/grupofs-12contacto.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-10 col-sm-10 contact-column">
                    <div class="contact-form-area">

                        <div class="text-left col-md-8">
                            <img src="images/FS/Contactenos.png" alt="" width="240px" height="80px">
                        </div>
                        <br>
                        <div class="text">Por favor, complete el formulario para mandarnos un mensaje.</div>

                        <form id="contact-form" name="contact_form" class="default-form" action="#" method="post">
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-46col-sm-12">
                                    <input type="text" name="form_name"  placeholder="Nombre Completo" required="">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="email" name="form_email"  placeholder="Correo Electronico*" required="">
                                </div>
                                <!-- <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="form_telefono"  placeholder="Número de Telefono" required="">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                   
                                    <input type="text" name="form_subject"  placeholder="Asunto" required="">
                                </div> -->
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea placeholder="Escribir Mensaje" name="form_message" required=""></textarea>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="theme-btn" data-loading-text="Procesando...">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 contact-column">
                    <div class="google-map-area">
                        <div class="google-map" id="contact-google-map" data-map-lat="-12.112654" data-map-lng="-76.989284" data-icon-path="images/resource/map-marker.png" data-map-title="Av. El Pinar 110 - Santiago de Surco" data-map-zoom="10" data-markers="{
                                &quot;marker-1&quot;: [-12.112654, -76.989284, &quot;<h4>Grupo FS</h4><p>Av. El Pinar 110</p>&quot;,&quot;images/resource/map-marker.png&quot;]
                            }">
            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- FIN DE CONTACTO -->

    <!-- main-footer -->
    <footer class="main-footer" style="background-color:#044372 ;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p style="color:white; font-size: 14px;" ><i class="fa fa-map-marker" style="width: 20px; height: 20px;"></i> 
                         Av. Del Pinar 110 Of. 405 Urb. Chacarilla del Estanque <br>Santiago de Surco, 15038, Lima - Perú
                    </p>
                </div>

                <div class="col-md-4">
                    <p style="color:white; font-size: 14px;" ><i class="fa fa-whatsapp" style="width: 20px; height: 20px;"></i> 
                        (511) 480-0561 ext. 100
                   </p>
                </div>

                <div class="col-md-4">
                    <p style="color:white; font-size: 14px;" ><i class="fa fa-envelope" style="width: 20px; height: 20px;"></i> 
                       <a href="mailto:consultas@grupofs.com" style="color:#ffffff;"> consultas@grupofs.com</a>
                   </p>
                </div>
               
            </div>
        </div>
    </footer>
    <!-- main-footer end -->


    <!-- footer-bottom -->
    <div class="footer-bottom centred">
        <div class="container">
            <div class="copyright">

                Copyright <strong id="Año"></strong> Grupo FS | Todos los Derechos Reservados | Área de Sistemas
            </div>
        </div>
    </div>
    <!-- footer-bottom end -->


    <!-- MODAL DE LOS SERVICIOS -->
        <!-- modal Area Tencica 1 -->
            <div class="modal fade 	bd-example-modal-lg" id="ModalImplementacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="">
                            <img src="images/FS/servicios/e1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
         <!-- modal Area Tencica 1 -->

        <!-- modal Area Tencica 1A -->
            <div class="modal fade 	bd-example-modal-lg" id="ModalDiagnostico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="">
                            <img src="images/FS/servicios/e2.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
         <!-- modal Area Tencica 1A -->


        <!-- modal Area Tencica 1B -->
            <div class="modal fade 	bd-example-modal-lg" id="ModalDocumentacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="">
                            <img src="images/FS/servicios/e3.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
         <!-- modal Area Tencica 1B -->


         <!-- modal Area Tencica 1C -->
            <div class="modal fade 	bd-example-modal-lg" id="ModalAuditoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="">
                            <img src="images/FS/servicios/e4.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
         <!-- modal Area Tencica 1C -->


         <!-- modal Area Tencica 1D -->
            <div class="modal fade 	bd-example-modal-lg" id="ModalAprendizaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="">
                            <img src="images/FS/servicios/e5.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
         <!-- modal Area Tencica 1D -->


        <!-- modal Area Tencica 2 -->
            <div class="modal fade 	bd-example-modal-lg" id="ModalSuministro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="">
                            <img src="images/FS/servicios/e6.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        <!-- modal Area Tencica 2 -->


        <!-- modal Area Tencica 3 -->
            <div class="modal fade 	bd-example-modal-lg" id="ModalDesmedros" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="">
                            <img src="images/FS/servicios/e7.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
         <!-- modal Area Tencica 3 -->


        <!-- modal Area Tencica 3 -->
            <div class="modal fade 	bd-example-modal-lg" id="ModalSanitario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="">
                            <img src="images/FS/servicios/e8.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        <!-- modal Area Tencica 3 -->


        <!-- modal Area Tencica 4-->
            <div class="modal fade 	bd-example-modal-lg" id="ModalDefensa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="">
                            <img src="images/FS/servicios/e9.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        <!-- modal Area Tencica 4-->



        <!-- modal Area Tencica 4-->
        <div class="modal fade 	bd-example-modal-lg" id="ModalFraude" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="">
                        <img src="images/FS/servicios/e10.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- modal Area Tencica 4-->

        <!-- Modal TechniCAL-->
        <div class="modal fade " id="Technical" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body p-4">
                    <h2>TechniCAL</h2>
                    <p>En el 2005 TechniCAL encuentra en Grupo FS a un socio que cumple con sus estándares técnicos y experiencia para en conjunto ofrecer sus servicios como Autoridades de Proceso en América Latina cuando los clientes requieren una Autoridad de Proceso con sede en EE.UU.</p> 
                </div>
                
            </div>
            </div>
        </div>

        <!-- Modal safety-->
        <div class="modal fade " id="Safety" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body p-4">
                    <h2>Safety Tech Inc</h2>
                    <p>A principios del 2007 Safety Tech Inc y Grupo FS FS firman un acuerdo para poder ofrecer servicios que permitan facilitar el 
                        intercambio comercial de productos alimenticios entre América Latina y el Japón. </p> 
                </div>
                
            </div>
            </div>
        </div>

        <!-- Modal Agriconsult-->
        <div class="modal fade " id="Agriconsult" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body p-4">
                    <h2>agriconsult Peru</h2>
                    <p>Grupo FS dentro de su permanente crecimiento se asoció con agriconsult peru para extender sus áreas de negocios 
                        y desde agosto de 2009 desarrolla algunos proyectos en conjunto, brindando soporte técnico en aspectos de calidad e 
                        inocuidad, fortaleciendo la cadena de valor, 
                        con miras a comercializar estos productos en los mercados mundiales más exigentes.  </p> 
                </div>
                
            </div>
            </div>
        </div>

        <!-- Modal Spinak-->
        <div class="modal fade " id="Spinak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body p-4">
                    <h2>Spinak Consulting </h2>
                    <p>Desde sus inicios como empresa, Spinak Consulting, hizo una alianza con Grupo FS para brindar de manera conjunta servicios especializados a la Autoridades de Proceso en América Latina cuando los 
                        clientes requieren una Autoridad de Proceso con sede en EE.UU. </p> 
                </div>
                
            </div>
            </div>
        </div>

        <!-- Modal FSC SOCIOS-->
        <div class="modal fade " id="fsc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body p-4">
                    <h2>FS Certificaciones</h2>
                    <p>En el 2008 el grupo empresarial crea FS CERTIFICACIONES, como primer organismo de inspección acreditado en el Perú ante el INACAL, bajo la norma ISO 17020; y a la fecha ofrece servicios de verificación de sistemas de inocuidad alimentaria, inspección y muestreo de lote,y programas de homologación de proveedores. En el 2013 se implementa un Laboratorio de Ensayo, acreditado también ante el INACAL y ante SENASA, como soporte a todos los servicios que se brindamos, ofreciéndoles a nuestros clientes la ejecución de ensayos microbiológicos, físico-químicos, sensoriales, estudios de vida útil, perfil nutricional, validación de procesos, estudios de enfrentamiento microbiano, entre otros estudios especializados.  </p> 
                </div>
                
            </div>
            </div>
        </div>

        <!-- Modal safety-->
        <div class="modal fade " id="#" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body p-4">
                    <h2>Safety Tech Inc</h2>
                    <p>A principios del 2007 Safety Tech Inc y Grupo FS FS firman un acuerdo para poder ofrecer servicios que permitan facilitar el 
                        intercambio comercial de productos alimenticios entre América Latina y el Japón. </p> 
                </div>
                
            </div>
            </div>
        </div>
    <!-- FIN MODAL DE LOS SERVICIOS -->

<!--Scroll to top-->
<div class="scroll-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>



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

<!-- main-js -->
<script src="js/script.js"></script>


</body><!-- End of .page_wrapper -->

</html>