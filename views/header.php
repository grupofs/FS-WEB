    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="GRUPO FS Y FSC - Area de Sistemas">
    <meta name="description" content="Servicios de consultoría en sistemas de gestión de calidad e inocuidad alimentaria, asuntos regulatorios, validación térmica alimentos, estudio f0 conservas, salud y seguridad ocupacional, mermas, entre otros.">
    <meta name="keywords" content="GRUPO FS, FOOD SOLUTIONS, ALIMENTOS, CONSULTORA DE ALIMENTOS ENLIMA, CONSULTORA DE ALIMENTOS EN PERU, validación térmica alimentos, estudio f0 conservas,Asesoria,Consultoria,registro sanitario alimentos, cosmeticos, medicamentos,
    Registro Senasa, Registro Juguetes DIGESA, Registro DIGESA DIGEMID, Rotulado FDA , Mercosur, Brasil , Mexico , Chile, Ecuador, Bolivia, Colombia, Inocuidad alimentaria, Sistema HACCP BPM, Normas GFSI,
    Cumplimiento regulación FDA, Estudio de mermas , Defensa alimentaria ,food defense, Fraude alimentario food fraud, Diseño de planta, Diseno de planta, Envases para alimentos, Inspecciones y auditorias, Capacitación de personal, Validación térmica, Autoridad de proceso, Estudios de Fo, Estudios en autoclaves,Sistemas asépticos, Procesamiento térmico, asesoria consultoria registro sanitario cosméticos Peru, asesoria consultoria registro sanitario alimentos Peru">

    <!-- OG METADATOS -->
    <meta property="og:title" content="GRUPO FOOD SOLUTION" />
    <meta property="og:url" content="https://www.grupofs.com" />
    <meta property="og:description" content="Somos un grupo empresarial creado en el 2003 para ofrecer inicialmente, servicios de consultoría en sistemas de gestión de calidad e inocuidadalimentaria. 
    Con el tiempo diversificamos nuestros servicios en áreas de soporte en asuntos regulatorios, salud y seguridad ocupacional, procesamiento térmico, mermas, entre otros; 
    manteniendo como fortaleza nuestro sistema de atención personalizado y permanente con todos nuestros clientes." />
    <meta name="og:keywords" content="GRUPO FS, FOOD SOLUTIONS, ALIMENTOS, CONSULTORA DE ALIMENTOS ENLIMA, CONSULTORA DE ALIMENTOS EN PERU, Asesoria,Consultoria,registro sanitario alimentos, cosmeticos, medicamentos,
    Registro Senasa, Registro Juguetes DIGESA, Registro DIGESA DIGEMID, Rotulado FDA , Mercosur, Brasil , Mexico , Chile, Ecuador, Bolivia, Colombia, Inocuidad alimentaria, Sistema HACCP BPM, Normas GFSI,
    Cumplimiento regulación FDA, Estudio de mermas , Defensa alimentaria ,food defense, Fraude alimentario food fraud, Diseño de planta, Diseno de planta, Envases para alimentos, Inspecciones y auditorias, Capacitación de personal, Validación térmica, Autoridad de proceso, Estudios de Fo, Estudios en autoclaves,Sistemas asépticos, Procesamiento térmico, asesoria consultoria registro sanitario cosméticos Peru, asesoria consultoria registro sanitario alimentos Peru">

    <!-- FIN OG METADATOS -->
    <title>GRUPO FS - Validación térmica alimentos, estudio f0 conservas</title>
    <!-- Stylesheets -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!-- whatsapp -->
    <link rel="stylesheet" href="./css/wsp.css">
    <link rel="stylesheet" href="./css/wsp2.css">
    <link rel="icon" href="images/icons/icono.png" type="image/x-icon">

    <script src="./js/sweetalert.js"></script>
    <link href="./css/fonts.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/font_awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
include './bd/idiomas.php';

$header = array(); 
$pref_lang = $_SESSION['idioma'];
$esp_menu_inicio = "inicio";
$eng_menu_inicio = "home";

$esp_menu_nosotros = "nosotros";
$eng_menu_nosotros = "about us";

$esp_menu_servicios = "servicios";
$eng_menu_servicios = "services";

$esp_menu_socios = "socios";
$eng_menu_socios = "partners";

$esp_menu_eventos = "eventos";
$eng_menu_eventos = "Training";

$esp_menu_testimonios = "testimonios";
$eng_menu_testimonios = "testimonials";

$esp_menu_contactenos = "contactenos";
$eng_menu_contactenos = "contact us";


$header["inicio"] = ${$pref_lang."_menu_inicio"};
$header["nosotros"] = ${$pref_lang."_menu_nosotros"};
$header["servicios"] = ${$pref_lang."_menu_servicios"};
$header["socios"] = ${$pref_lang."_menu_socios"};
$header["testimonios"] = ${$pref_lang."_menu_testimonios"};
$header["eventos"] = ${$pref_lang."_menu_eventos"};
$header["contactenos"] = ${$pref_lang."_menu_contactenos"};




if($pref_lang=="eng"){
    $titulo_servicioRegistrosAutorizaciones="Registrations, authorizations and certifications";
    $titulo_servicioSistemasGestion="Management systems";
    $titulo_servicioInocuidadAlimentaria="Food safety";
    $titulo_servicioRegulacionFDA="FDA regulation";
    $titulo_servicioMapeosTermicos="Thermal mappings";
    $titulo_servicioDisenoSanitarioPlantaAlmacenes="Sanitary Design of Plants and Warehouses (lay-out)";
    $txt_vermas = "See more";
    $txt_oficina_peru = "OFFICES IN PERU";
    $txt_oficina_usa = "OFFICES IN USA";
    $txt_complete_form = "Contact us and a specialist will get you back.";
    $txt_enviar = "Send";
    $txt_escribir_mensaje = "Detail your request";
    $txt_nombre_completo = "Full name";
    $txt_email = "Email";
    $txt_volver = "Return";
    $validaciones_lineas = "Validation of different lines";
    $valor_agregado = "Added value to our services";
    $text_servicios = "Services";
    $producto_servicio = "Service result";
    $text_socios = "partners";
    $text_eventos = "training";
    $text_eventos_cab1 = "Description";
    $text_eventos_cab2 = "Detail";
    $text_eventos_cab3 = "Register";
    $txt_contacto = "Contact Us";
    $txt_contacto_atendera = "and a specialist will get you back";
    $txt_testimonios = "CUSTOMER TESTIMONIALS";
    $txt_consulta = "DETAIL YOUR REQUEST?";
    $txt_beneficios = "Benefits";
    $metodologia_trabajo = "Work methodology";
    $servicios_nombre = "Name";
    $servicios_empresa = "Business";
    $servicios_email = "Email";
    $servicios_lista[] = array("portada"=>'serv_portada1.jpg', "link"=>'servicio_ProcesosTermicos', "titulo"=>'Thermal and Aseptic Processes Studies', "descripcion"=>'Validation of thermal processes for different processing lines.');
    $servicios_lista[] = array("portada"=>'serv_portada2.jpg', "link"=>'servicio_InformeTecnicoMermas', "titulo"=>'Technical Report of Manufacturing Scrap', "descripcion"=>'Accredit before SUNAT (National Superintendency of Customs and Tax Administration) that your technical report of manufacturing scrap is reliable and backed by a specific methodology that includes fieldwork and statistical tools.');
    $servicios_lista[] = array("portada"=>'serv_portada3.jpg', "link"=>'servicio_DisenoSanitarioPlantaAlmacenes', "titulo"=>'Layout of Plants and Warehouses (layout)', "descripcion"=>'Ensure that the layout of your establishment meets the legal, regulatory, and client requirements to avoid cost overruns for redesigns and fines for audit bodies.');
    $servicios_lista[] = array("portada"=>'serv_portada4.jpg', "link"=>'servicio_MapeosTermicos', "titulo"=>'Thermal Mapping', "descripcion"=>'Identify the proper areas for storage, maximum loading volumes, locating control sensors and monitoring sensors, and carrying out microbiological validations.');
    $servicios_lista[] = array("portada"=>'serv_portada5.jpg', "link"=>'servicio_RegulacionFDA', "titulo"=>'FDA Regulation', "descripcion"=>'Ensure that the food for human or animal consumption you export to the United States of America meets with FDA regulations, and demonstrate that your food-safety system has been implemented, maintained, and regularly updated by competent, qualified individuals.');
    $servicios_lista[] = array("portada"=>'serv_portada6.jpg', "link"=>'servicio_InocuidadAlimentaria', "titulo"=>'Food Safety', "descripcion"=>'Constantly design, implement, update, and improve your food safety management system based on the established requirements by the regulations of your country, of the destination countries of your products, or by the international regulations required by your clients.');
    $servicios_lista[] = array("portada"=>'serv_portada7.jpg', "link"=>'servicio_SistemasIntegradosGestion', "titulo"=>'Integrated Management Systems', "descripcion"=>'Improve the performance of your operations by implementing, integrating, and certifying quality management systems, environmental management, and occupational health and safety management per the established ISO standards.');
    $servicios_lista[] = array("portada"=>'serv_portada8.jpg', "link"=>'servicio_RegistrosAutorizacionesCertificaciones', "titulo"=>'Registrations, Authorizations, and Certifications', "descripcion"=>'Manage your permits and official and private certifications in the country and the primary destination countries for categories: foods, healthcare products, drugs, cosmetics, toys, hygiene products, etc.');
    $servicios_lista[] = array("portada"=>'serv_portada9.jpg', "link"=>'servicio_ValidacionEtiquetadoAlimentos', "titulo"=>'Food Label Validation', "descripcion"=>'Ensure that your food labels meet the regulatory requirements of the major countries where you commercialize your products to avoid detentions.');
    $servicios_lista[] = array("portada"=>'serv_portada10.jpg', "link"=>'servicio_Capacitacion', "titulo"=>'Training', "descripcion"=>'Strengthen the technical competence of your staff in legal, regulatory, technological, scientific, and other matters of interest to your operation through our official courses and personalized programs.');
    $servicios_lista[] = array("portada"=>'serv_portada11.jpg', "link"=>'servicio_GestionProveedoresServiciosCadenaAlimentaria', "titulo"=>'Management of suppliers of products and services for the food chain', "descripcion"=>'Approve and evaluate your suppliers of raw materials, packaging, subcontracted processes, and services regularly through second-party audits carried out by competent auditors.');
    $servicios_lista[] = array("portada"=>'serv_portada12.jpg', "link"=>'servicio_sst_meta1', "titulo"=>'OSH / SMETA ', "descripcion"=>'With our technical and legal support, design, implement, update, and constantly improve your health and safety management at work based on the requirements of Peruvian regulations. ');
    $servicios_lista[] = array("portada"=>'serv_portada13.jpg', "link"=>'servicio_sst_meta2', "titulo"=>'OSH / SMETA', "descripcion"=>'With our technical and legal support, design, implement, update, and constantly improve your high-quality system in ethical trade based on the Sedex Stakeholder Forum"s requirements.');

    $titulo_servicioProcesosTermicos='Thermal and Aseptic Processing Studies';
    $servicio_Procesos_Termicos = '
        <h3>Thermal processing validation for the following processing lines:</h3>
        <ul>
            <li>Retorts, pasteurizers, tanks and kettles. Heat penetration studies (F0/P0) and temperature distributions studies.</li>
            <li>Aseptic processing, storage and packaging.</li>
            <li>Hot-fill and cold-fill hold.</li>
            <li>Dryers, cookers, tanks, ovens, toasters, etc.  Mapping and/or temperature profile.</li>
            <li>Product refrigeration and freezing equipment temperature mapping. Freezing or cooling curves.</li>
            <li>Cold storage rooms and controlled temperature rooms. Mapping and/or temperature profile.</li>
        </ul>
        ';
    $servicio_Procesos_Termicos_1 = '
        <table class="tabla_serv_icons">
            <tr>
                <td><img src="./images/FS/serv1_icon1.jpg" style="width:72px;margin-right: 15px;"></td>
                <td style="font-weight: 600;">Filling your schedule processes with US FDA and local authorities (if applicable), and/or provide technical support with any other authority.</td>
            </tr>
            <tr>
                <td><img src="./images/FS/serv1_icon2.jpg" style="width:72px;margin-right: 15px;"></td>
                <td style="font-weight: 600;">Support to fulfill the endorsement or conformity of your filings.</td>
            </tr>
            <tr>
                <td><img src="./images/FS/serv1_icon3.jpg" style="width:72px;margin-right: 15px;"></td>
                <td style="font-weight: 600;">Spanish and/or English reports.</td>
            </tr>
        </table>
        ';
    $servicio_Procesos_Termicos_2 = '
        <table class="tabla_serv_icons">
            <tr>
                <td><img src="./images/FS/serv1_icon4.jpg" style="width:72px;margin-right: 15px;"></td>
                <td style="font-weight: 600;">We follow international standards or protocols when running our studies.</td>
            </tr>
            <tr>
                <td><img src="./images/FS/serv1_icon5.jpg" style="width:72px;margin-right: 15px;"></td>
                <td style="font-weight: 600;">Downloadable studies on our on-line system.</td>
            </tr>
            <tr>
                <td><img src="./images/FS/serv1_icon6.jpg" style="width:72px;margin-right: 15px;"></td>
                <td style="font-weight: 600;">Our studies are accepted by all health authorities and the main purchasing groups worldwide.</td>
            </tr>
        </table>
        ';
    
    $titulo_servicioInformeTecnicoMermas='Technical Report of scraps of stock';
    $servicio_InformeTecnicoMermas_1 = 'We conduct studies to different industrial sectors with a technical, professional, competent, and independent team with extensive experience.
        FS Global Group helps you determine if your stock losses correspond to scraps or reduction and at what stage of your processes and operations they are generated.
        Also, we determine percentages or manufacturing scrap factors for your specific operations and processes based on the “analysis of your production process.”';
    $servicio_InformeTecnicoMermas_2 = '
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Planning of the study and determination of a specific work methodology.</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Validation of scraps and reduction through fieldwork.</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Use of statistical tools for data processing. </div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Obtaining the percentages of scraps and reduction, valid for accounting purposes and process control.</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Preparation of the technical report by a competent and independent professional</div></div>';
    
        $servicio_DisenoSanitarioPlantaAlmacenes='
        The design of a plant or warehouse must contemplate the compliance with the legal, regulatory, and technical requirements for the projection and construction of the required environments for productive, logistic, and support operations that ensure continuous and efficient process flows, avoiding crossings, reprocessing or pollution during production or storage of regulated products.
        <br><br>
        A correct production or storage plant sanitary layout is the basis for guaranteeing a successful implementation of quality and safety systems. With it, obtaining official authorizations and certifications accredited by competent health authorities is possible.
        <br><br>
        Counting on the advice of specialists in the layout of plants and warehouses can avoid cost overruns and unnecessary redesign.
        ';
    $servicio_DisenoSanitarioPlantaAlmacenes_1 = '
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Collection of information on production, logistics, and support processes</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Preliminary layout of the distribution plan of environments</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Proposal review and adjustments</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Final project design in editable format</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Technical report with design and construction recommendations</div></div>
        ';
    $servicio_DisenoSanitarioPlantaAlmacenes_2='
        <tr>
            <td><img src="./images/icons/10.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">According to international standards, the concepts of hygienic zoning of the environment based on risk are applied.</td>
        </tr>
        <tr>
            <td><img src="./images/icons/11.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Best practices are recommended for the design and construction of the establishment.</td>
        </tr>
        <tr>
            <td><img src="./images/icons/12.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Distribution of environments and arrangement of personnel transit routes, supply of raw materials and containers, and evacuation of solid waste, among other requirements, to avoid risks of crossings in their operations.</td>
        </tr>
        <tr>
            <td><img src="./images/icons/13.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">The projection of future extensions is taken into account.</td>
        </tr>
        ';
    $servicio_DisenoSanitarioPlantaAlmacenes_3='
        <tr>
            <td><img src="./images/icons/14.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Architectural plan of distribution of environments to scale.</td>
        </tr>
        <tr>
            <td><img src="./images/icons/8.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Technical Report with design and construction recommendations.</td>
        </tr>
        ';
    $mapeos_termicos_1='<p style="font-weight: 600;color:#888888; margin">
        Thermal mappings allow to be certain that the temperature setpoint for an environment or equipment has been reached, and that it is uniform throughout a period of time. These tests also serve to identify cold and hot zones, which must be taken into consideration when establishing load zones, load volumes, single control sensors, monitoring sensors and perform microbiological validations.
        </p>
        <h3>We evaluate</h3>
        <ul>
            <li>Product refrigeration and freezing equipment </li>
            <li>Freezing and/or refrigeration curves</li>
            <li>Dryers, cookers, tanks, ovens and toasters.</li>
            <li>Cold and room temperature storage.
            </li>
        </ul>';
    $mapeos_termicos_2 = '
        <tr>
            <td><img src="./images/icons/1.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Our studies are accepted by all the health authorities and the main purchasing groups worldwide.</td>
        </tr>
        <tr>
            <td><img src="./images/icons/4.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">We follow international standards or protocols when running our studies.</td>
        </tr>
        <tr>
            <td><img src="./images/icons/2.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Downloadable studies on our on-line system.</td>
        </tr>
        <tr>
            <td><img src="./images/icons/3.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Spanish and/or English reports.</td>
        </tr>';
    $regulacion_fda_1='We adapt your food safety system to comply with the US FDA regulation for 
        processing/ manufacturing/ packaging/ storage/ transportation/ distribution/ commercialization/ import of food 
        for human and animal consumption; in this way, you will be prepared to successfully comply with FDA inspections and requirements; 
        as well as, respond to their importers, within the framework of the foreign supplier control program (FSVP)';
    $regulacion_fda_2='<div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Diagnostic audit and work plan</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Design and implementation of the standard of interest</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Internal audit to verify compliance with the applicable regulation</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>“Official” training to train qualified individuals and “unofficial” training for plant personnel</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Technical support during audits carried out by the FDA</div></div>';
    $regulacion_fda_3='
        <tr>
            <td><img src="./images/icons/1.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Permanent technical support to the safety team to respond or participate in meetings with the FDA.</td>
        </tr>
        <tr>
            <td><img src="./images/icons/4.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Application of FDA recommended methodologies.</td>
        </tr>
        ';
    $regulacion_fda_4='
        <tr>
            <td><img src="./images/icons/3.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;text-align: left;">Documents elaborated in electronic format, in Spanish - English version.</td>
        </tr>
        ';
    
    $inocuidadAlimentaria_1='
        With our technical and legal support, you can design, implement, update, and continuously improve your food safety management system based on the requirements established by the 
        regulations of your country, of the destination countries of your products, or by the international standards required by your customers.
        ';
    $sistemas_IntegradosGestion_1='We provide solutions in the development, implementation, maintenance, and monitoring of your ISO 9001, ISO 14001, and ISO 45001 management systems that allow you to achieve a permanent improvement in efficiency and productivity, identify and control your risks and manage opportunities in all processes to endorsement the satisfaction of your customers and interested parties. Our objective is your management systems certification or homologation.  
        <br><br>
        Our consulting services lead you to successfully obtain the certificate or homologation of your management system required or implemented to comply with legal requirements from your clients or other interested parties.
        ';
    $sistemas_IntegradosGestion_2='
        <div style="display: block; color:#2f3980; font-weight:bold;font-family: Arial Black;">We provide technical support in the following standards:</div>
        <table style="width:100%;background: #fff;margin-bottom: 20px;">
            <thead>
                <tr>
                    <th style="padding:10px 20px;background: #2f3980;color: #fff;">Management system</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="lista_p_servic" style="text-align: left; padding: 10px 20px;">
                        <ul>
                            <li>Quality management system</li>
                            <li>Environmental management system.</li>
                            <li>Occupational health and safety management system</li>
                            <li>Integrated management system.</li>
                            <li>According to supplier evaluation criteria.</li>
                        </ul>
                        
                    </td>
                </tr>
            </tbody>
        </table>
        ';
    $sistemas_IntegradosGestion_3='
        <table style="width:100%;background: #fff;margin-bottom: 20px;">
            <thead>
                <tr>
                    <th style="padding:10px 20px;background: #2f3980;color: #fff;">Certification</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="lista_p_servic" style="text-align: left; padding: 10px 20px;">
                        <ul>
                            <li>ISO 9001 - Requirements.</li>
                            <li>ISO 14001 - Requirements with guidance for its use.</li>
                            <li>ISO 45001 - Requirements with guidance for its use.</li>
                            <li>ISO 9001, ISO 14001, ISO 45001.</li>
                            <li>Certificate of homologation - Supplier evaluation requirements</li>
                        </ul>
                        
                    </td>
                </tr>
            </tbody>
        </table>
        ';
    $sistemas_IntegradosGestion_4='
        <div class="row cuadros_prog cuad5">
            <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Diagnostic audit and work plan for implementation</div></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Design and implementation of the food safety system</div></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Internal audit for verification of compliance</div></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Staff training</div></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Technical support in the certification process</div></div>
        </div>';
    $sistemas_IntegradosGestion_5='
        <table class="tabla_serv_icons">
            <tr>
                <td>
                    <img src="./images/icons/18.png" style="width:52px;margin-right: 15px;">
                </td>
                <td style="font-weight: 600; text-align: left;">
                The staff of consultants is competent in implementing international standards recognized by the International Organization for Standardization (ISO). This guarantees that the best practices and approaches are collected so our clients can successfully face the homologation audits or certifications.
                </td>
            </tr>
        </table>
        ';
    $sistemas_IntegradosGestion_6='
        <table class="tabla_serv_icons">
            <tr>
                <td>
                    <img src="./images/icons/5.png" style="width:52px;margin-right: 15px;">
                </td>
                <td style="font-weight: 600; text-align: left;">
                Technical and legal support on issues related to the service.
                </td>
            </tr>
            <tr>
                <td>
                    <img src="./images/icons/8.png" style="width:52px;margin-right: 15px;">
                </td>
                <td style="font-weight: 600; text-align: left;">
                Technical assistance during the process of certification or homologation of suppliers and resolving nonconformities that leads to successfully passing the homologation audit or certification.
                </td>
            </tr>
        </table>
        ';

    $RegistrosAutorizacionesCertificaciones_1='
        We assist you with your permits, official and private certifications in the country as well as in the main countries of destination.<br><br>
        We offer a quality service complying with the highest standards in procedures to obtain permits for the different categories of regulated products such as: food, cosmetics, sanitary drugs, hygiene, toys, stationery, etc. both at product level and at production plant, warehouses and laboratories.
        ';
    $ValidacionEtiquetadoAlimentos_1='Make sure all the labels of your products comply with the regulatory requirements of the countries of destination.';
    $ValidacionEtiquetadoAlimentos_2='';
    $ValidacionEtiquetadoAlimentos_3='';
    $ValidacionEtiquetadoAlimentos_4='';
    $ValidacionEtiquetadoAlimentos_5='
        <div class="col-lg-6 col-md-12 text-center">
            <table class="tabla_serv_icons" style="margin:auto">
                <tr>
                    <td>
                        <img src="./images/icons/18.png" style="width:52px;margin-right: 15px;">
                    </td>
                    <td style="font-weight: 600; text-align: left;">
                        Avoid detentions or sanctions.
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="./images/icons/8.png" style="width:52px;margin-right: 15px;">
                    </td>
                    <td style="font-weight: 600; text-align: left;">
                        Avoid relabeling costs.
                    </td>
                </tr>
            </table>
        </div>

        <div class="col-lg-6 col-md-12 text-center">
            <table class="tabla_serv_icons" style="margin:auto">
                <tr>
                    <td>
                        <img src="./images/icons/18.png" style="width:52px;margin-right: 15px;">
                    </td>
                    <td style="font-weight: 600; text-align: left;">
                    Make known the nutritional benefits of your product through claims that comply with regulations. 
                    </td>
                </tr>
            </table>
        </div>';

}else{
    
    $titulo_servicioRegistrosAutorizaciones="Registros, autorizaciones y certificaciones";
    $titulo_servicioSistemasGestion="Sistemas de Gestión";
    $titulo_servicioInocuidadAlimentaria="Inocuidad Alimentaria";
    $titulo_servicioRegulacionFDA="Regulación FDA";
    $titulo_servicioMapeosTermicos="Mapeos térmicos";
    $titulo_servicioDisenoSanitarioPlantaAlmacenes="Diseño Sanitario de Plantas y Almacenes (lay-out)";
    $txt_vermas = "Ver más";
    $txt_oficina_peru = "OFICINA PERÚ";
    $txt_oficina_usa = "OFICINA USA";
    $txt_complete_form = "Por favor, complete el formulario para mandarnos un mensaje.";
    $txt_enviar = "Enviar";
    $txt_escribir_mensaje = "Escribir Mensaje";
    $txt_nombre_completo = "Nombre completo";
    $txt_email = "Correo electrónico";
    $txt_volver = "Volver";
    $validaciones_lineas = "Validaciones en diferentes líneas";
    $valor_agregado = "Valor agregado a nuestros servicios";
    $text_servicios = "Servicios";
    $producto_servicio = "Producto del servicio";
    $text_socios = "socios";
    $text_eventos = "eventos";
    $text_eventos_cab1 = "Descripción del Evento";
    $text_eventos_cab2 = "Detalles";
    $text_eventos_cab3 = "Registrarse";
    $txt_contacto = "Contáctenos";
    $txt_contacto_atendera = "y un especialista lo atenderá";
    $txt_testimonios = "TESTIMONIOS DE CLIENTES";
    $txt_consulta = "¿Cuál es su consulta?";
    $txt_beneficios = "Beneficios";
    $metodologia_trabajo = "Metodología de trabajo";
    $servicios_nombre = "Nombre";
    $servicios_empresa = "Empresa";
    $servicios_email = "Email";
    $servicios_lista[] = array("portada"=>'serv_portada1.jpg', "link"=>'servicio_ProcesosTermicos', "titulo"=>'Estudios de procesos térmicos y asépticos', "descripcion"=>'Validamos los procesos térmicos para diferentes líneas de proceso.');
    $servicios_lista[] = array("portada"=>'serv_portada2.jpg', "link"=>'servicio_InformeTecnicoMermas', "titulo"=>'Informe técnico de mermas', "descripcion"=>'Acredita ante la SUNAT que tu informe técnico de mermas es confiable y está respaldado por una metodología específica que incluye, trabajo de campo y el uso de herramientas estadísticas.');
    $servicios_lista[] = array("portada"=>'serv_portada3.jpg', "link"=>'servicio_DisenoSanitarioPlantaAlmacenes', "titulo"=>'Diseño sanitario de planta y almacenes (lay-out)', "descripcion"=>'Asegura que el diseño sanitario de tu establecimiento, cumpla con los requisitos legales, reglamentarios y de tus clientes para evitar a futuro, sobrecostos por rediseños y multas por las entidades fiscal.');
    $servicios_lista[] = array("portada"=>'serv_portada4.jpg', "link"=>'servicio_MapeosTermicos', "titulo"=>'Mapeos térmicos', "descripcion"=>'Identificamos las zonas al momento de establecer las zonas de carga, volúmenes de carga, ubicar sensores de control, sensores de monitoreo y realizar validaciones microbiológicas.');
    $servicios_lista[] = array("portada"=>'serv_portada5.jpg', "link"=>'servicio_RegulacionFDA', "titulo"=>'Regulación FDA', "descripcion"=>'Asegura que los alimentos de consumo humano o consumo animal que exportas a los EE. UU. cumplan con la regulación de la FDA; demuestra que tu sistema de inocuidad alimentaria ha sido implementado, mantenido y actualizado periódicamente por individuos');
    $servicios_lista[] = array("portada"=>'serv_portada6.jpg', "link"=>'servicio_InocuidadAlimentaria', "titulo"=>'Inocuidad alimentaria', "descripcion"=>'Diseña, implementa, actualiza y mejora continuamente tu sistema de gestión de inocuidad alimentaria con base a los requisitos establecidos por la normativa de tu país, de los países destino de tus productos o por los estándares internacionales requerida');
    $servicios_lista[] = array("portada"=>'serv_portada7.jpg', "link"=>'servicio_SistemasIntegradosGestion', "titulo"=>'Sistemas integrados de gestión', "descripcion"=>'Mejora el desempeño de tus operaciones mediante la implementación, integración y certificación de sistemas de gestión de la calidad, gestión ambiental y gestión de la seguridad y salud en el trabajo, acorde a lo establecido  ');
    $servicios_lista[] = array("portada"=>'serv_portada8.jpg', "link"=>'servicio_RegistrosAutorizacionesCertificaciones', "titulo"=>'Registros, autorizaciones y certificaciones', "descripcion"=>'Gestiona tus permisos y certificaciones oficiales y privadas en el país y los principales países de destino para categorías: Alimentos, sanitarios fármacos, cosméticos, juguetes, higiene, etc.');
    $servicios_lista[] = array("portada"=>'serv_portada9.jpg', "link"=>'servicio_ValidacionEtiquetadoAlimentos', "titulo"=>'Validación de etiquetado de alimentos', "descripcion"=>'Asegura que las etiquetas de tus alimentos cumplan con los requisitos normativos de rotulado de los principales países donde comercializas tus productos, a fin de evitar detenciones.');
    $servicios_lista[] = array("portada"=>'serv_portada10.jpg', "link"=>'servicio_Capacitacion', "titulo"=>'Capacitación', "descripcion"=>'Fortalece la competencia técnica de tu personal en asuntos legales, normativos, tecnológicos, científicos y otros de interés para tu operación mediante nuestros cursos oficiales y programas personalizados.');
    $servicios_lista[] = array("portada"=>'serv_portada11.jpg', "link"=>'servicio_GestionProveedoresServiciosCadenaAlimentaria', "titulo"=>'Gestión de proveedores de productos y servicios para la cadena alimentaria', "descripcion"=>'Aprueba y evalúa a tus proveedores de materias primas, envases, procesos subcontratados y de servicios de manera periódica, mediante auditorías de segunda parte realizadas por auditores competentes.');
    $servicios_lista[] = array("portada"=>'serv_portada12.jpg', "link"=>'servicio_sst_meta1', "titulo"=>'SST ', "descripcion"=>'Con nuestro soporte técnico y legal, diseña, implementa, actualiza y mejora continuamente tu sistema de gestión de seguridad y salud en el trabajo con base a los requisitos de la normativa');
    $servicios_lista[] = array("portada"=>'serv_portada13.jpg', "link"=>'servicio_sst_meta2', "titulo"=>'SMETA', "descripcion"=>'Con nuestro soporte técnico y legal, diseña, implementa, actualiza y mejora continuamente tu sistema de alta calidad en comercio ético con base a los requisitos del Foro de partes interesadas de SEDEX.');

    $titulo_servicioProcesosTermicos='Estudios de Proceso Térmico y Aséptico';
    $servicio_Procesos_Termicos = '
        <h3>Validación de procesos térmicos para las siguientes líneas de proceso:</h3>
        <ul>
            <li>Autoclaves, pasteurizadores, tanques y marmitas. Estudios de penetración de calor (Fo) y distribución de temperatura.</li>
            <li>Procesamiento y envasado aséptico.</li>
            <li>Llenado y mantenimiento en caliente/frío.</li>
            <li>Secadores, cocinadores, tanques, hornos, tostadores – mapeo o perfil de temperatura.</li>
            <li>Cámaras y equipos de congelación/refrigeración. Curvas de congelación/refrigeración.</li>
            <li>Almacenes en frío y a temperatura ambiente – mapeo o perfil de temperatura.</li>
        </ul>';
    $servicio_Procesos_Termicos_1 = '
        <table class="tabla_serv_icons">
            <tr>
                <td><img src="./images/FS/serv1_icon1.jpg" style="width:72px;margin-right: 15px;"></td>
                <td style="font-weight: 600;">Registramos sus procesos térmicos ante la US FDA (Agencia de Alimentos y Drogas de los EEUU) y autoridades locales, y/o dando el soporte técnico ante cualquier otra autoridad.</td>
            </tr>
            <tr>
                <td><img src="./images/FS/serv1_icon2.jpg" style="width:72px;margin-right: 15px;"></td>
                <td style="font-weight: 600;">Acompañamiento técnico hasta aprobación o conformidad de sus trámites.</td>
            </tr>
            <tr>
                <td><img src="./images/FS/serv1_icon3.jpg" style="width:72px;margin-right: 15px;"></td>
                <td style="font-weight: 600;">Informes en español y/o en inglés.</td>
            </tr>
        </table>';
    $servicio_Procesos_Termicos_2 = '
        <table class="tabla_serv_icons">
            <tr>
                <td><img src="./images/FS/serv1_icon4.jpg" style="width:72px;margin-right: 15px;"></td>
                <td style="font-weight: 600;">Seguimos estándares o protocolos internacionales en la ejecución de nuestros estudios.</td>
            </tr>
            <tr>
                <td><img src="./images/FS/serv1_icon5.jpg" style="width:72px;margin-right: 15px;"></td>
                <td style="font-weight: 600;">Estudios descargables en nuestra plataforma on-line</td>
            </tr>
            <tr>
                <td><img src="./images/FS/serv1_icon6.jpg" style="width:72px;margin-right: 15px;"></td>
                <td style="font-weight: 600;">Nuestros estudios son aceptados por todas las autoridades sanitarias y por los principales grupos de compradores a nivel mundial.</td>
            </tr>
        </table>';

    $titulo_servicioInformeTecnicoMermas='Informe Técnico de mermas de existencias';
    $servicio_InformeTecnicoMermas_1 = 'Realizamos estudios a diferentes sectores industriales, los cuales son realizados por un equipo técnico, profesional, competente e independiente y con amplia experiencia. Lo ayudamos a determinar si sus pérdidas de existencias corresponden a mermas o desmedros y en que etapa de sus procesos u operaciones se generan. Determinamos porcentajes o factores de mermas para sus operaciones y procesos específicos, los cuales se sustentan en el “análisis de su proceso productivo”.';
    $servicio_InformeTecnicoMermas_2 = '
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Planificación del estudio y determinación de una metodología de trabajo específica</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Validación de mermas y desmedro mediante trabajo de campo</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Uso de herramientas estadísticas para procesamiento de datos</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Obtención de los procentajes de mermas y desmedro, válidos para fines contables y control de procesos</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Elaboración del informe técnico por un profesional competente e independiente</div></div>';
    $servicio_DisenoSanitarioPlantaAlmacenes='
        El diseño de una planta o almacén debe contemplar el cumplimiento
        de los requisitos legales, normativos y técnicos para
        la proyección y construcción de los ambientes requeridos
        para las operaciones productivas, logísticas y de apoyo que
        garanticen flujos de procesos continuos y eficientes, evitando
        cruces, reprocesos o contaminación durante la producción o
        almacena- miento de productos regulados.
        <br><br>
        La base para garantizar una exitosa implementación de los
        sistemas de calidad e inocuidad es un correcto diseño sanitario
        de la planta de producción o almacenamiento. Sin el
        cual no se podría acceder a obtener autorizaciones y certificaciones
        oficiales y acreditadas por las autoridades sanitarias
        competentes.
        <br><br>
        Contar con la asesoría de especialistas en diseño de plantas
        y almacenes le puede evitar sobrecostos y rediseños innecesarios.';
    $servicio_DisenoSanitarioPlantaAlmacenes_1 = '
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Levantamiento de información de procesos productivos, logísticos y de apoyo</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Diseño preliminar del plano de distribución de ambientes (layout)</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Revisión de propuesta y ajustes</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Diseño final de plano en formato editable</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Informe técnico con recomendaciones de diseño y construcción</div></div>
        ';
    $servicio_DisenoSanitarioPlantaAlmacenes_2='
        <tr>
            <td><img src="./images/icons/10.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Se aplican los conceptos de zonificación higiénica de ambiente basado en el riesgo, conforme a estándares internacionales.</td>
        </tr>
        <tr>
            <td><img src="./images/icons/11.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Se recomiendan las mejores prácticas para el diseño y construcción del establecimiento.</td>
        </tr>
        <tr>
            <td><img src="./images/icons/12.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Distribución de ambientes y disposición de rutas de tránsito de personal, abastecimiento de materias primas y envases, evacuación de residuos sólidos, entre otros requerimientos,para evitar riesgos de cruces en sus operaciones.</td>
        </tr>
        <tr>
            <td><img src="./images/icons/13.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Se toma en cuenta la proyección de ampliaciones futuras.</td>
        </tr>
        ';
    $servicio_DisenoSanitarioPlantaAlmacenes_3='
        <tr>
            <td><img src="./images/icons/14.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Plano arquitectónico de distribución de ambientes a escala.</td>
        </tr>
        <tr>
            <td><img src="./images/icons/8.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Informe técnico con recomendaciones de diseño y construcción.</td>
        </tr>
        ';
    $mapeos_termicos_1='<p style="font-weight: 600;color:#888888; margin">
        Los mapeos permiten asegurar que la temperatura fijada para
        un ambiente o equipo ha sido alcanzada, y que la misma es
        uniforme durante todo el tiempo fijado. Estas pruebas sirven
        además para identificar zonas frías y zonas calientes, las
        cuales deben ser tomadas en consideración al momento de
        establecer las zonas de carga, volúmenes de carga, ubicar
        sensores de control, sensores de monitoreo y realizar validaciones
        microbiológicas.
        </p>
        <h3>Evaluamos</h3>
                        <ul>
                            <li>Cámaras y equipos de congelación/refrigeración. Curvas de
                            congelación/refrigeración.</li>
                            <li>Secadores, cocinadores, tanques, hornos y tostadores.</li>
                            <li> Almacenes en frío y a temperatura ambiente.</li>
                        </ul>';
    $mapeos_termicos_2 = '
        <tr>
            <td><img src="./images/icons/1.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Nuestros estudios son aceptados por todas las autoridades sanitarias y por los principales grupos de compradores a nivel mundial.</td>
        </tr>
        <tr>
            <td><img src="./images/icons/4.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Seguimos estándares o protocolos internacionales en la ejecución de nuestros estudios.</td>
        </tr>
        <tr>
            <td><img src="./images/icons/2.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Estudios descargables en nuestra plataforma on-line</td>
        </tr>
        <tr>
            <td><img src="./images/icons/3.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Informes en español y/o en inglés.</td>
        </tr>';
    $regulacion_fda_1='Adecuamos su sistema de inocuidad alimentaria para que
        cumpla con la regulación de la FDA de los EE. UU. para el
        procesamiento / fabricación / envasado / almacenamiento /
        transporte / distribución / comercialización / importación de
        alimentos de consumo humano y alimentos de consumo
        animal; de esta manera, estará preparado para cumplir de
        manera exitosa las inspecciones y requerimientos de la FDA;
        así como, responder a sus importadores, en el marco del programa
        de control de proveedores extranjeros (FSVP).';
    $regulacion_fda_2='<div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Auditoría de diagnóstico y plan de trabajo</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Diseño e implementación de la norma de interés</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Auditoría interna para verificación de cumplimiento de la regulación aplicable</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Capacitación "oficial" para formar individuos calificados y "no oficial" para personal de planta</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Soporte técnico durante auditorías realizadas por la FDA</div></div>';
    $regulacion_fda_3='
        <tr>
            <td><img src="./images/icons/1.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Soporte técnico permanente al equipo de inocuidad para dar respuesta o participar en las reuniones con la FDA.</td>
        </tr>
        <tr>
            <td><img src="./images/icons/4.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;">Aplicación de metodologías recomendadas por la FDA.</td>
        </tr>
        ';
    $regulacion_fda_4='
        <tr>
            <td><img src="./images/icons/3.png" style="width:52px;margin-right: 15px;"></td>
            <td style="font-weight: 600;text-align: left;">Documentos elaborados en formato electrónico, en versión castellano – inglés.</td>
        </tr>
        ';
    $inocuidadAlimentaria_1='
        Con nuestro soporte técnico y legal, diseña, implementa, actualiza y mejora continuamente tu sistema de gestión de inocuidad alimentaria con base a los requisitos
        establecidos por la normativa de tu país, de los países destino de tus productos o por los estándares internacionales requeridos por tus clientes.
        ';
    $sistemas_IntegradosGestion_1='Brindamos soluciones en el desarrollo,implementación, mantenimiento y seguimiento de sus proyectos en Sistemas de Gestión ISO 9001, ISO 14001 y ISO 45001 que le permitan lograr una permanente mejora en la eficacia y productividad, identificar y 
        controlar sus riesgos y gestionar las oportunidades en todos sus procesos con elfin de lograr la satisfacción de sus clientes y partes interesadas. 
        Nuestro objetivo,su certificac ión u homologación de sus sistema de gestión.
        <br><br>
        Nuestros servicios de consultoría lo llevan a obtener, de manera exitosa, la certificación u homologación de su sistema de gestión requerido o implementado a fin de dar cumplimiento a requisitos legales,de sus clientes u otras partes interesadas.';
    
    $sistemas_IntegradosGestion_2='
        <div style="display: block; color:#2f3980; font-weight:bold;font-family: Arial Black;">Brindamos soporte técnico en las siguientes normas:</div>
        <table style="width:100%;background: #fff;margin-bottom: 20px;">
            <thead>
                <tr>
                    <th style="padding:10px 20px;background: #2f3980;color: #fff;">Sistema de Gestión</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="lista_p_servic" style="text-align: left; padding: 10px 20px;">
                        <ul>
                            <li>Sistema de gestión de calidad</li>
                            <li>Sistemas de gestión ambiental</li>
                            <li>Sistemas de gestión de la seguridad y salud en el trabajo</li>
                            <li>Sistemas integrados de gestión</li>
                            <li>Según criterios de Evaluación de proveedores</li>
                        </ul>
                        
                    </td>
                </tr>
            </tbody>
        </table>
        ';
    $sistemas_IntegradosGestion_3='
        <table style="width:100%;background: #fff;margin-bottom: 20px;">
            <thead>
                <tr>
                    <th style="padding:10px 20px;background: #2f3980;color: #fff;">Certificación</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="lista_p_servic" style="text-align: left; padding: 10px 20px;">
                        <ul>
                            <li>ISO 9001 - Requisitos</li>
                            <li>ISO 14001 - Requisitos con orientación para su uso</li>
                            <li>ISO 45001 - Requisitos con orientación para su uso</li>
                            <li>ISO 9001, ISO 14001, ISO 45001</li>
                            <li>Constancia de homologación - Requisito de evaluación de proveedores</li>
                        </ul>
                        
                    </td>
                </tr>
            </tbody>
        </table>';
    $sistemas_IntegradosGestion_4='
        <div class="row cuadros_prog cuad5">
            <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Auditoría de diagnóstico y plan de trabajo para implementación</div></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Diseño e implementación del sistema de inocuidad alimentaria</div></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Auditoria interna para verificación de cumplimiento</div></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Capacitación del personal</div></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Soporte técnico en el proceso de certificación</div></div>
        </div>';
    $sistemas_IntegradosGestion_5='
        <table class="tabla_serv_icons">
            <tr>
                <td>
                    <img src="./images/icons/18.png" style="width:52px;margin-right: 15px;">
                </td>
                <td style="font-weight: 600; text-align: left;">
                El staff de consultores tiene competencia en la implementación de estándares internacionales reconocidos por la Organización
        Internacional de Normalización (ISO), lo que garantiza que se recojan las mejores prácticas y enfoques, de tal forma que nuesros clientes
        puedan afrontar de manera exitosa las auditorias de homologación o certificación.
                </td>
            </tr>
        </table>
        ';
    $sistemas_IntegradosGestion_6='
        <table class="tabla_serv_icons">
            <tr>
                <td>
                    <img src="./images/icons/5.png" style="width:52px;margin-right: 15px;">
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
                Asistencia técnica durante el proceso de certificación u homologación de proveedores y levantamiento de no conformidades
        que conlleve a aprobar de manera exitosa la auditoría de homologación o certificación.
                </td>
            </tr>
        </table>
        ';
    $RegistrosAutorizacionesCertificaciones_1='
        Gestiona con nosotros tus permisos, certificaciones oficiales y privadas en el país como en los principales países de destino.<br><br>
        Ofrecemos un servicio de calidad cumpliendo con los más altos estándares en gestiones para al obtención de permisos de las diferentes categorías de productos regulados tales como:alimentos,cosméticos,sanitarios fármacos, higiene, juguetes,  útiles  de  escritorio, etc. tanto a nivel de productocomo planta de producción.almacenes y laboratorios.
        ';

    $ValidacionEtiquetadoAlimentos_1='Asegura que las etiquetas de tus productos cumplan con los requisitos normativos de los países de destino.';
    $ValidacionEtiquetadoAlimentos_2='';
    $ValidacionEtiquetadoAlimentos_3='';
    $ValidacionEtiquetadoAlimentos_4='';
    $ValidacionEtiquetadoAlimentos_5='
        <div class="col-lg-6 col-md-12 text-center">
            <table class="tabla_serv_icons" style="margin:auto">
                <tr>
                    <td>
                        <img src="./images/icons/18.png" style="width:52px;margin-right: 15px;">
                    </td>
                    <td style="font-weight: 600; text-align: left;">
                        Evita detenciones o sanciones.
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="./images/icons/8.png" style="width:52px;margin-right: 15px;">
                    </td>
                    <td style="font-weight: 600; text-align: left;">
                        Evita sobrecostos de reetiquetado.
                    </td>
                </tr>
            </table>
        </div>

        <div class="col-lg-6 col-md-12 text-center">
            <table class="tabla_serv_icons" style="margin:auto">
                <tr>
                    <td>
                        <img src="./images/icons/18.png" style="width:52px;margin-right: 15px;">
                    </td>
                    <td style="font-weight: 600; text-align: left;">
                        Da a conocer las bondades nutricionales de tu producto mediante alegaciones que se ajusten a la normatividad. Ej. "Saludable"
                    </td>
                </tr>
            </table>
        </div>';
    

}

$serv5_1[] = array(
    "imagen"=>'pag5_1_img.jpg', 
    "titulo1"=>'Ley FSMA', 
    "titulo2"=>'Norma de controles preventivos para alimentos de consumo humano', 
    "subtitulo1"=>'US FDA CFR 21 Parte 117',
    "texto"=>'Esta norma requiere que las instalaciones de alimentos cuenten con un plan de seguridad alimentaria que incluya un análisis de peligros y controles preventivos basados en riesgos para minimizar o prevenir los peligros identificados.
    <br><br>
    Nuestra empresa le brinda asistencia técnica para
    elaborar e implementar un plan de inocuidad alimentaria
    que describa, entre otros aspectos:'
);

$serv5_1_col1[] = array("icon" => "15.png", "text" => "El análisis de peligros y evaluación de riesgos.");
$serv5_1_col1[] = array("icon" => "16.png", "text" => "La determinación de controles y controles preventivos.");
$serv5_1_col1[] = array("icon" => "9.png", "text" => "El seguimiento (monitoreo), acciones correctivas y verificación.");
$serv5_1_col2[] = array();
$serv5_1_col3_0 = "<div style='font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px'>Asi mismo le brindamos:</div>";
$serv5_1_col3[] = array("icon" => "1.png", "text" => "Curso Oficial en Controles Preventivos para Alimentos de Consumo Humano (Certificación PCQI). Certificado emitido por FSPCA.");
$serv5_1_col3[] = array("icon" => "17.png", "text" => "Cursos no oficiales en la interpretación e implementación de la norma para formar al equipo de inocuidad y personal de planta.");





$serv5_2[] = array(
    "imagen"=>'pag5_2_img.jpg', 
    "titulo1"=>'Ley FSMA', 
    "titulo2"=>'Norma de controles preventivos para alimentos de consumo animal', 
    "subtitulo1"=>'US FDA CFR 21 Parte 507',
    "texto"=>'Esta regulación requiere que las instalaciones de alimentos para animales cuenten con un plan de inocuidad alimentaria que incluya un análisis de peligros para determinar cuáles necesitan control y controles preventivos basados en riesgos para minimizar o prevenir esos peligros.
<br><br>
Nuestra empresa le brinda asistencia técnica para elaborar e implementar un plan de inocuidad alimentaria que describa, entre otros aspectos:'
);
$serv5_2_col1[] = array("icon" => "15.png", "text" => "El análisis de peligros y evaluación de riesgos.");
$serv5_2_col1[] = array("icon" => "16.png", "text" => "La determinación de controles y controles preventivos.");
$serv5_2_col1[] = array("icon" => "9.png", "text" => "El seguimiento (monitoreo), acciones correctivas y verificación.");
$serv5_2_col2[] = array();
$serv5_2_col3_0 = "<div style='font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px'>Asi mismo le brindamos:</div>";
$serv5_2_col3[] = array("icon" => "1.png", "text" => "Curso Oficial en Controles Preventivos para Alimentos de Consumo Humano (Certificación PCQI). Certificado emitido por FSPCA.");
$serv5_2_col3[] = array("icon" => "17.png", "text" => "Cursos no oficiales en la interpretación e implementación de la norma para formar al equipo de inocuidad y personal de planta.");





$serv5_3[] = array(
    "imagen"=>'pag5_3_img.jpg', 
    "titulo1"=>'Ley FSMA', 
    "titulo2"=>'Norma de inocuidad para productos agrícolas frescos', 
    "subtitulo1"=>'US FDA CFR 21 Parte 112',
    "texto"=>'Esta regulación establece los estándares mínimos basados en la ciencia para el cultivo (producción primaria), la cosecha, el empaque y la conservación de frutas y vegetales frescos, que conlleve a prevenir la contaminación microbiana y reducir las enfermedades transmitidas por los alimentos asociadas con los productos frescos. Estos estándares se basan en la aplicación de las Buenas Prácticas Agrícolas (BPA).
<br><bn>
Aunque la norma de inocuidad de productos agrícolas frescos no requiere de un plan de inocuidad para su sitio, nuestra empresa le brinda asistencia técnica para elaborar e implementar un plan que describa, entre otros aspectos:'
);
$serv5_3_col1[] = array("icon" => "15.png", "text" => "Prácticas para reducir los riesgos de inocuidad de los alimentos.");
$serv5_3_col1[] = array("icon" => "16.png", "text" => "Procedimientos de Operación Estándar (POE).");
$serv5_3_col1[] = array("icon" => "9.png", "text" => "Plan de trazabilidad y de retiro de producto del mercado.");
$serv5_3_col2[] = array();
$serv5_3_col3_0 = "<div style='font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px'>Asi mismo le brindamos:</div>";
$serv5_3_col3[] = array("icon" => "1.png", "text" => "Curso Oficial Produce Safety Alliance. Curso de Capacitación para Productores – Inocuidad de los Productos Agrícolas Frescos (Grower Training). Certificado emitido por AFDO y PSA.");
$serv5_3_col3[] = array("icon" => "17.png", "text" => "Cursos no oficiales en la interpretación e implementación de la norma para formar al equipo de inocuidad y personal de planta.");





$serv5_4[] = array(
    "imagen"=>'pag5_4_img.jpg', 
    "titulo1"=>'Ley FSMA', 
    "titulo2"=>'Programa de verificación de proveedores extranjeros (FSVP)', 
    "subtitulo1"=>'US FDA CFR 21 Parte 1 Subparte L',
    "texto"=>'El Programa de Verificación de Proveedores Extranjeros (FSVP) forma parte de FSMA (Ley de Modernización de Seguridad Alimentaria) de la FDA y tiene como objeto, garantizar que los alimentos importados cumplan con el mismo nivel de estándares de
seguridad alimentaria que se requieren para los alimentos producidos en los EE. UU. y el importador estadounidense de alimentos, tiene la responsabilidad de garantizar que sus proveedores extranjeros cumplan las normas de protección de la salud pública, incluidas las normas de inocuidad, los controles preventivos y el etiquetado correcto. 
<br><br>
Nuestra empresa le brinda asistencia técnica para elaborar e implementar su programa FSVP que describa, entre otros aspectos:
'
);
$serv5_4_col1[] = array("icon" => "15.png", "text" => "El análisis de peligros y evaluación de riesgos para todos los productos que importa");
$serv5_4_col1[] = array("icon" => "16.png", "text" => "El procedimiento para la evaluación, aprobación y verificación del proveedor extranjero.");
$serv5_4_col1[] = array("icon" => "9.png", "text" => "Así como, la ejecución del programa de evaluación, aprobación y verificación del proveedor extranjero y su reevaluación.");
$serv5_4_col2[] = array();
$serv5_4_col3_0 = "<div style='font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px'>Asi mismo le brindamos:</div>";
$serv5_4_col3[] = array("icon" => "1.png", "text" => "Curso Oficial de Entrenamiento Foreing Supplier Verification Programs (FSVP). Certificado emitido por FSPCA.");
$serv5_4_col3[] = array("icon" => "17.png", "text" => "Cursos no oficiales en la interpretación e implementación de la norma para formar al equipo de inocuidad y personal de planta.");
$serv5_4_col3[] = array("icon" => "16.png", "text" => "Auditorias a sus proveedores, con informes completos en español e inglés.");






$serv5_5[] = array(
    "imagen"=>'pag5_5_img.jpg', 
    "titulo1"=>'Ley FSMA', 
    "titulo2"=>'Estrategias de mitigación para proteger los alimentos contra la adulteración intencional (Food defense)', 
    "subtitulo1"=>'US FDA CFR 21 Parte 121',
    "texto"=>'Esta regulación tiene como objetivo prevenir la adulteración intencional de actos destinados a causar daños a gran escala a la salud pública, incluidos los actos de terrorismo dirigidos al suministro de alimentos. Tales actos, aunque no es probable que ocurran, podrían causar enferme- dad, muerte, trastornos económicos del suministro de alimentos en caso no se establezcan estrategias de mitigación para aquellas vulnerabilidades significativas identificadas, luego de una evaluación de vulnerabilidades.

La adulteración intencional económica se aborda en las normas de controles preventivos para alimentos de consumo humano y de consumo animal, respectivamente.

Nuestra empresa le brinda asistencia técnica para elaborar e implementar un plan de defensa alimentaria que describa, entre otros aspectos:'
);
$serv5_5_col1[] = array("icon" => "12.png", "text" => "La selección de la metodología de evaluación de vulnerabilidades (evaluación de amenazas de acuerdo con la GFSI).");
$serv5_5_col1[] = array("icon" => "18.png", "text" => "La identificación de vulnerabilidades y estrategias de mitigación existentes mediante una inspección de instalaciones");
$serv5_5_col1[] = array("icon" => "15.png", "text" => "La evaluación de vulnerabilidades y determinación de vulnerabilidades significativas.");
$serv5_5_col1[] = array("icon" => "8.png", "text" => "La determinación de pasos accionables de proceso y estrategias de mitigación.");
$serv5_5_col2[] = array();
$serv5_5_col3_0 = "<div style='font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px'>Asi mismo le brindamos:</div>";
$serv5_5_col3[] = array("icon" => "4.png", "text" => "Los componentes de gestión de las estrategias de mitigación: seguimiento, acciones correctivas y verificación.");
$serv5_5_col3[] = array("icon" => "8.png", "text" => "Preparación y reanálisis del plan de defensa alimentaria.");
$serv5_5_col3[] = array("icon" => "17.png", "text" => "Curso no oficial en la interpretación e implementación de la norma que abarque:<br>
- Revisión de la regla final de adulteración intencional.<br>
- Actividades típicas claves (KAT).<br>
- Evaluación de vulnerabilidades.<br>
- Estrategias de mitigación.");






$serv5_6[] = array(
    "imagen"=>'pag5_6_img.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Norma HACCP para productos pesqueros (pescados y mariscos)', 
    "subtitulo1"=>'US FDA CFR 21 Parte 123',
    "texto"=>'La regulación HACCP para pescados y mariscos requiere que los procesadores e importadores de pescados y mariscos identifiquen los peligros para la inocuidad de los alimentos que tienen una probabilidad razonable de ocurrir y desarrollen planes para el control de esos peligros. Es importante destacar que varias de las regulaciones que la FDA ha emitido en virtud de la FSMA brindan exenciones relacionadas con la regulación HACCP de pescados y mariscos. Es importante, abordar esas exenciones y proporcionar información sobre la relación con las regulaciones de FSMA.
<br><br>
Nuestra empresa le brinda asistencia técnica para elaborar e implementar el plan HACCP que describa, entre otros aspectos:
'
);
$serv5_6_col1[] = array("icon" => "15.png", "text" => "El análisis de peligros y evaluación de riesgos.");
$serv5_6_col1[] = array("icon" => "19.png", "text" => "La determinación de los PCC y LC.");
$serv5_6_col1[] = array("icon" => "4.png", "text" => "El seguimiento (monitoreo), acciones correctivas y verificación.");
$serv5_6_col1[] = array("icon" => "8.png", "text" => "Programas Prerrequisito BPM – BPM actuales (US FDA CFR 21 Parte 117B).");
$serv5_6_col2[] = array();
$serv5_6_col3[] = array("icon" => "8.png", "text" => "Otros requerimientos regulatorios aplicables a FSMA y requisitos a importadores.");
$serv5_6_col3[] = array("icon" => "1.png", "text" => "Curso Oficial para la Formación de Individuos Calificados en la Norma HACCP para Pescados y Mariscos de SeaFood HACCP Alliance. Certificado emitido por AFDO y SHA.");
$serv5_6_col3[] = array("icon" => "17.png", "text" => "Cursos no oficiales en la interpretación e implementación de la norma para formar al equipo de inocuidad y personal de planta.");






$serv5_7[] = array(
    "imagen"=>'pag5_7_img.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Norma HACCP para jugos', 
    "subtitulo1"=>'US FDA CFR 21 Parte 120',
    "texto"=>'La regulación HACCP para jugos requiere que los procesadores de jugos identifiquen los peligros para la inocuidad de los alimentos que tienen una probabilidad razonable de ocurrir con los productos que procesan y que desarrollen planes para el control de esos peligros. Es importante destacar que varias de las regulaciones que la FDA ha emitido en virtud de la FSMA brindan exenciones relacionadas con la reglamentación HACCP para jugos. Es importante, abordar esas exenciones y proporcionar información sobre la relación con las regulaciones de FSMA.
<br><br>
Nuestra empresa le brinda asistencia técnica para elaborar e implementar el plan HACCP que describa, entre otros aspectos:');
$serv5_7_col1[] = array("icon" => "15.png", "text" => "El análisis de peligros y evaluación de riesgos.");
$serv5_7_col1[] = array("icon" => "19.png", "text" => "La determinación de los PCC y LC.");
$serv5_7_col1[] = array("icon" => "4.png", "text" => "El seguimiento (monitoreo), acciones correctivas y verificación.");
$serv5_7_col1[] = array("icon" => "8.png", "text" => "Programas Prerrequisito BPM – BPM actuales (US FDA CFR 21 Parte 117B).");
$serv5_7_col2[] = array();
$serv5_7_col3[] = array("icon" => "8.png", "text" => "Otros requerimientos regulatorios aplicables a FSMA y requisitos a bimportadores.");
$serv5_7_col3[] = array("icon" => "1.png", "text" => "Curso Oficial para la Formación de Individuos Calificados en la Norma HACCP para Pescados y Mariscos de SeaFood
HACCP Alliance. Certificado emitido por AFDO y SHA.");
$serv5_7_col3[] = array("icon" => "17.png", "text" => "Cursos no oficiales en la interpretación e implementación de la norma para formar al equipo de inocuidad y personal de planta.");






$serv5_8[] = array(
    "imagen"=>'pag5_8_img.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Norma para alimentos de baja acidez procesados térmicamente', 
    "subtitulo1"=>'US FDA CFR 21 Parte 113',
    "texto"=>'Esta Norma establece lineamientos para el adecuado procesamiento de productos de baja acidez empacados en envases herméticamente sellados, a fin de asegurar su inocuidad debido al alto riesgo que representan. Detalla las características que deben
cumplir los equipos e instrumentos utilizados para el procesamiento, los controles de proceso que se deben implementar, los registros que se deben llevar, entre otros.
<br><br>Nuestra empresa le brinda asistencia técnica para adecuarse a la norma:');
$serv5_8_col1[] = array("icon" => "11.png", "text" => "Selección adecuada de equipos e instrumentación que cumpla lo establecido por FDA.");
$serv5_8_col1[] = array("icon" => "8.png", "text" => "Estudios de validación térmica.");
$serv5_8_col1[] = array("icon" => "1.png", "text" => "Obtención de los registros oficiales (FCE y SID).");
$serv5_8_col1[] = array("icon" => "18.png", "text" => "Auditorías tipo FDA de la línea y de su sistema.");
$serv5_8_col2[] = array();
$serv5_8_col3[] = array("icon" => "5.png", "text" => "Soporte técnico durante las inspecciones oficiales de la FDA.");
$serv5_8_col3[] = array("icon" => "5.png", "text" => "Soporte técnico para dar respuesta a las solicitudes de la FDA.");
$serv5_8_col3[] = array("icon" => "1.png", "text" => "Capacitación oficial en tratamiento térmico.");






$serv5_9[] = array(
    "imagen"=>'pag5_9_img.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Norma para alimentos acidificados', 
    "subtitulo1"=>'US FDA CFR 21 Parte 114',
    "texto"=>'Esta regulación establece lineamientos para el adecuado procesamiento de productos de acidificados a fin de asegurar su inocuidad, debido al alto riesgo que representa su inadecuada acidificación. Detalla los tipos de controles de proceso y registro que deben mantenerse.
<br><br>
Nuestra empresa le brinda asistencia técnica para adecuarse a la norma:
');
$serv5_9_col1[] = array("icon" => "11.png", "text" => "Selección adecuada de equipos e instrumentación que cumpla lo establecido por FDA.");
$serv5_9_col1[] = array("icon" => "8.png", "text" => "Estudios de validación térmica.");
$serv5_9_col1[] = array("icon" => "1.png", "text" => "Obtención de los registros oficiales (FCE y SID).");
$serv5_9_col1[] = array("icon" => "18.png", "text" => "Auditorías tipo FDA de la línea y de su sistema.");
$serv5_9_col2[] = array();
$serv5_9_col3[] = array("icon" => "5.png", "text" => "Soporte técnico durante las inspecciones oficiales de la FDA.");
$serv5_9_col3[] = array("icon" => "5.png", "text" => "Soporte técnico para dar respuesta a las solicitudes de la FDA.");
$serv5_9_col3[] = array("icon" => "1.png", "text" => "Capacitación oficial en tratamiento térmico.");






// $serv5_10[] = array(
//     "imagen"=>'pag5_10_img.jpg', 
//     "titulo1"=>'', 
//     "titulo2"=>'xxxxxxx', 
//     "subtitulo1"=>'xxxxxxx',
//     "texto"=>'xxxxx
// ');
// $serv5_10_col1[] = array("icon" => "15.png", "text" => "xxxx");
// $serv5_10_col2[] = array();
// $serv5_10_col3[] = array("icon" => "9.png", "text" => "xxxxxxx");






$serv6_1[] = array(
    "imagen"=>'6_1_1.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Principios Generales de Higiene / Programas de prerrequisito / Sitema HACCP', 
    "subtitulo1"=>'',
    "texto"=>'Nuestros servicios de consultoría lo llevan a obtener, 
    de manera exitosa, las certificaciones o autorizaciones
    que su negocio alimentario requiere para el cumplimiento
    de requisitos legales establecidos por las autoridades 
    competentes, de sus clientes u otras partes interesadas
    de la cadena alimentaria.
    <br><br>
    Nuestro soporte técnico es realizado para la obtención
    de las siguientes certificaciones / autorizaciones.
');
$serv6_1_col0 = '
<table style="width:100%;background: #fff;margin-bottom: 20px;">
    <thead>
        <tr>
            <th style="padding:10px 20px;background: #2f3980;color: #fff;">Autoridad</th>
            <th style="padding:10px 20px;background: #2f3980;color: #fff;">Alcance</th>
            <th style="padding:10px 20px;background: #2f3980;color: #fff;">Certificación / Autorización</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">DGESA</td>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">PGH  / Sistema HACCP</td>
            <td class="lista_p_servic" style="text-align: left; padding: 10px 20px;">
                <ul>
                    <li>Principio Generales de Higiene para Almacenes.</li>
                    <li>Certificación de los Principios Generales de Higiene para MIPES.</li>
                    <li>Certificación de la Validación Técnica Oficial del Plan HACCP - Planta.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">SENASA</td>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">BPA / Sistema HACCP</td>
            <td class="lista_p_servic" style="text-align: left; padding: 10px 20px;">
                <ul>
                    <li>Buenas Prácticas Agrícolas.</li>
                    <li>Autorización Sanitaria de Establecimiento.</li>
                    <li>Autorización Sanitaria para Cámaras de Almacenamiento.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">SANIPES</td>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">BPM / Sistema HACCP</td>
            <td class="lista_p_servic" style="text-align: left; padding: 10px 20px;">
                <ul>
                    <li>Protocolo de Buenas Prácticas de Manufactura para Transportes.</li>
                    <li>Protocolo de Habilitación Sanitaria de Establecimiento.</li>.
                </ul>
            </td>
        </tr>
        <tr>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">Municipalidades</td>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">PGH</td>
            <td class="lista_p_servic" style="text-align: left; padding: 10px 20px;">
                <ul>
                    <li>Certificación de los Principios Generales de Higiene para
                    Restaurantes.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">Organismos de certificación privados</td>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">BPH / Sistema HACCP</td>
            <td class="lista_p_servic" style="text-align: left; padding: 10px 20px;">
                <ul>
                    <li>Certificación de las Buenas prácticas de higiene (BPH) de acuerdo con el Codex Alimentarius.</li>
                    <li>Certificación del Sistema de análisis de peligros y puntos críticos de control (HACCP) de acuerdo con el Codex Alimentarius.</li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>

<div class="col-lg-12 text-left">
<img src="./images/FS/serv13_3.png?v=3" class="servicios_detalle" style="max-width:330px !important; margin-bottom:10px">
</div>
<div class="col-lg-12 col-md-12 text-center">
    <div class="row cuadros_prog cuad5">
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Auditoría de diagnóstico y plan de trabajo para implementación</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Diseño e implementación del sistema de inocuidad alimentaria</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Auditoria interna para verificación de cumplimiento</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Capacitación del personal</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Soporte técnico en el proceso de certificación</div></div>
    </div>
</div>
<div class="col-lg-12 col-md-12 text-left">
    <img src="./images/FS/serv7_6.jpg?v=2" class="servicios_detalle" style="max-width:100%">
</div>
';
$serv6_1_col1[] = array("icon" => "18.png", "text" => "El staff de consultores tiene competencia en la implementación de estándares
internacionales reconocidos por la GFSI, lo que garantiza que los programas 
de prerrequisito / principios generales de higiene y el sistema HACCP recoja
las mejoras prácticas y enfoques, de tal forma que el cliente podrá afrontar
de manera exitosa las auditorias de clientes y otras partes interesadas.");
$serv6_1_col2[] = array();
$serv6_1_col3[] = array("icon" => "5.png", "text" => "Soporte técnico y legal en temas relacionados al servicio.");
$serv6_1_col3[] = array("icon" => "4.png", "text" => "Asistencia técnica durante el proceso de certificación y  levantamiento de no conformidades que conlleve a aprobar de manera exitosa la auditoria externa.");
$serv6_1_col4[] = ('<div class="col-lg-12 col-12 text-left"><img src="./images/FS/6_1_final.jpg" style="width:100%; max-width:322px"></div>
<div class="col-lg-6 col-12">
<div class="lista_p_servic" style="padding:0">
    <ul>
        <li>Validación de medidas de control/límites críticos/PCC. </li>
        <li>Validación microbiológica.</li>
        <li>Programa de control de proveedores.</li>
    </ul>
</div>
</div>
');





$serv6_2[] = array(
    "imagen"=>'serv_6_2.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Gestión de inocuidad alimentaria', 
    "subtitulo1"=>'',
    "texto"=>'Cada vez, los mercados son más exigentes y requieren de mayores garantías sobre la inocuidad, calidad, legalidad y autenticidad de los productos alimenticios que adquieren a sus proveedores; en este sentido, para mejorar la competitividad, se hace necesario la certificación de estándares internacionales, es el caso de los esquemas reconocidos por la GFSI o por otras organizaciones de renombre, como AIB International.
<br><br>
Nuestros servicios están dirigidos para darle el soporte técnico para la obtención de la certificación de los siguientes estándares:
<br>
<div class="row lista_p_servic" style="padding:0">
    <div class="col-lg-6 col-md-6 col-sm-6 text-left">
        <ul>
            <li>BRCGS </li>
            <li>FSSC 22000</li>
            <li>SQF </li>
        </ul>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 text-left">
        <ul>
            <li>IFS</li>
            <li>GLOBALGAP </li>
            <li>AIB International</li>
        </ul>
    </div>
</div>
<br><style>.lista_p_servic{padding-bottom:0}</style>
Para los siguientes sectores de la cadena alimentaria y sectores
de apoyo:');
$serv6_2_col0 = '

<div class="col-lg-12 col-md-12 text-center">
    <div class="row cuadrosAzul cuad7">
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
            <div style="display: table-caption;background: none;">
                <img src="./images/icons/icon6_2_1.png" style="display:block;width: auto; height:60px;text-align: center;margin: auto;">
            </div>
            <div>Producción primaria</div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
            <div style="display: table-caption;background: none;">
                <img src="./images/icons/icon6_2_2.png" style="display:block;width: auto; height:60px;text-align: center;margin: auto;">
            </div>
            <div>Procesamiento primario de alimentos para consumo humano</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
            <div style="display: table-caption;background: none;">
                <img src="./images/icons/icon6_2_3.png" style="display:block;width: auto; height:60px;text-align: center;margin: auto;">
            </div>
            <div>Fabricación de alimentos para consumo humano</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
            <div style="display: table-caption;background: none;">
                <img src="./images/icons/icon6_2_4.png" style="display:block;width: auto; height:60px;text-align: center;margin: auto;">
            </div>
            <div>Fabricación de alimentos de consumo animal</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
            <div style="display: table-caption;background: none;">
                <img src="./images/icons/icon6_2_5.png" style="display:block;width: auto; height:60px;text-align: center;margin: auto;">
            </div>
            <div>Almacenamiento y distribución</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
            <div style="display: table-caption;background: none;">
                <img src="./images/icons/icon6_2_6.png" style="display:block;width: auto; height:60px;text-align: center;margin: auto;">
            </div>
            <div>Agentes y brokers</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6">
            <div style="display: table-caption;background: none;">
                <img src="./images/icons/icon6_2_7.png" style="display:block;width: auto; height:60px;text-align: center;margin: auto;">
            </div>
            <div>Fabricación de envases y materiales de envasado</div></div>
    </div>
</div>


<div class="col-lg-12 col-sm-12 text-left">
    <div style="font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px; margin-bottom:15px; margin-top:15px">Metodología de trabajo</div>
</div>
<div class="col-lg-12 col-md-12 text-center">
    <div class="row cuadros_prog cuad5">
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Auditoría de diagnóstico y plan de trabajo para implementación</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Diseño e implementación del sistema de gestión</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Auditoría interna para verificación de cumplimiento</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Capacitación del personal</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Soporte técnico en el proceso de certificación</div></div>
    </div>
</div>
<div class="col-lg-12 col-sm-12 text-left">
    <div style="font-weight:bold; color:#2f3980; font-family:Arial Black; font-size:24px;padding:10px; margin-bottom:0px; margin-top:15px">Valor agregado</div>
</div>
';
$serv6_2_col1[] = array("icon" => "18.png", "text" => "El staff de consultores tiene competencia en la implementación de estándares
internacionales reconocidos por la GFSI, lo que garantiza que los programas 
de prerrequisito / principios generales de higiene y el sistema HACCP recoja
las mejoras prácticas y enfoques, de tal forma que el cliente podrá afrontar
de manera exitosa las auditorias de clientes y otras partes interesadas.");
$serv6_2_col2[] = array();
$serv6_2_col3[] = array("icon" => "5.png", "text" => "Soporte técnico y legal en temas relacionados al servicio.");
$serv6_2_col3[] = array("icon" => "4.png", "text" => "Asistencia técnica durante el proceso de certificación y  levantamiento de no conformidades que conlleve a aprobar de manera exitosa la auditoria externa.");





$serv8_1[] = array(
    "imagen"=>'pag8_1_img.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Registros FDA', 
    "subtitulo1"=>'(Agencia de Alimentos y Drogas de los EEUU)',
    "texto"=>'Le ayudamos a cumplir con las exigencias de los EEUU y evitar inconvenientes para el ingreso de sus productos.
<br><br>
<b style="font-family: arial black;color: #2b3576;font-size:15px">Le ofrecemos:</b>
<div class="lista_p_servic" style="padding:0">
<ul>
<li>Registro FDA – Registro de Bioterrorismo (Food Facility Registration): trámite de obtención y renovación.</li>
<li>Servicio US Agent: punto de contacto de su empresa ante la FDA, bajo el alcance del Registro FDA.</li>
<li>Número DUNS – Unique Facility Identifier (UFI) aceptado por la FDA: trámite de obtención o actualización.</li>
<li>Registro FCE – Registro como Planta Enlatadora (Food Canning Establishment): trámite de obtención y actualización.</li>
<li>Registro SID# por producto/envase (Serial Identifier Number):
en combinación con nuestro servicio de validación térmica.</li>
<li>Remoción del estatus de “Import Alert”: preparación del expediente técnico, soporte y seguimiento hasta que sea removido de la lista.</li>
<li>Respuesta ante la FDA: por observaciones o incumplimiento de la normativa, detectadas a través de inspecciones, muestreos o solicitudes de información.</li>
</ul>
</div>

<div class="col-12"><img src="./images/FS/serv5_4_titulo.jpg" style="margin-bottom:0px;margin-top:15px;"><style>.lista_p_servic{padding-bottom:0}</style></div>
');
$serv8_1_col1[] = array("icon" => "18.png", "text" => "Contamos con profesionales altamente capacitados y especializados, con más de 20 años de experiencia. Nuestros especialistas son de la industria, la academia y las autoridades sanitarias (ex FDA).");
$serv8_1_col2[] = array();
$serv8_1_col3[] = array("icon" => "5.png", "text" => "Ofrecemos atención inmediata y soporte técnico permanente.");
$serv8_1_col4[] = ('<div class="col-lg-6 col-12"><img src="./images/FS/8_1_4_1.jpg" style="width:100%"></div><div class="col-lg-6 col-12"><img src="./images/FS/8_1_4_2.jpg" style="width:100%"></div>');






$serv8_2[] = array(
    "imagen"=>'pag8_2_img.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Fábrica, Almacenes y Transporte', 
    "subtitulo1"=>'Los alimentos y bebidas de consumo humano deben ser fabricados,
almacenados y transportados en condiciones que se proteja su calidad sanitaria e inocuidad alimentaria de acuerdo con los requisitos legales establecidos por las autoridades competentes, sea la DIGESA, SENASA o SANIPES.'
);
$serv8_2_col4[] = '
    <div class="col-lg-4 col-md-6 text-center">
        <a href="./subs.php?s=serv8_2&l=serv8_2_1"><img src="./images/FS/8_2_1.jpg" class="servicios_detalle" style="max-width:310px !important"></a>
    </div>
    <div class="col-lg-4 col-md-6 text-center">
        <a href="./subs.php?s=serv8_2&l=serv8_2_2"><img src="./images/FS/8_2_2.jpg" class="servicios_detalle" style="max-width:310px !important"></a>
    </div>
    <div class="col-lg-4 col-md-6 text-center">
        <a href="./subs.php?s=serv8_2&l=serv8_2_3"><img src="./images/FS/8_2_3.jpg" class="servicios_detalle" style="max-width:310px !important"></a>
    </div>
';


$serv8_2_1[] = array(
    "imagen"=>'pag8_2_1.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Autorizacion Sanitaria de Funcionamiento de Droguerias (BPA Digemid)', 
    "subtitulo1"=>'',
    "texto"=>'A fin de que puedas importar productos sanitarios, cosméticos, dispositivos médicos o fármacos, tu empresa debe convertirse en una 
    “droguería”. La autorización de droguería la obtienes implementando las Buenas Prácticas de Almacenamiento en 
    un almacén propio o dentro de un operador logístico.
    <div class="lista_p_servic" style="padding:0">
<ul>
<li>Nos hacemos cargo de todo el proceso. Docu-
mentamos el sistema a través de manuales y
procedimientos de fácil lectura y aplicación.</li>
<li>De requerirlo, te asignamos un Director Técnico
(Químico Farmacéutico) en el horario mas conve-
niente a tu operación y volumen de mercadería.</li>
</ul>
</div>
<style>.lista_p_servic{padding-bottom:0}</style>
<div style="color:#2f3980; font-weight:bold; font-size:26px; margin-top:40px">Beneficios</div>
');
$serv8_2_1_col1[] = array("icon" => "4.png", "text" => "Logra en un corto plazo la posibilidad de importar productos regulados por DIGEMID");
$serv8_2_1_col2[] = array();
$serv8_2_1_col3[] = array("icon" => "1.png", "text" => "Cumple con la normativa sanitaria en BPA de manera eficiente y rentable.");




$serv8_2_2[] = array(
    "imagen"=>'pag8_2_2.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Autorizacion Sanitaria de Funcionamiento de Laboratorios (BPM Digemid)', 
    "subtitulo1"=>'',
    "texto"=>'Te acompañamos de inicio a fin en el proceso de
    certificación de Buenas Prácticas de Manufactura
    con DIGEMID, mediante una metodología de:

    <div class="col-lg-12 col-md-12 text-center">
        <div class="row cuadros_prog cuad5">
            <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Diagnóstico</div></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Desarrollo de procedimientos</div></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Visitas de asistencias</div></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Auditoría interna</div></div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Aprendizaje</div></div>
        </div>
    </div>
    <style>.lista_p_servic{padding-bottom:0}</style>
    <div style="color:#2f3980; font-weight:bold; font-size:26px; margin-top:40px">Beneficios</div>

');
$serv8_2_2_col1[] = array("icon" => "1.png", "text" => "Cumple con la normativa sanitaria en BPM de manera eficiente y rentable. ");
$serv8_2_2_col2[] = array();
$serv8_2_2_col3[] = array("icon" => "16.png", "text" => "Estamos contigo durante la certificación y garantizamos el éxito.");








$serv8_2_3[] = array(
    "imagen"=>'6_1_1.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Principios Generales de Higiene / Programas de prerrequisito / Sitema HACCP', 
    "subtitulo1"=>'',
    "texto"=>'Nuestros servicios de consultoría lo llevan a obtener, 
    de manera exitosa, las certificaciones o autorizaciones
    que su negocio alimentario requiere para el cumplimiento
    de requisitos legales establecidos por las autoridades 
    competentes, de sus clientes u otras partes interesadas
    de la cadena alimentaria.
    <br><br>
    Nuestro soporte técnico es realizado para la obtención
    de las siguientes certificaciones / autorizaciones.
');
$serv8_2_3_col0 = '
<table style="width:100%;background: #fff;margin-bottom: 20px;">
    <thead>
        <tr>
            <th style="padding:10px 20px;background: #2f3980;color: #fff;">Autoridad</th>
            <th style="padding:10px 20px;background: #2f3980;color: #fff;">Alcance</th>
            <th style="padding:10px 20px;background: #2f3980;color: #fff;">Certificación / Autorización</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">DGESA</td>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">PGH  / Sistema HACCP</td>
            <td class="lista_p_servic" style="text-align: left; padding: 10px 20px;">
                <ul>
                    <li>Principio Generales de Higiene para Almacenes.</li>
                    <li>Certificación de los Principios Generales de Higiene para MIPES.</li>
                    <li>Certificación de la Validación Técnica Oficial del Plan HACCP - Planta.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">SENASA</td>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">BPA / Sistema HACCP</td>
            <td class="lista_p_servic" style="text-align: left; padding: 10px 20px;">
                <ul>
                    <li>Buenas Prácticas Agrícolas.</li>
                    <li>Autorización Sanitaria de Establecimiento.</li>
                    <li>Autorización Sanitaria para Cámaras de Almacenamiento.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">SANIPES</td>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">BPM / Sistema HACCP</td>
            <td class="lista_p_servic" style="text-align: left; padding: 10px 20px;">
                <ul>
                    <li>Protocolo de Buenas Prácticas de Manufactura para Transportes.</li>
                    <li>Protocolo de Habilitación Sanitaria de Establecimiento.</li>.
                </ul>
            </td>
        </tr>
        <tr>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">Municipalidades</td>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">PGH</td>
            <td class="lista_p_servic" style="text-align: left; padding: 10px 20px;">
                <ul>
                    <li>Certificación de los Principios Generales de Higiene para
                    Restaurantes.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">Organismos de certificación privados</td>
            <td style="padding:10px; font-weight:bold; color:#2f3980; font-family:Arial Black">BPH / Sistema HACCP</td>
            <td class="lista_p_servic" style="text-align: left; padding: 10px 20px;">
                <ul>
                    <li>Certificación de las Buenas prácticas de higiene (BPH) de acuerdo con el Codex Alimentarius.</li>
                    <li>Certificación del Sistema de análisis de peligros y puntos críticos de control (HACCP) de acuerdo con el Codex Alimentarius.</li>
                </ul>
            </td>
        </tr>
    </tbody>
</table>

<div class="col-lg-12 text-left">
                    <img src="./images/FS/serv13_3.png?v=3" style="max-width:100%">
</div>
<div class="col-lg-12 col-md-12 text-center">
    <div class="row cuadros_prog cuad5">
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Auditoría de diagnóstico y plan de trabajo para implementación</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Diseño e implementación del sistema de inocuidad alimentaria</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Auditoria interna para verificación de cumplimiento</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Capacitación del personal</div></div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6"><div>Soporte técnico en el proceso de certificación</div></div>
    </div>
</div>
<div class="col-lg-12 col-md-12 text-left">
    <img src="./images/FS/serv7_6.jpg?v=2" class="servicios_detalle" style="max-width:100%">
</div>
';
$serv8_2_3_col1[] = array("icon" => "18.png", "text" => "El staff de consultores tiene competencia en la implementación de estándares
internacionales reconocidos por la GFSI, lo que garantiza que los programas 
de prerrequisito / principios generales de higiene y el sistema HACCP recoja
las mejoras prácticas y enfoques, de tal forma que el cliente podrá afrontar
de manera exitosa las auditorias de clientes y otras partes interesadas.");
$serv8_2_3_col2[] = array();
$serv8_2_3_col3[] = array("icon" => "5.png", "text" => "Soporte técnico y legal en temas relacionados al servicio.");
$serv8_2_3_col3[] = array("icon" => "4.png", "text" => "Asistencia técnica durante el proceso de certificación y  levantamiento de no conformidades que conlleve a aprobar de manera exitosa la auditoria externa.");
$serv8_2_3_col4[] = ('

<div class="col-lg-4 col-md-6 text-center">
    <div><img src="./images/FS/8_2_3_1.jpg" class="servicios_detalle" style="max-width:315px !important"></div>
</div>
<div class="col-lg-4 col-md-6 text-center">
    <div><img src="./images/FS/8_2_3_2.jpg" class="servicios_detalle" style="max-width:315px !important"></div>
</div>
<div class="col-lg-4 col-md-6 text-center">
    <div><img src="./images/FS/8_2_3_3.jpg" class="servicios_detalle" style="max-width:315px !important"></div>
</div>
<div class="col-lg-4 col-md-6 text-center">
    <div><img src="./images/FS/8_2_3_4.jpg" class="servicios_detalle" style="max-width:315px !important"></div>
</div>
<div class="col-lg-4 col-md-6 text-center">
    <div><img src="./images/FS/8_2_3_5.jpg" class="servicios_detalle" style="max-width:315px !important"></div>
</div>
<div class="col-lg-4 col-md-6 text-center">
    <div><img src="./images/FS/8_2_3_6.jpg" class="servicios_detalle" style="max-width:315px !important"></div>
</div>
<div class="col-lg-4 col-md-6 text-center">
    <div><img src="./images/FS/8_2_3_7.jpg" class="servicios_detalle" style="max-width:315px !important"></div>
</div>
<div class="col-lg-4 col-md-6 text-center">
    <div><img src="./images/FS/8_2_3_8.jpg" class="servicios_detalle" style="max-width:315px !important"></div>
</div>

');








$serv8_3[] = array(
    "imagen"=>'pag8_3_img.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Sanitarios, cosméticos, y productos de higiene doméstica', 
    "subtitulo1"=>'',
    "texto"=>'Ante el crecimiento del comercio del sector de productos sanitarios en los países de América Latina, le ofrecemos la oportunidad de expandir su negocio, a través de nuestros servicios de gestión de Notificaciones Sanitarias Obligatorias para productos cosméticos, de higiene doméstica, higiene personal, absorbentes y artículos para bebes. Realizamos los registros en todos los países de la Comunidad Andina así como en otros países de la región y EE.UU.
<br><br>
Nos integramos a tu equipo para en conjunto gestionar los permisos a tu portafolio de productos en el menor tiempo. Contamos con un staff de profesionales con amplia experiencia y conocimiento practica en los procesos de registro ante las diferentes autoridades sanitarias.
<br><br>
<div class="lista_p_servic" style="padding:0">
<ul>
<li>Gestión de permisos para <b>México, Costa Rica, Panama, Chile y Argentina.</b></li>
<li><b>Para países de la CAN:</b> Aplicación de la DECISION 833 DE LA CAN, Armonización de legislaciones en materia de productos cosméticos para Homologación de NSO.</li>
<li><b>Para Estados Unidos:</b> Cumplimiento de COSMETICS LABEL REVIEW según normativa FDA.</li>
</ul>
</div>');
$serv8_3_col1[] = array("icon" => "16.png", "text" => "Registramos sus productos ante las autoridades sanitarias brindando soporte regulatorio permanente.");
$serv8_3_col1[] = array("icon" => "8.png", "text" => "Mantenemos contacto directo con su proveedor o fabricante a fin de solicitar la documentación técnica para armar el dossier de registros.");
$serv8_3_col1[] = array("icon" => "18.png", "text" => "Sera atendido por equipo técnico capacitado en la legislación sanitaria vigente nacional e internacional.");
$serv8_3_col2[] = array();
$serv8_3_col3[] = array("icon" => "12.png", "text" => "Capacidad operativa para atender altas demandas de registros sanitarios simultáneos.");
$serv8_3_col3[] = array("icon" => "19.png", "text" => "Contamos con un equipo multidisciplinario con amplia experiencia en el sector.");
$serv8_3_col3[] = array("icon" => "2.png", "text" => "Plataforma tecnológica a su disposición.");






$serv8_4[] = array(
    "imagen"=>'pag8_4_img.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Registro Alimentos y Bebidas: Perú, Bolivia, Colombia, Ecuador.', 
    "subtitulo1"=>'',
    "texto"=>'<img src="./images/FS/pag8_42_img.jpg" style="width:100%; max-width:320px; margin:auto; display:block; margin-top:30px">');
$serv8_4_col1[] = array("icon" => "16.png", "text" => "Registramos sus productos ante las autoridades sanitarias de la nación dándoles el soporte regulatorio necesario.");
$serv8_4_col1[] = array("icon" => "8.png", "text" => "Nos ponemos en contacto directo con su proveedor o maquilador a fin de solicitar la documentación técnica para gestionar los registros.");
$serv8_4_col1[] = array("icon" => "18.png", "text" => "Contamos con un equipo multidisciplinario con amplia experiencia en el sector.");
$serv8_4_col2[] = array();
$serv8_4_col3[] = array("icon" => "12.png", "text" => "Capacidad operativa para atender altas demandas de registros sanitarios simultáneos.Capacidad operativa para atender altas demandas de registros sanitarios simultáneos.");
$serv8_4_col3[] = array("icon" => "19.png", "text" => "Contar con el apoyo permanente de un equipo técnico capacitado en la legislación sanitaria nacional e internacional.");
$serv8_4_col3[] = array("icon" => "2.png", "text" => "Plataforma tecnológica a su disposición.");






$serv8_5[] = array(
    "imagen"=>'pag8_5_img.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Registro Alimentos y Bebidas: Perú, Bolivia, Colombia, Ecuador.', 
    "subtitulo1"=>'',
    "texto"=>'Hoy en día el uso de dispositivos médicos y equipos biomédicos, hacen que la detección y tratamiento de enfermedades se realice en menor tiempo posible dando una gran esperanza de vida a los pacientes.
<br><br>
Es para nosotros una gran responsabilidad trabajar los registros de estos productos ya que al ser utilizados directamente con los seres humanos debemos garantizar su eficacia y seguridad durante el procesos de registros.
<br><br>
Trabajamos de la mano con instituciones de salud publicas y privadas así como con clínicas y centros médicos especializados en el registro de sus equipos.
');
$serv8_5_col1[] = array("icon" => "16.png", "text" => "Registramos sus productos ante las autoridades sanitarias brindando soporte regulatorio permanente.");
$serv8_5_col1[] = array("icon" => "8.png", "text" => "Mantenemos contacto directo con su proveedor o fabricante a fin de solicitar la documentación técnica para armar el dossier de registros.");
$serv8_5_col1[] = array("icon" => "18.png", "text" => "Sera atendido por un equipo técnico capacitado en la legislación sanitaria vigente nacional e internacional.");
$serv8_5_col2[] = array();
$serv8_5_col3[] = array("icon" => "12.png", "text" => "Capacidad operativa para atender altas demandas de registros sanitarios simultáneos.");
$serv8_5_col3[] = array("icon" => "19.png", "text" => "Contamos con un equipo multidisciplinario con amplia experiencia en el sector.");
$serv8_5_col3[] = array("icon" => "2.png", "text" => "Plataforma tecnológica a su disposición.");






$serv8_6[] = array(
    "imagen"=>'pag8_6_img.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Productos Naturales de uso en Salud y Medicamentos Herbarios', 
    "subtitulo1"=>'',
    "texto"=>'Los medicamentos herbarios abarcan preparaciones y productos que contienen como principios activos parte de plantas u otros materiales vegetales que solos o en combinaciones ofrecen alternativas para combatir diversas enfermedades y patologías que no suelen mejorar con la medicina tradicional.
<br><br>
En la actualidad muchos pacientes con enfermedades crónicas o degenerativas encuentran en los productos naturales y medicamentos herbarios alivio a sus dolencias y mejoría en sus estados anímicos.
<br><br>
La industria de estos productos ha crecido sostenidamente en los últimos años, por lo cual las autoridades sanitarias se han visto en la necesidad de crear nuevas leyes y reglamentos que faciliten la fabricación, importación y comercialización de estos.
<br><br>
En el Perú desde el año 2017 ya contamos con una ley y reglamento que regula el uso medicinal y terapéutico del cannabis y sus derivados el cual tiene la finalidad de garantizar el derecho fundamental a la salud y permitir el acceso a los pacientes que lo requieran.
<div class="lista_p_servic" style="padding:0">
<ul>
<li>Gestiones que realizamos</li>
<li>Inscripcion y reinscripcion de Productos Naturales de Uso en salud.</li>
<li>Inscripcion y reinscripcion de Productos Galénicos.</li>
<li>Inscripcion y reinscripcion de Medicamentos Herbarios.</li>
</ul>
</div>
');
$serv8_6_col1[] = array("icon" => "16.png", "text" => "Registramos sus productos ante las autoridades sanitarias brindando soporte regulatorio permanente.");
$serv8_6_col1[] = array("icon" => "8.png", "text" => "Mantenemos contacto directo con su proveedor o fabricante a fin de solicitar la documentación técnica para armar el dossier de registros.");
$serv8_6_col1[] = array("icon" => "18.png", "text" => "Sera atendido por un equipo técnico capacitado en la legislación sanitaria vigente nacional e internacional.");
$serv8_6_col2[] = array();
$serv8_6_col3[] = array("icon" => "12.png", "text" => "Capacidad operativa para atender altas demandas de registros sanitarios simultáneos.");
$serv8_6_col3[] = array("icon" => "19.png", "text" => "Contamos con un equipo multidisciplinario con amplia experiencia en el sector.");
$serv8_6_col3[] = array("icon" => "2.png", "text" => "Plataforma tecnológica a su disposición.");






$serv8_7[] = array(
    "imagen"=>'pag8_7_img.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Suplementos Dietéticos: Perú y EE.UU.', 
    "subtitulo1"=>'',
    "texto"=>'Los Suplementos dietéticos son ampliamente utilizados por deportistas y personas que buscan mantener un equilibrio de nutrientes en su dieta, bajar de peso o reducir el riesgo de desarrollar problemas de salud. Podemos encontrar en ellos vitaminas, aminoácidos, antioxidantes, minerales y una amplia variedad de mezclas químicas que al consumirlos aportan a un correcto funcionamiento del organismo.
<br><br>
En diversos países del mundo la comercialización de suplementos dietéticos se realiza de forma libre y sin restricciones sanitarias, sin embargo, para importar este tipo de productos al Perú y países de América Latina, se requiere contar con un registro sanitario emitido por la autoridad competente.
<br><br>
<b>Gestiones que realizamos:</b>

<div class="lista_p_servic" style="padding:0">
<ul>
<li>Gestión de Registros Sanitarios Suplementos dietéticos.</li>
<li>Gestión de Registros Sanitarios Edulcorantes.</li>
<li>Ampliaciones y/o modificaciones de Registros Sanitarios Suplementos Dietéticos.</li>
<li>Validación de formula y rotulado de suplementos dietéticos
para EE.UU.</li>
</ul>
</div>');
$serv8_7_col1[] = array("icon" => "16.png", "text" => "Registramos sus productos ante las autoridades sanitarias brindando soporte regulatorio permanente.");
$serv8_7_col1[] = array("icon" => "8.png", "text" => "Mantenemos contacto directo con su proveedor o fabricante a fin de solicitar la documentación técnica para armar el dossier de registros.");
$serv8_7_col1[] = array("icon" => "18.png", "text" => "Sera atendido por un equipo técnico capacitado en la legislación sanitaria vigente nacional e internacional.");
$serv8_7_col2[] = array();
$serv8_7_col3[] = array("icon" => "12.png", "text" => "Capacidad operativa para atender altas demandas de registros sanitarios simultáneos.");
$serv8_7_col3[] = array("icon" => "19.png", "text" => "Contamos con un equipo multidisciplinario con amplia experiencia en el sector.");
$serv8_7_col3[] = array("icon" => "2.png", "text" => "Plataforma tecnológica a su disposición.");






$serv8_8[] = array(
    "imagen"=>'pag8_8_img.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Productos Veterinarios (alimentos y medicamentos para animales)', 
    "subtitulo1"=>'',
    "texto"=>'Los perros, gatos y otros animales caseros hoy se han convertido en un integrante más de las familias, razón por la cual el consumo de productos veterinarios se ha incrementado en los últimos años, siendo así este rubro una gran oportunidad de negocio para las empresas.
<br><br>
La creciente industria de los Pet Shop en el Perú y el mundo pone a disposición de los consumidores no solo alimentos para animales sino también productos para su cuidado como cosméticos, medicamentos, accesorios de entretenimiento y una diversa gama de productos. Los cuales se encuentran dentro de los productos restringidos y requieren de un permiso o registro sanitario para su fabricación, importación y comercialización.
<br><br>
<b>Gestiones que realizamos:</b>
<div class="lista_p_servic" style="padding:0">
<ul>
<li>Registro Sanitario Alimentos para Animales.</li>
<li>Registro Sanitario Medicamentos Veterinarios ante el SENASA.</li>
<li>Registro como Importador Productos Veterinarios - SENASA.</li>
<li>Registro Responsable Técnico - Médico Veterinario.</li>
</ul>
</div>');
$serv8_8_col1[] = array("icon" => "16.png", "text" => "Registramos sus productos ante las autoridades sanitarias brindando soporte regulatorio permanente.");
$serv8_8_col1[] = array("icon" => "8.png", "text" => "Mantenemos contacto directo con su proveedor o fabricante a fin de solicitar la documentación técnica para armar el dossier de registros.");
$serv8_8_col1[] = array("icon" => "18.png", "text" => "Sera atendido por un equipo técnico capacitado en la legislación sanitaria vigente nacional e internacional.");
$serv8_8_col2[] = array();
$serv8_8_col3[] = array("icon" => "12.png", "text" => "Capacidad operativa para atender altas demandas de registros sanitarios simultáneos.");
$serv8_8_col3[] = array("icon" => "19.png", "text" => "Contamos con un equipo multidisciplinario con amplia experiencia en el sector.");
$serv8_8_col3[] = array("icon" => "2.png", "text" => "Plataforma tecnológica a su disposición.");






$serv8_9[] = array(
    "imagen"=>'pag8_9_img.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Autorización sanitaria juguetes y útiles de escritorio', 
    "subtitulo1"=>'',
    "texto"=>'Conoce que productos están sujetos a Autorización Sanitaria y evita detenciones y sanciones ante la autoridad competente.
<br><br>
Importa los juguetes y útiles de escritorio que deseas comercializar cumpliendo con los estándares establecidos por el marco regulatorio de la ley N° 28376 el que establece los parámetros que se debe cumplir para importar, comercializar, almacenar y distribuir juguetes y útiles de escritorio no tóxicos. Realizamos los diferentes trámites que son necesarios para mercancías restringidas como:
');
$serv8_9_col1[] = array("icon" => "transparente.png", "text" => "Registro Nacional para las actividades de fabricación, importación, comercialización, distribución, como el almacenamiento de juguetes y/o útiles de escritorio.");
$serv8_9_col1[] = array("icon" => "transparente.png", "text" => "Autorización Sanitaria para juguetes y/o útiles de escritorio de manera que puedas realizar las actividades antes mencionadas.");
$serv8_9_col1[] = array("icon" => "transparente.png", "text" => "Obtención de copia certificada de autorización Sanitaria de juguetes y útiles de escritorio. ");
$serv8_9_col2[] = array();
$serv8_9_col3[] = array("icon" => "transparente.png", "text" => "Revisión de información del etiquetado cumpliendo con las normas sanitarias para juguetes y/o útiles de escritorio.  Inspección de información de producto, fotos pre- embarque.");
$serv8_9_col3[] = array("icon" => "transparente.png", "text" => "Traducción de documentos técnicos requeridos por la normativa al idioma español. ");






$serv8_10[] = array(
    "imagen"=>'pag8_10_img.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Servicio de titularidad y custodia de registros', 
    "subtitulo1"=>'',
    "texto"=>'El servicio de titularidad y custodia de Registros o Notificaciones
Sanitarias se ofrece a través de la droguería GRUPO FS en Perú.
<br><br>
Esta alternativa es de mucha utilidad para aquellas empresas que no se encuentran constituidas en el Perú y que desean iniciar a gestionar sus permisos, pero sin incurrir en los gastos operativos que demanda la constitución de una empresa. Ahorrando tiempo y dinero.
<br><br>
A la vez, permite que los distribuidores locales puedan obtener los registros sanitarios como importador paralelo, haciendo uso de su registro, pero sin otorgarles la titularidad de los mismos.');
$serv8_10_col1[] = array("icon" => "18.png", "text" => "Contar con un socio estratégico con experiencia en asuntos regulatorios en el Perú.");
$serv8_10_col1[] = array("icon" => "16.png", "text" => "El cliente tendrá el control sobre los productos registrados sin necesidad que alguno de sus distribuidores sea el titular de sus registros.");
$serv8_10_col2[] = array();
$serv8_10_col3[] = array("icon" => "14.png", "text" => "Posibilidad de tener más de un distribuidor como importador paralelo.");
$serv8_10_col3[] = array("icon" => "12.png", "text" => "Evitar incurrir en gastos operativos de constitución de una empresa en el Perú: Representante legal, Domicilio fiscal, área contable, almacenaje, etc.");






$serv8_11[] = array(
    "imagen"=>'pag8_11_img.jpg', 
    "titulo1"=>'', 
    "titulo2"=>'Otras autorizaciones para ingreso de mercaderías restringidas', 
    "subtitulo1"=>'',
    "texto"=>'<b style="color:#888;font-weight: 600;">PORDUCE:</b> Obtención de permiso OTO (Permiso para importación y venta de productos que empleen gases refrigerantes como: refrigeradores, congeladores, aire acondicionado, etc.). Obtención de la constancia de cumplimiento de reglamento técnico para la importación de neumáticos, cables y conductores eléctricos, pilas o baterías.');
$serv8_11_col1[] = array("icon" => "transparente.png", "text" => "<b>SENASA:</b> Obtención de permisos fitosanitarios y zoosanitarios para productos primarios como carnes, verduras, entre otros.");
$serv8_11_col1[] = array("icon" => "transparente.png", "text" => "<b>MTC:</b> Asesoría y gestión para la obtención del Registro de Casa Comercializadora de equipo y aparatos de telecomunicación, así como del Permiso de Internamiento y Certificado de Homologación de equipos de telecomunicación.");
$serv8_11_col2[] = array();
$serv8_11_col3[] = array("icon" => "transparente.png", "text" => "<b>MINEM:</b> Asistencia en el desarrollo del etiquetado de eficiencia energética (EEE), acorde a los resultados otorgados por el OCP acreditado para productos como lámparas de iluminación, electrodomésticos, entre otros.");
$serv8_11_col3[] = array("icon" => "transparente.png", "text" => "<b>CENARES:</b> Consultoría y gestión para la obtención de la autorización excepcional de exportación para productos como guantes de productos domésticos entre otros.");













$lista_servicios="";
$menu_li="";
foreach($servicios_lista as $posicion){
    $lista_servicios.= '
    <div class="col-lg-4 col-md-6 col-sm-12">
        <table class="tabla_servicio">
            <tr>
                <td class="serv_imagen"><img src="./images/FS/'.$posicion['portada'].'"></td>
            </tr>
            <tr>
                <td class="serv_titulo text-center"><div>'.$posicion['titulo'].'</div></td>
            </tr>
            <tr>
                <td class="serv_descripcion"><div class="text_desc">'.$posicion['descripcion'].'</div></td>
            </tr>
            <tr>
                <td class="serv_link"><a href="./'.$posicion['link'].'.php">'.$txt_vermas.'</a></td>
            </tr>
        </table>
    </div>
    ';
    $menu_li.='<li><a href="./'.$posicion['link'].'">'.$posicion['titulo'].'</a></li>';
}
?>