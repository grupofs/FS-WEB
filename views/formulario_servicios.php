    <section style="background: #274f95;padding: 30px">
        <div class="container"><form id="service-form" name="service_form" class="default-form" novalidate="novalidate">
            <div class="row">
                
                    <div class="col-lg-6 col-md-12">
                        <div style="font-weight: bold; font-family: 'Arial Black'; font-size:26px;color:#9cc14d;display:inline-block"><?php echo $txt_contacto; ?> </div><span style="color:#fff; display:inline-block; margin-left:6px"> <?php echo $txt_contacto_atendera; ?></span>
                        <br>
                        <table style="margin-top:15px">
                            <tr>
                                <td class="m-b-15" style="color:#fff; padding-right:15px; vertical-align: middle; padding-bottom: 15px;"><?php echo $servicios_nombre; ?></td><td><input type="text" name="service_name" class="form-control" style="margin-bottom: 15px; border-radius: 15px;"></td>
                            </tr> 
                            <tr>
                                <td class="m-b-15" style="color:#fff; padding-right:15px; vertical-align: middle; padding-bottom: 15px;"><?php echo $servicios_empresa; ?></td><td><input type="text" name="service_business" class="form-control" style="margin-bottom: 15px; border-radius: 15px;"></td>
                            </tr>
                            <tr>
                                <td class="m-b-15" style="color:#fff; padding-right:15px; vertical-align: middle; padding-bottom: 15px;"><?php echo $servicios_email; ?></td><td><input type="text" name="service_email" class="form-control" style="margin-bottom: 15px; border-radius: 15px;"></td>
                            </tr>
                        </table>

                    </div>
                    <div class="col-lg-6 col-md-12">
                        <span  style="color:#fff; margin-bottom: 15px; display: block;"><?php echo $txt_consulta; ?></span>
                        <textarea type="text" name="service_message" class="form-control" style="border-radius: 15px; height: 80px; margin-bottom:15px;"></textarea>
                        <button type="submit" class="btn btn-success" id="send_form_service" data-loading-text="Procesando..."><?php echo $txt_enviar; ?></button>
                        <div style="font-weight: bold; font-family: 'Arial Black'; font-size:26px;color:#9cc14d"><i class="fa fa-whatsapp"></i> 999-421-795</div>
                    </div>
                
            </div></form>
        </div>
    </section>