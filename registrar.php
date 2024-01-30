<?PHP
   session_start ();
   include("conexion.php");
?>
<!--
 i &iacute;
 a &aacute;
 e &eacute;
 o &oacute;
 u &uacute;
 ñ &ntilde;
 
-->
<!DOCTYPE html>
<html>
<head>
<title>FCE 4 COLOQUIO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial;
}

.header {
  overflow: hidden;
  background-color:#090;  #0080C0; */
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
/*estilo del footer */
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#060; /* #036; */
   color: white;
   text-align: center;
}
/* estilos de los radios The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 16px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color:#060; /* #2196F3; */
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

</style>
</head>
<body>

<div class="header">
 <a href="#default" class="logo"> 
  <img src="imagenes/coloquio4v4.png" class="img-responsive" > </a>
 <div class="header-right">
  <p style="color:#FFF">Facultad de Ciencias de la Educación</p>
  <p style="color:#FFF">Coloquio de Formación Docente e Innovación Educativa</p>
  <p style="color:#FFF">Construyendo Ciudadanía</p>
  <p style="color:#FFF">Los Dias Jueves 26 y Viernes 27 de Abril de 2018</p>
   <!--  <a class="active" href="#home">Alumno</a> -->
  
 
  </div> 
 
</div>

<?php
$cuentaalum=$_POST['cuentaalum'];
$nomalum=$_POST['nomalum'];
$gradoalum=$_POST['gradoalum'];
$grupoalum=$_POST['grupoalum'];
$carreraalum=$_POST['carreraalum'];
$escuelaalum=$_POST['escuelaalum'];
$numtaller=$_POST['numtaller'];

if ($cuentaalum!=""){
	   
	   $consulta=mysql_query(" SELECT * FROM alumnosfce2018 WHERE cuentaalum='$cuentaalum'") or die("No se pudo".mysql_error());
		if ($resultado=mysql_fetch_array($consulta)){

if ($numtaller == '1' or $numtaller == '2' or $numtaller == '3' or $numtaller == '4'){

 
  if ($numtaller=='1'){
$consulta=mysql_query(" SELECT * FROM taller1 WHERE numcuentaalum='$cuentaalum'") or die("No se pudo".mysql_error());
		if ($resultado=mysql_fetch_array($consulta)){
        	print("<BR> <P ALIGN='CENTER'>Ya estas registrado en el taller Matemáticas lúdicas para la construcción de ciudadanía <br>Te esperamos el dia jueves 26 de Abril</P>	");
	
		}else{
       $insert = mysql_query("INSERT INTO taller1 (numcuentaalum,nombrealum,semestre,grupo,carreraalum) VALUES ('$cuentaalum','$nomalum','$gradoalum','$grupoalum','$carreraalum')") or die ("Error". mysql_error());
	   print("<BR> <P ALIGN='CENTER'>Haz sido registrado en el Taller Matemáticas lúdicas para la construcción de ciudadanía <br> Te esperamos el dia Jueves 26 de Abril</P>	");
	
		}	
} 
if ($numtaller=='2'){
$consulta=mysql_query(" SELECT * FROM taller2 WHERE numcuentaalum='$cuentaalum'") or die("No se pudo".mysql_error());
		if ($resultado=mysql_fetch_array($consulta)){
        	print("<BR> <P ALIGN='CENTER'>Ya estas registrado en el Taller Elaboración de proyectos de investigación en contextos de ciudadanía <br> Te esperamos el dia Jueves 26 de Abril</P>	");
		}else{
       $insert = mysql_query("INSERT INTO taller2 (numcuentaalum,nombrealum,semestre,grupo,carreraalum) VALUES ('$cuentaalum','$nomalum','$gradoalum','$grupoalum','$carreraalum')") or die ("Error". mysql_error());
	   print("<BR> <P ALIGN='CENTER'>Haz sido registrado en el Taller Elaboración de proyectos de investigación en contextos de ciudadanía<br>Te esperamos el dia Jueves 26 de Abril</P>	");
}
} 
if ($numtaller=='3'){
$consulta=mysql_query(" SELECT * FROM taller3 WHERE numcuentaalum='$cuentaalum'") or die("No se pudo".mysql_error());
		if ($resultado=mysql_fetch_array($consulta)){
        	print("<BR> <P ALIGN='CENTER'>Ya estas registrado en el Taller de Construcción de ciudadanía y derechos humanos.<br>Te esperamos el dia Jueves 26 de Abril</P>	");
		}else{
       $insert = mysql_query("INSERT INTO taller3 (numcuentaalum,nombrealum,semestre,grupo,carreraalum) VALUES ('$cuentaalum','$nomalum','$gradoalum','$grupoalum','$carreraalum')") or die ("Error". mysql_error());
	   print("<BR> <P ALIGN='CENTER'>Haz sido registrado en el Taller de Construcción de ciudadanía y derechos humanos.<br>Te esperamos el dia Jueves 26 de Abril</P>	");
}
} 
if ($numtaller=='4'){
$consulta=mysql_query(" SELECT * FROM taller4 WHERE numcuentaalum='$cuentaalum'") or die("No se pudo".mysql_error());
		if ($resultado=mysql_fetch_array($consulta)){
        	print("<BR> <P ALIGN='CENTER'>Ya estas registrado en el Taller Estrategias para combatir la discriminación en las aulas.<br>Te esperamos el dia Jueves 26 de Abril</P>	");
		}else{
       $insert = mysql_query("INSERT INTO taller4 (numcuentaalum,nombrealum,semestre,grupo,carreraalum) VALUES ('$cuentaalum','$nomalum','$gradoalum','$grupoalum','$carreraalum')") or die ("Error". mysql_error());
	   print("<BR> <P ALIGN='CENTER'>Haz sido registrado en el Taller Estrategias para combatir la discriminación en las aulas.<br> Te esperamos el dia Jueves 26 de Abril</P>	");
}
}

$modificar=mysql_query("UPDATE alumnosfce2018 SET regtaller=1 WHERE cuentaalum='$cuentaalum'") or die ("Error al intentar conectar con la base de datos ".mysql_error());
$modificar=mysql_query("UPDATE alumnosfce2018 SET numtallerreg=$numtaller WHERE cuentaalum='$cuentaalum'") or die ("Error al intentar conectar con la base de datos ".mysql_error());
?>  <center>
 <a href="index.php" class="btn btn-success" role="button">Inicio</a>
    </center>
    <br>
<br>
<?php
} else{
	 print ("<center>No Seleccionaste un taller 
	 <br>Vuelve a entrar a registro para escribir tu número de cuenta\n");
	  ?> <br><a href="index.php" class="btn btn-success" role="button">Inicio</a></center>
<?php 
	}

  } 
}else{
	 print ("<center>No hay un N&uacute;mero de Cuenta. 
	 <br>Vuelve a entrar a registro para escribir tu número de cuenta\n");
	  ?><br> <a href="index.php" class="btn btn-success" role="button">Inicio</a></center>
<?php	 }
?>  
<div class="footer">
  <p>Facultad de Ciencias de la Educaci&oacute;n. Web Desarrollada por Oswaldo Carrillo Z</p>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
   </BODY>
   </HTML>

