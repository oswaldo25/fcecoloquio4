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
    font-size: 14px;
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
  <p style="color:#FFF">Los Días Jueves 26 y Viernes 27 de Abril de 2018</p>
   <!--  <a class="active" href="#home">Alumno</a> -->
   <a href="index.php" class="btn btn-success" role="button">Salir</a>
 
  </div> 
 
</div>
<?PHP
  
     $clave_alumno=$_POST['clave'];
   if ($clave_alumno!=""){
	   
	   $consulta=mysql_query(" SELECT * FROM alumnosfce2018 WHERE cuentaalum='$clave_alumno'") or die("No se pudo".mysql_error());
		if ($resultado=mysql_fetch_array($consulta)){
	   ?>
       <div class="row" style="background-color:#97F999;"> <!-- di de la fila con dos cols -->
       <h2 align="center">Registro del Taller</h2> 
  <div class="col-sm-4" style="background-color:#76D378;">
	<div class="table-responsive">
  
  <h3 align="center">Datos del Alumno</h3>            
  <table class="table table-striped">
    <thead bgcolor="#DBDBDB">
      <tr>
        <th>CAMPO</th>
        <th>DATO ACTUAL</th>
      </tr>
    </thead>
    <tbody>
      <?php
    print ("<Tr>
			<td>No. Cuenta:</td>
			<td>" . $resultado['cuentaalum'] . "</td></Tr>");
      print ("<Tr><td>Nombre:</td>
			<td>" . $resultado['nomalum'] . "</td></Tr>");
            print ("<Tr><td>Semestre:</td>
			<td>" . $resultado['gradoalum'] . "</td></Tr>");
			print ("<Tr><td>Grupo:</td>
			<td>" . $resultado['grupoalum'] . "</td></Tr>");
			print ("<Tr><td>Carrera:</td>
			<td>" . $resultado['carreraalum'] . "</td></Tr>");
			print ("<Tr><td>Escuela:</td>
			<td>" . $resultado['escuelaalum'] . "</td></Tr>
");
     		print ("<Tr><td>Ciclo Escolar:</td>
			<td>ENERO - AGOSTO 2017</td></Tr>");
			
			$gradogrupo = $resultado['gradoalum'].$resultado['grupoalum'];
			$cuentaalum=$resultado['cuentaalum'];
			$nomalum=$resultado['nomalum'];
			$gradoalum=$resultado['gradoalum'];
			$grupoalum=$resultado['grupoalum'];
			$carreraalum=$resultado['carreraalum'];
			$escuelaalum=$resultado['escuelaalum'];
			
			$regtaller=$resultado['regtaller'];
			$numtallerreg=$resultado['numtallerreg'];
			?>
    </tbody>
  </table>
  </div>
</div> <!-- fin de div de 1 col -->
    <div class="col-sm-8" style="background-color:#76D378;">
   <?php // Sacar el numero de registros
      $instruccion1 = "select * from taller1 order by idalum desc";
      $consulta1 = mysql_query ($instruccion1)
         or die ("Fallo en la consulta".mysql_error());
   // Mostrar resultados del numero de registros
      $nfilas1 = mysql_num_rows ($consulta1);
	 // Sacar el numero de registros
      $instruccion2 = "select * from taller2 order by idalum desc";
      $consulta2 = mysql_query ($instruccion2)
         or die ("Fallo en la consulta".mysql_error());
   // Mostrar resultados del numero de registros
      $nfilas2 = mysql_num_rows ($consulta2); 
	  // Sacar el numero de registros
      $instruccion3 = "select * from taller3 order by idalum desc";
      $consulta3 = mysql_query ($instruccion3)
         or die ("Fallo en la consulta".mysql_error());
   // Mostrar resultados del numero de registros
      $nfilas3 = mysql_num_rows ($consulta3); 
	   // Sacar el numero de registros
      $instruccion4 = "select * from taller4 order by idalum desc";
      $consulta4 = mysql_query ($instruccion4)
         or die ("Fallo en la consulta".mysql_error());
   // Mostrar resultados del numero de registros
      $nfilas4 = mysql_num_rows ($consulta4);
	  
	  if ($regtaller == '0'){  
    ?>
      <h3 align="center">Selecciona el Taller</h3>
	  <form action="registrar.php" method="post">
      
       <?php if($nfilas1<35){ ?>
       
	    <label class="container">Matemáticas lúdicas para la construcción de ciudadanía<br>
        Dr. Horacio García Mata. Universidad de Tamaulipas
 		 <input type="radio"  name="numtaller" value="1"><br>
	 <p style="color:#C00">Cupo del taller: 35,  
	 <?php print("hay: ".$nfilas1 ." Registrados"); ?>
     </p> <span class="checkmark"></span>
		</label>
        <?php }else { ?>
       
          <label class="container">Matemáticas lúdicas para la construcción de ciudadanía<br>
        Dr. Horacio García Mata. Universidad de Tamaulipas 
 		 <input type="radio" name="numtaller" disabled>
         <br><p style="color:#C00">Ya se lleno el cupo del Taller</p><span class="checkmark"></span>
	  
		</label>
        <?php } 
        if($nfilas2<35){ ?>
        
		<label class="container">Elaboración de proyectos de investigación en contextos de ciudadanía<br>Dr. Omar Iván Gavotto Nogales. Universidad de Sonora
 		 <input type="radio" name="numtaller" value="2">
          <br><p style="color:#C00">Cupo del taller: 35, 
          <?php print("hay: ".$nfilas2 ." Registrados"); ?></p>
 		 <span class="checkmark"></span>
		</label>
        <?php }else { ?>
        
          <label class="container">Elaboración de proyectos de investigación en contextos de ciudadanía<br>Dr. Omar Iván Gavotto Nogales. Universidad de Sonora
 		 <input type="radio"  name="numtaller" disabled>
          <br><p style="color:#C00">Ya se lleno el cupo del Taller</p>
	  <span class="checkmark"></span>
		</label>
        <?php }   
		if($nfilas3<37){ ?>
        
		<label class="container">Construcción de ciudadanía y derechos humanos.<br>
        Dra. Urenda Queletzy Navarro Sánchez. Universidad Autónoma de San Luis Potosí.
 		 <input type="radio" name="numtaller" value="3">
          <br><p style="color:#C00">Cupo del taller: 35, 
          <?php print("hay: ".$nfilas3 ." Registrados"); ?></p>
 		 <span class="checkmark"></span>
		</label>
        <?php }else { ?>
       
          <label class="container">Construcción de ciudadanía y derechos humanos.<br>
        Dra. Urenda Queletzy Navarro Sánchez. Universidad Autónoma de San Luis Potosí. 
 		 <input type="radio"  name="numtaller" disabled>
          <br><p style="color:#C00">Ya se lleno el cupo del Taller</p>
	  <span class="checkmark"></span>
		</label>
        <?php }   
		if($nfilas4<35){ ?>
        
		<label class="container">Estrategias para combatir la discriminación en las aulas.<br>
        Dra. Myriam Rebeca Pérez Daniel. Universidad de Colima.
 		 <input type="radio" name="numtaller" value="4">
          <br><p style="color:#C00">Cupo: 35, 
		  <?php print("hay: ".$nfilas4 ." Registrados"); ?></p>
 		 <span class="checkmark"></span>
		</label>
        <?php }else { ?>
      
          <label class="container">Estrategias para combatir la discriminación en las aulas.<br>
        Dra. Myriam Rebeca Pérez Daniel. Universidad de Colima. 
 		 <input type="radio"  name="numtaller" disabled>
          <br><p style="color:#C00">Ya se lleno el cupo del Taller</p>
	  <span class="checkmark"></span>
		</label>
        <?php }
		
		print ("
		<input type='hidden' name='cuentaalum' value='$cuentaalum'>
			<input type='hidden' name='nomalum' value='$nomalum'>
			<input type='hidden' name='gradoalum' value='$gradoalum'>
			<input type='hidden' name='grupoalum' value='$grupoalum'>
			<input type='hidden' name='carreraalum' value='$carreraalum'>
			<input type='hidden' name='escuelaalum' value='$escuelaalum'>");
		?>
          <input type="submit" class="btn btn-success" value="Registrar">
        
 	 </form>
	<?php } else {
		print("<center>");
   print("<P ALIGN='CENTER'>Ya estas registrado en el taller: ".$numtallerreg ." del 4 Coloquio</p><br>");
  
   print("<P ALIGN='CENTER'>Te esperamos en el 4 Coloquio Nacional de Formaci&oacute;n Docente");
    print("</center>"); 
	} ?>
    </div> <!-- fin de div de 2 col -->
  </div> <!-- fin de div de cols -->


<?php
		} //fin de mostrar la informacion de la encuesta
		else {
			print ("<center><br>Número de cuenta no existe. 
			<br><br>Vuelve a escribir un número de cuenta\n");
			?><br><br><a href="index.php" class="btn btn-success" role="button">Inicio</a></center>
	<?php	} 
 } else{
	 print ("<center><br>No hay un N&uacute;mero de Cuenta. 
	 <br><br>Favor de escribir un número de cuenta\n");
	 ?><br><br><a href="index.php" class="btn btn-success" role="button">Inicio</a></center>
<?php	 }
?>
<br>
<br>
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
</body>
</html>