<?php 
 include_once './conexion.php';

header("Expires: 0");
$filename = "EventosFS.xls";
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Cache-Control: private",false);

$salida = "";
$salida .= "<table><thead >

            <th >Descripcion</th>
            <th >Fechas</th>

            </thead>
            <tbody>";

                $pdo=getPDO();
                $fechaActual= date("Y-m-d");

                if ($pdo){


                    $sql = "SELECT * FROM v_eventos WHERE fecha_evento > $fechaActual or  fecha_evento_2 > $fechaActual or fecha_evento_3 > $fechaActual or fecha_evento_4 > $fechaActual";

                    $stmt = $pdo->prepare($sql);

                    $stmt->execute(); 


                    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($arr as $row) {

                        $salida.= ' <tr>



                        <td >'.$row["nombre_archivos"].' </td>



                        <td>'.$row["ver_fecha"].'</td>

                        </tr>';
                    }


                } else {

                    echo "<td><p style='color:#044372; font-weight: bold;'> Ups! Hubo un problema con la conexión, intente nuevamente</p></td><td></td><td></td>";

                }

                

$salida.='</tbody></table>';
echo $salida;
?>