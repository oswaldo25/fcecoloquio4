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
  background-color:#090; /* #0080C0; */
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
/* estilos de tabla */
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
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
    <!-- <a class="active" href="#home">Alumno</a>
    <a href="#contact">Docente</a> -->
 
  </div> 
 
</div>

<!-- Tab links -->
<div class="tab" align="center">
<center>
  <button class="tablinks" onclick="openCity(event, 'Registro')">Registro</button>
  <button class="tablinks" onclick="openCity(event, 'Programa')">Programa</button>
   <button class="tablinks" onclick="openCity(event, 'Talleres')">Talleres</button>
 </center>
</div>

<!-- Tab content -->
<div id="Registro" class="tabcontent" align="center">
  <h3>Registro del Taller </h3>
<form name="form1" method="POST" action="seleccionar.php">

   <p> <label for="email">No. Cuenta:</label>
    <input type="text" name="clave" /></p>
 

<input type="submit" class="btn btn-default" name="submit" value="Continuar"/>
</form>
</div>

<div id="Programa" class="tabcontent" align="center">
  <h3>Programa de Actividades del 4 Coloquio</h3>
 <table>
  <tr>
     <th colspan="2">Jueves 26 de Abril</th>
     <th colspan="2">Viernes 27 de Abril</th>
   
  </tr>
  <tr>
    <td>8:30 a 9:00</td>
    <td>Inauguración</td>
     <td>9:00 a 10:30</td>
    <td>Conferencia "La educación como medio para el <br>desarrollo de la
ciudadanía" <br>Dr. Omar Iván Gavotto Nogales.
<br>Universidad de Sonora</td>
  </tr>
  <tr>
      <td>9:00 a 10:30</td>
    <td>Conferencia inaugural "Ciudadanía, derechos, culturales y <br>educación en
contextos de inclusiónexclusión social" <br> Dr.Rubens Bayardo García.
<br>Universidad de BuenosAires.
</td>
    <td>10:30 a 11:00</td>
    <td>Receso</td>
  </tr>
  <tr>
  
    <td>10:30 a 11:00</td>
    <td>Receso</td>
    <td>11:00 a 14:00</td>
    <td>Talleres</td>
</td>
  
  </tr>
  <tr>
     <td>11:00 a 14:00</td>
    <td>Talleres</td>
  	<td>14:00 a 16:00</td>
    <td>Comida</td>
  </tr>
   <tr>
     <td>14:00 a 16:00</td>
    <td>Comida</td>
  	<td>16:00 a 19:00</td>
    <td>Panel de diálogo</td>
  </tr>
  <tr>
     <td>16:00 a 19:00</td>
    <td>Talleres</td>
  	<td>19:00 a 20:00</td>
    <td>Clausura</td>
  </tr>
</table>

</div>

<div id="Talleres" class="tabcontent" align="center">
  <h3>Programa de Actividades del 4 Coloquio</h3>
 <table>
  <tr>
  <th>No. Taller</th>
    <th>Nombre del Taller</th>
    <th>Ponente</th>
   
  </tr>
  <tr>
  <td> 1 </td>
    <td>Matemáticas lúdicas para la construcción de ciudadanía</td>
    <td>Dr. Horacio García Mata. Universidad de Tamaulipas</td>
   
  </tr>
  <tr>
  <td> 2 </td>
    <td>Elaboración de proyectos de investigación en contextos de ciudadanía</td>
    <td>Dr. Omar Iván Gavotto Nogales. Universidad de Sonora</td>
   
  </tr>
  <tr>
  <td> 3 </td>
    <td>Construcción de ciudadanía y derechos humanos.</td>
    <td>Dra. Urenda Queletzy Navarro Sánchez. Universidad Autónoma de San Luis Potosí.
</td>
  
  </tr>
  <tr>
  <td> 4 </td>
    <td>Estrategias para combatir la discriminación en las aulas.</td>
    <td>Dra. Myriam Rebeca Pérez Daniel. Universidad de Colima.</td>
  
  </tr>
</table>
</div>
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