<?php
include('conexion.php');//CONEXION A LA BD


	// NOMBRE DEL ARCHIVO Y CHARSET
	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="Distancias.csv"');

	// SALIDA DEL ARCHIVO
	$salida=fopen('php://output', 'w');
	// ENCABEZADOS
	fputcsv($salida, array('RT_ID', 'SN_B', 'STOP_CD_B', 'SN_E', 'STOP_CD_E','DIST','LMT_SPD'));
	// QUERY PARA CREAR EL REPORTE
	$reporteCsv=$conn->query("SELECT * from mibus.distancias");
	while($filaR= $reporteCsv->fetch_assoc())
		fputcsv($salida, array($filaR['RT_ID'], 
								$filaR['SN_B'],
								$filaR['STOP_CD_B'],
								$filaR['SN_E'],
								$filaR['STOP_CD_E'],
                                $filaR['DIST'],
                                $filaR['LMT_SPD']));
    



?>