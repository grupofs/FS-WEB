<?php 
include_once './conexion.php'; 

    function getListado(){
        try {
            $pdo=getPDO();
            $fecha_actual = date('Y-m-d');
            $sql = "SELECT * FROM v_eventos where fecha_evento >= $fecha_actual or fecha_evento_2 >= $fecha_actual or fecha_evento_3 >= $fecha_actual or fecha_evento_4 >= $fecha_actual";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(); 

            $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

            //usort($arr, "compararFechas");
            $arr = ordenarPorFecha($arr);
            return $arr;
        } catch (\Throwable $th) {
            echo $th;
            throw $th;
        }
    }

    

    function ordenarPorFecha($eventos) {
        $fechaActual = date('Y-m-d');
        $eventosFuturos = array();

        foreach ($eventos as $evento) {
            if ($evento['fecha_evento'] >= $fechaActual) {
                $eventosFuturos[] = $evento;
            }
        }

        usort($eventosFuturos, function($a, $b) {
            return strcmp($a['fecha_evento'], $b['fecha_evento']);
        });

        return $eventosFuturos;
    }

    
    function fechasPasadas($array){
        $fechaActual = date('Y-m-d');

        // Filtrar y ordenar los registros
        $registrosFiltrados = array_filter($array, function ($registro) use ($fechaActual) {
            return $registro['fecha_evento'] < $fechaActual;
        });

        // Ordenar los registros filtrados por fecha_evento de forma ascendente
        usort($registrosFiltrados, function ($a, $b) {
            return strcmp($a['fecha_evento'], $b['fecha_evento']);
        });

        return $registrosFiltrados;
    }

    function getListadoPasados(){
        try {
            $pdo=getPDO();
            $fechaActual = date('Y-m-d');
            $sql = "SELECT * FROM v_eventos WHERE fecha_evento <= $fechaActual  or fecha_evento_2 <= $fechaActual or fecha_evento_3 <= $fechaActual or fecha_evento_4 <= $fechaActual ;";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(); 

            $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);

            //usort($arr, "compararFechas");
            $arr = fechasPasadas($arr);
            return $arr;
        } catch (\Throwable $th) {
            echo $th;
            throw $th;
        }
    }
    
?>