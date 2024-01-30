<?php
require_once('class.ezpdf.php');
 include("conexion.php");
 
	$sql="select cuentaalum as numcuenta,nomalum as nombre,gradoalum as sem,grupoalum as grp,carreraalum as carrera FROM alumnosfce2018 where carreraalum = 'LICENCIADO EN EDUCACION ESPECIAL' and grupoalum = 'B' ";
	
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
	$titles=array('num'=>'num','numcuenta'=>'<b>NoCuenta</b>', 'nombre'=>'<b>Nombre</b>','sem'=>'<b>Sem</b>','grp'=>'<b>grp</b>','carrera'=>'<b>carrera</b>');

$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>580
			);
$txttit = "<b>FACULTAD DE CIENCIAS DE LA EDUCACION</b>\n";
$txttit.= "IV COLOQUIO DE FORMACION DOCENTE E INNOVACION EDUCATIVA\n";
$txttit.= "Construyendo Ciudadania \n";
$txttit.= "Licenciatura en Educacion Especial \n";
$txttit.= "Lista de Alumnos de 8o Semestre Grupo B\n";

$pdf->ezText($txttit, 12); 
$pdf->ezTable($data,$titles,'',$options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>