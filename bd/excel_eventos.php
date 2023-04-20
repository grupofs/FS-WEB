<?php 
include_once './conexion.php';
require '../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// header("Expires: 0");
 $filename = "EventosFS.xls";
// header("Content-Disposition: attachment; filename=$filename");
// header("Pragma: no-cache");
// header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
// header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
// header("Cache-Control: private",false);
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$filename.'"');
header('Cache-Control: max-age=0');

$spreadsheet = new Spreadsheet();
$writer = new Xlsx($spreadsheet);
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');

$activeWorksheet = $spreadsheet->getActiveSheet();

$styleArray = array(
    'font'  => array(
        'bold'  => true,
        'color' => array('rgb' => '000000'),
        'size'  => 13,
        'name'  => 'Arial'
    )
);

$activeWorksheet->getCell('A3')->setValue('Descripcion');
$activeWorksheet->getStyle('A3')->applyFromArray($styleArray);

$activeWorksheet->setCellValue('B3', 'Fechas');
$activeWorksheet->getStyle('B3')->applyFromArray($styleArray);

$pdo=getPDO();
$fechaActual= date("Y-m-d");

if($pdo){
    $sql = "SELECT * FROM v_eventos WHERE fecha_evento > $fechaActual or  fecha_evento_2 > $fechaActual or fecha_evento_3 > $fechaActual or fecha_evento_4 > $fechaActual";

    $stmt = $pdo->prepare($sql);

    $stmt->execute(); 


    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $row = 4;
    foreach ($arr as $valor) {
        $activeWorksheet->setCellValue('A'.$row, $valor['nombre_archivos']);
        $activeWorksheet->setCellValue('B'.$row, $valor['ver_fecha']);
        $row++;
    }
}
$drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
$drawing->setName('logoFS');
$drawing->setDescription('logoFS');
$drawing->setPath('https://grupofs.com/images/FS/logoFS.png');
$drawing->setWidth(150);
$drawing->setCoordinates('A1','B1','C1');
$drawing->setWorksheet($spreadsheet->getActiveSheet());

//META TAGS
$spreadsheet->getProperties()->setCreator("Grupo Food Solutions");
$spreadsheet->getProperties()->setTitle("Eventos de Food Solutions");
$spreadsheet->getProperties()->setSubject("Grupo Food Solutions");
$spreadsheet->getProperties()->setDescription("Eventos de Grupo Food Solutions");

$writer->save('php://output');
?>