<?php
include('conexion.php');//CONEXION A LA BD


	// NOMBRE DEL ARCHIVO Y CHARSET
    set_time_limit( 0 );
	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="Transacciones.csv"');

	// SALIDA DEL ARCHIVO
	$salida=fopen('php://output', 'w');
	// ENCABEZADOS
    fputcsv($salida, array('TRANSACCIONES POR HORA'));
	fputcsv($salida, array('Trans_HORA 00', 'Trans_HORA 01', 'Trans_HORA 02', 'Trans_HORA 03', 
    'Trans_HORA 04','Trans_HORA 05','Trans_HORA 06','Trans_HORA 07','Trans_HORA 08','Trans_HORA 09',
    'Trans_HORA 10','Trans_HORA 11','Trans_HORA 12','Trans_HORA 13','Trans_HORA 14','Trans_HORA 15',
    'Trans_HORA 16','Trans_HORA 17','Trans_HORA 18','Trans_HORA 19','Trans_HORA 20','Trans_HORA 21',
    'Trans_HORA 22','Trans_HORA 23','Trans_HORA 24'));
	// QUERY PARA CREAR EL REPORTE
	$reporteCsv=$conn->query("SELECT * from mibus.TransaccionesXhora");
	while($filaR= $reporteCsv->fetch_assoc())
		fputcsv($salida, array($filaR['Trans_HORA 00'], 
								$filaR['Trans_HORA 01'],
								$filaR['Trans_HORA 02'],
								$filaR['Trans_HORA 03'],
								$filaR['Trans_HORA 04'],
                                $filaR['Trans_HORA 05'],
                                $filaR['Trans_HORA 07'],
                                $filaR['Trans_HORA 08'],
                                $filaR['Trans_HORA 09'],
                                $filaR['Trans_HORA 10'],
                                $filaR['Trans_HORA 11'],
                                $filaR['Trans_HORA 12'],
                                $filaR['Trans_HORA 13'],
                                $filaR['Trans_HORA 14'],
                                $filaR['Trans_HORA 15'],
                                $filaR['Trans_HORA 16'],
                                $filaR['Trans_HORA 17'],
                                $filaR['Trans_HORA 18'],
                                $filaR['Trans_HORA 19'],
                                $filaR['Trans_HORA 20'],
                                $filaR['Trans_HORA 21'],
                                $filaR['Trans_HORA 22'],
                                $filaR['Trans_HORA 23'],
                                $filaR['Trans_HORA 24']));

// ENCABEZADOS
fputcsv($salida, array(''));
fputcsv($salida, array(''));
fputcsv($salida, array('PASAJEROS POR HORA'));
fputcsv($salida, array('NumPjero_HORA 00', 'NumPjero_HORA 01', 'NumPjero_HORA 02', 'NumPjero_HORA 03', 
'NumPjero_HORA 04','NumPjero_HORA 05','NumPjero_HORA 06','NumPjero_HORA 07','NumPjero_HORA 08','NumPjero_HORA 09',
'NumPjero_HORA 10','NumPjero_HORA 11','NumPjero_HORA 12','NumPjero_HORA 13','NumPjero_HORA 14','NumPjero_HORA 15',
'NumPjero_HORA 16','NumPjero_HORA 17','NumPjero_HORA 18','NumPjero_HORA 19','NumPjero_HORA 20','NumPjero_HORA 21',
'NumPjero_HORA 22','NumPjero_HORA 23','NumPjero_HORA 24'));
// QUERY PARA CREAR EL REPORTE
$reporteCsv=$conn->query("SELECT * from mibus.PasajerosXhora");
while($filaR= $reporteCsv->fetch_assoc())
    fputcsv($salida, array($filaR['NumPjero_HORA 00'], 
                            $filaR['NumPjero_HORA 01'],
                            $filaR['NumPjero_HORA 02'],
                            $filaR['NumPjero_HORA 03'],
                            $filaR['NumPjero_HORA 04'],
                            $filaR['NumPjero_HORA 05'],
                            $filaR['NumPjero_HORA 07'],
                            $filaR['NumPjero_HORA 08'],
                            $filaR['NumPjero_HORA 09'],
                            $filaR['NumPjero_HORA 10'],
                            $filaR['NumPjero_HORA 11'],
                            $filaR['NumPjero_HORA 12'],
                            $filaR['NumPjero_HORA 13'],
                            $filaR['NumPjero_HORA 14'],
                            $filaR['NumPjero_HORA 15'],
                            $filaR['NumPjero_HORA 16'],
                            $filaR['NumPjero_HORA 17'],
                            $filaR['NumPjero_HORA 18'],
                            $filaR['NumPjero_HORA 19'],
                            $filaR['NumPjero_HORA 20'],
                            $filaR['NumPjero_HORA 21'],
                            $filaR['NumPjero_HORA 22'],
                            $filaR['NumPjero_HORA 23'],
                            $filaR['NumPjero_HORA 24']));

fputcsv($salida, array(''));
fputcsv($salida, array(''));
fputcsv($salida, array('CANTIDAD DE BUSES POR HORA'));
fputcsv($salida, array('NumBus_HORA 00', 'NumBus_HORA 01', 'NumBus_HORA 02', 'NumBus_HORA 03', 
'NumBus_HORA 04','NumBus_HORA 05','NumBus_HORA 06','NumBus_HORA 07','NumBus_HORA 08','NumBus_HORA 09',
'NumBus_HORA 10','NumBus_HORA 11','NumBus_HORA 12','NumBus_HORA 13','NumBus_HORA 14','NumBus_HORA 15',
'NumBus_HORA 16','NumBus_HORA 17','NumBus_HORA 18','NumBus_HORA 19','NumBus_HORA 20','NumBus_HORA 21',
'NumBus_HORA 22','NumBus_HORA 23','NumBus_HORA 24'));
// QUERY PARA CREAR EL REPORTE
$reporteCsv=$conn->query("SELECT * from mibus.CantBusXhora");
while($filaR= $reporteCsv->fetch_assoc())
    fputcsv($salida, array($filaR['NumBus_HORA 00'], 
                            $filaR['NumBus_HORA 01'],
                            $filaR['NumBus_HORA 02'],
                            $filaR['NumBus_HORA 03'],
                            $filaR['NumBus_HORA 04'],
                            $filaR['NumBus_HORA 05'],
                            $filaR['NumBus_HORA 07'],
                            $filaR['NumBus_HORA 08'],
                            $filaR['NumBus_HORA 09'],
                            $filaR['NumBus_HORA 10'],
                            $filaR['NumBus_HORA 11'],
                            $filaR['NumBus_HORA 12'],
                            $filaR['NumBus_HORA 13'],
                            $filaR['NumBus_HORA 14'],
                            $filaR['NumBus_HORA 15'],
                            $filaR['NumBus_HORA 16'],
                            $filaR['NumBus_HORA 17'],
                            $filaR['NumBus_HORA 18'],
                            $filaR['NumBus_HORA 19'],
                            $filaR['NumBus_HORA 20'],
                            $filaR['NumBus_HORA 21'],
                            $filaR['NumBus_HORA 22'],
                            $filaR['NumBus_HORA 23'],
                            $filaR['NumBus_HORA 24']));



    
    



?>