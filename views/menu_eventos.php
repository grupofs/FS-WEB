<div class="container">

  <br><br><br>

  <h1 class="sec-title"><?php echo $text_eventos; ?></h1>

  <div class="row">

    <div class="col-lg-10 mx-auto">

      <table class="tablaEventos table-responsive2">

             <thead>

                  <th style="width: 90%;" id="thTable"><?php echo $text_eventos_cab1; ?></th>

                  <th style="width: 15%;" id="thTable"><?php echo $text_eventos_cab2; ?></th>

                  <th style="width: 15%;" id="thTable"><?php echo $text_eventos_cab3; ?></th>

              </thead>

              <tbody id="EventosBody">

                <?php 

                $pdo=getPDO();



                $fechaActual= date("Y-m-d");

                if ($pdo) 

                {



                    $sql = "SELECT * FROM archivos WHERE fecha_evento >  '".$fechaActual."'  ORDER BY id_archivos DESC LIMIT 8;";

                    $stmt = $pdo->prepare($sql);

                    $stmt->execute(); 



                                        //Aquí, recorremos la consulta select. 



                    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($arr as $row) {

                        echo ' <tr>



                        <td class="pl-2"><p style="color:#044372; font-weight: bold;"  class="text-left">&nbsp;'.$row["nombre_archivos"].'</p> <p class="text-left font-weight-normal">&nbsp;'.$row["ver_fecha"].'</p></td>



                        <td><a href="../imagenes/'.$row["archivo_archivos"].'" target="_blank"><i style="color:#044372;" class="fa fa-plus" href="../imagenes/'.$row["archivo_archivos"].'"></i></a></td>



                        <td><a href="'.$row["comentarios_text"].'" target="_blank"><i style="color:#044372;" class="fa fa-bullseye"></i></a></td>



                        </tr>

                        ';





                    }

                    echo' <tr>

                    <td colspan="3" class="text-center py-3">

                    <a style="color:#EE8700; font-weight: bold;" data-toggle="modal" data-target="#ModalTodosEventos">Ver Eventos Pasados</a>

                    </td>

                    </tr>';

                } else {

                    echo "<td><p style='color:#044372; font-weight: bold;'> Ups! Hubo un problema con la conexión, intente nuevamente</p></td><td></td><td></td>";

                }

                ?>







               </tbody>

      </table>

    </div>

  </div>

</div>