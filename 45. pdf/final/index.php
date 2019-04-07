<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once 'model.php';

$alumnos = new Model();

$lista = $alumnos->getAll();
$html  = '<img src="logo.png" width="300" />';
$html .= '<h1>Tabla de alumnos</h1>';
$html .= '<table>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
            </tr>';
foreach($lista['items'] as $item){
    $html .= '<tr>
                <td>'.$item['id'].'</td><td>'.$item['nombre'].'</td>
              </tr>';
}
    $html .= '</table>';

    //echo $html;
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();

?>