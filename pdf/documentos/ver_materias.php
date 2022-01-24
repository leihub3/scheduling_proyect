<?php
		
	/* Connect To Database*/
	//include("../../config/db.php");
	include("../../conexion.php");
	//require_once("../../funciones.php");
	require_once(dirname(__FILE__).'/../html2pdf.class.php');
    // get the HTML
     ob_start();
     include(dirname('__FILE__').'/res/ver_materias_html.php');
    $content = ob_get_clean();

    try
    {
        // init HTML2PDF
        $html2pdf = new HTML2PDF('L', 'A4', 'es', true, 'UTF-8', array(0, 0, 0, 0));
        //FONT
		//$html2pdf->addFont('times', '', 'times');
		// display the full page
        $html2pdf->pdf->SetDisplayMode('fullpage');
        // convert
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        // send the PDF
        $html2pdf->Output("Listado de Materias UCA: " . $semestre . " de " . $anio . ".pdf");
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
