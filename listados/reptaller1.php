<?php
require_once('class.ezpdf.php');
 include("conexion.php");
 
	$sql="select numcuentaalum as numcuenta,nombrealum as nombre,semestre as sem,grupo as grp,carreraalum as carrera,asistencia as asistencia FROM taller1";
	
	/* dp.dept_name as Depto,
	count(ost1.ticket_id) as num_tickets, 
	(select count(*) from ost_ticket as ost2 where status='open' and ost1.dept_id=ost2.dept_id) as 'numero de tickets abiertos',
	(select count(*) from ost_ticket as ost2 where status='closed' and ost1.dept_id=ost2.dept_id) as 'numero de tickets cerrados'
	from ost_ticket as ost1, ost_department as dp 
	where dp.dept_id=ost1.dept_id
	group by dp.dept_name"; */
	
	$resSql=mysql_query($sql) or die("<br>Error consulta</br>".mysql_error());
	
$pdf = new Cezpdf('A4');
$pdf->selectFont('fonts/Helvetica.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);
$i=0;
	while($row=mysql_fetch_row($resSql)){
		$i=$i+1;
		$data[]=array('num'=>$i,'numcuenta'=>$row[0], 'nombre'=>$row[1],'sem'=>$row[2],'grp'=>$row[3],'carrera'=>$row[4],'asistencia'=>'');
	}
	$titles=array('num'=>'num','numcuenta'=>'<b>NoCuenta</b>', 'nombre'=>'<b>Nombre</b>','sem'=>'<b>Sem</b>','grp'=>'<b>grp</b>','carrera'=>'<b>carrera</b>','asistencia'=>'<b>asistencia</b>');

$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>580
			);
$txttit = "<b>UNIVERSIDAD DE COLIMA</b>\n";
$txttit.= "1er Encuentro de Egresados y Empleadores de Educación\n";
$txttit.= "Taller El empleo en el área educativa \n";
$txttit.= "Instructor: M.C. Rodolfo Rangel Alcántar \n";
$txttit.= "Lunes 18 y Martes 19 de Junio de 2018\n";
$txttit.= "LISTA DE ALUMNOS REGISTRADOS\n";

$pdf->ezText($txttit, 12); 
$pdf->ezTable($data,$titles,'',$options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>