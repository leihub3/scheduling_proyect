<?php
require_once("conexion.php");
require_once("funciones.php");


if(isset($_GET["mostrar"])){

$cursos = $_GET["cursos"]; // return Array
if(is_array($cursos)){
$curso_implode = implode(",", $cursos);
$curso = $curso_implode = implode(",", $cursos);
$strlen_cursos = strlen($curso_implode);
}else{
$cursos = array($_GET["cursos"]); // return Array
$curso_implode = implode(",", $cursos);
$curso = $curso_implode = implode(",", $cursos);
$strlen_cursos = strlen($curso_implode);
if($strlen_cursos > 0 && $strlen_cursos ==  7) {    
	$anio_curso = substr("$curso_implode",0,7);
	$curso = "'" . $anio_curso . "'";
	}
}

//print_r($cursos);

	if($strlen_cursos > 0 && $strlen_cursos ==  7) {    
	$anio_curso = substr("$curso_implode",0,7);
	$curso = "'" . $anio_curso . "'";
	}elseif($strlen_cursos > 8 && $strlen_cursos ==  15){
	$anio_curso = substr("$curso_implode",0,7);
	$anio_curso2 = substr("$curso_implode",8,7);
	$curso = "'" . $anio_curso . "','" . $anio_curso2 . "'";
	}elseif($strlen_cursos > 16 && $strlen_cursos ==  23){
	$anio_curso = substr("$curso_implode",0,7);
	$anio_curso2 = substr("$curso_implode",8,7);
	$anio_curso3 = substr("$curso_implode",16,7);
	$curso = "'" . $anio_curso . "','" . $anio_curso2 . "','" . $anio_curso3 . "'";
	}elseif($strlen_cursos > 24 && $strlen_cursos ==  31){
	$anio_curso = substr("$curso_implode",0,7);
	$anio_curso2 = substr("$curso_implode",8,7);
	$anio_curso3 = substr("$curso_implode",16,7);
	$anio_curso4 = substr("$curso_implode",24,7);
	$curso = "'" . $anio_curso . "','" . $anio_curso2 . "','" . $anio_curso3 . "','" . $anio_curso4 . "'";
	}elseif($strlen_cursos > 32 && $strlen_cursos ==  39){
	$anio_curso = substr("$curso_implode",0,7);
	$anio_curso2 = substr("$curso_implode",8,7);
	$anio_curso3 = substr("$curso_implode",16,7);
	$anio_curso4 = substr("$curso_implode",24,7);
	$anio_curso5 = substr("$curso_implode",32,7);    
	$curso = "'" . $anio_curso . "','" . $anio_curso2 . "','" . $anio_curso3 . "','" . $anio_curso4 . "','" . $anio_curso5 . "'";
	}
	

$periodo = $_GET["periodo"];
$anio = substr("$periodo",0,4); 
$semestre = substr("$periodo",7,12);

}else{

//header("Location: cronogramas_periodo.php?dia=lunes&mostrar=OK&cursos%5B%5D=1er+A%F1o&cursos%5B%5D=2do+A%F1o&cursos%5B%5D=3er+A%F1o&cursos%5B%5D=4to+A%F1o&cursos%5B%5D=5to+A%F1o&periodo=2017+-+2do+Semestre");

$mes = date("m");
switch($mes){
				  case "01": case "02": case "03": case "04": case "05": case "06":
				  $semestre = "1er Semestre";
				  break;
				  case "07": case "08": case "09": case "10": case "11": case "12":
				  $semestre = "2do Semestre";
				  break;
				  }
				  
$periodo = date("Y") . " - " . $semestre;
$anio = substr("$periodo",0,4);
$cursos = array("'1er Año'","'2do Año'","'3er Año'","'4to Año'","'5to Año'"); //$_POST['states']; // return Array
$count_cursos = count( $cursos );

if( $count_cursos > 0) {
    $curso = implode( ', ', $cursos);   
	//echo $curso;
	//break;
} 

}


if(!isset($_GET["dia"])){
$dia = "lunes";
$titulo = "Lunes";
$tab_lunes = "class='active'";
$tab_martes = "";
$tab_miercoles = "";
$tab_jueves = "";
$tab_viernes = "";
}else{
$dia = $_GET["dia"];
switch($_GET["dia"]){
case "lunes":
$titulo = "Lunes";
$tab_lunes = "class='active'";
$tab_martes = "";
$tab_miercoles = "";
$tab_jueves = "";
$tab_viernes = "";
break;
case "martes":
$titulo = "Martes";
$tab_lunes = "";
$tab_martes = "class='active'";
$tab_miercoles = "";
$tab_jueves = "";
$tab_viernes = "";
break;
case "miercoles":
$titulo = "Mi&eacute;rcoles";
$tab_lunes = "";
$tab_martes = "";
$tab_miercoles = "class='active'";
$tab_jueves = "";
$tab_viernes = "";
break;
case "jueves":
$titulo = "Jueves";
$tab_lunes = "";
$tab_martes = "";
$tab_miercoles = "";
$tab_jueves = "class='active'";
$tab_viernes = "";
break;
case "viernes":
$titulo = "Viernes";
$tab_lunes = "";
$tab_martes = "";
$tab_miercoles = "";
$tab_jueves = "";
$tab_viernes = "class='active'";
break;
}
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> <!-- charset="UTF-8"-->
<title>Crongrama UCA</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/bootstrap-multiselect.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/bootstrap-multiselect.js?2435"></script>
<style>
table td{
font-weight:bold;
}

.btn-border{
border-radius:0px !important;
}


/* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      border-radius: 0;
    }
  
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
	
#titulo{
text-align:center}	

</style>
</head>

<body>




<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CRONO<span class="glyphicon glyphicon-calendar"></span>UCA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="materias.php">Materias</a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
      </ul>
    </div>
  </div>
</nav>


  
<div class="container-fluid">

<div class="col-md-12"><h3 id="titulo">CRONOGRAMA UCA - <?php echo $semestre . " " . $anio; ?></h3>
<div style="text-align:center"><strong>Cursos: </strong>Todos</div></div>

<div class="col-md-6 pull-right"><span id="loader" style="position:fixed; bottom:0px; left:0px;"></span>

 <!-- Select Multiple COMIENZO--> 
<form role="form" method="get" action="cronogramas_periodo.php" ><!--  -->
        <button class="btn btn-uca btn-border" id="btn_multiple" type="submit" ><span class="glyphicon glyphicon-eye-open"></span> Mostrar por A&ntilde;o y Per&iacute;odo:</button> <!-- onclick="load(1);"-->

	  <input type="hidden" value="<?php echo $dia; ?>" id="select_dia" name="dia">
	  <!--<input type="text" value="OKII" id="select_mostrar" name="mostrar">-->
	  <select id="select_cursos" name="cursos[]" multiple="multiple" title="Seleccionar A&ntilde;os de Cursado">
	  <optgroup label="A&ntilde;o" >
<option value="'1er A&ntilde;o'">1er A&ntilde;o</option>
<option value="'2do A&ntilde;o'">2do A&ntilde;o</option>
<option value="'3er A&ntilde;o'">3er A&ntilde;o</option>
<option value="'4to A&ntilde;o'">4to A&ntilde;o</option>
<option value="'5to A&ntilde;o'">5to A&ntilde;o</option>
</optgroup>
	  </select>
	<select id="select_periodos" class="btn-border" name="periodo">
	<option value="" disabled selected>Seleccionar Per&iacute;odo</option>
	<optgroup label="Per&iacute;odo">
<?php
$anio_actual = date("Y");
$anio_sig = date("Y")+1;

$sql = "SELECT * from materias where anio != '$anio_actual' && anio !='$anio_sig' order by anio asc, periodo asc";
$res = $con->query($sql);
if($res->num_rows > 0){
$row = $res->fetch_assoc();
$anio = $row["anio"];
switch($row["periodo"]){
case "1er Semestre":
echo "<option value='" . $row["anio"] . " - " . $row["periodo"] . "'>" . $row["anio"] . " - " . $row["periodo"] .  "</option>";
echo "<option value='" . $row["anio"] . " - " . "2do Semestre" . "'>" . $row["anio"] . " - " . "2do Semestre" . "</option></optgroup>";
break;
case "2do Semestre":
echo "<option value='" . $row["anio"] . " - " . $row["periodo"] . "'>" . $row["anio"] . " - " . $row["periodo"] . "</option></optgroup>";
break;
}	
}

$sql = "SELECT * from materias where anio != '$anio_actual' && anio <'$anio_sig' order by anio asc";
$res = $con->query($sql);
if($res->num_rows > 0){
while($row = $res->fetch_assoc()){
	if($row["anio"] != $anio){	
		//$anios[] .= $row["anio"];		
		echo "<option value='" . $row["anio"] . " - " . "1er Semestre" . "'>" . $row["anio"] . " - " . "1er Semestre" . "</option>";
		echo "<option value='" . $row["anio"] . " - " . "2do Semestre" . "'>" . $row["anio"] . " - " . "2do Semestre" . "</option></optgroup>";		
		$anio = $anio+1;
		}
//$periodo1 = $row["periodo"];
}
}

$sql = "SELECT * from materias where anio = '2016' order by periodo desc";
$res = $con->query($sql);
if($res->num_rows > 0){
$row = $res->fetch_assoc();
	
	switch($row["periodo"]){
	case "1er Semestre":
	echo "<option value='" . $row["anio"] . " - " . $row["periodo"] . "'>" . $row["anio"] . " - " . $row["periodo"] .  "</option></optgroup>";
	echo "<option value='" . $row["anio"] . " - " . "2do Semestre" . "'>" . $row["anio"] . " - " . "2do Semestre" . "</option></optgroup>";	
	break;
	case "2do Semestre":
	echo "<option value='" . $row["anio"] . " - " . $row["periodo"] . "' >" . $row["anio"] . " - " . $row["periodo"] .  "</option></optgroup>";
	break;
		}
}


$sql = "SELECT * from materias where anio = '$anio_actual' && anio != '2016' order by periodo desc";
$res = $con->query($sql);
if($res->num_rows > 0){
$row = $res->fetch_assoc();
	
	switch($row["periodo"]){
	case "1er Semestre":
	echo "<option value='" . $row["anio"] . " - " . $row["periodo"] . "'>" . $row["anio"] . " - " . $row["periodo"] .  "</option></optgroup>";
	break;
	case "2do Semestre":
	echo "<option value='" . $row["anio"] . " - " . "1er Semestre" . "'>" . $row["anio"] . " - " . "1er Semestre" . "</option></optgroup>";	
	echo "<option value='" . $row["anio"] . " - " . $row["periodo"] . "' >" . $row["anio"] . " - " . $row["periodo"] .  "</option></optgroup>";
	break;
		}
}


$sql = "SELECT * from materias where anio = '$anio_sig' order by periodo desc";
$res = $con->query($sql);
if($res->num_rows > 0){
$row = $res->fetch_assoc();
	
	switch($row["periodo"]){
	case "1er Semestre":
	echo "<option value='" . $row["anio"] . " - " . $row["periodo"] . "'>" . $row["anio"] . " - " . $row["periodo"] .  "</option></optgroup>";
	break;
	case "2do Semestre":
	echo "<option value='" . $row["anio"] . " - " . "1er Semestre" . "'>" . $row["anio"] . " - " . "1er Semestre" . "</option>";
	echo "<option value='" . $row["anio"] . " - " . $row["periodo"] . "'>" . $row["anio"] . " - " . $row["periodo"] .  "</option></optgroup>";
	break;
		}
}

$sql = "SELECT * from materias where anio > '$anio_sig' order by periodo desc";
$res = $con->query($sql);
if($res->num_rows > 0){
$row = $res->fetch_assoc();
	
	switch($row["periodo"]){
	case "1er Semestre":
	echo "<option value='" . $row["anio"] . " - " . $row["periodo"] . "'>" . $row["anio"] . " - " . $row["periodo"] .  "</option></optgroup>";
	break;
	case "2do Semestre":
	echo "<option value='" . $row["anio"] . " - " . "1er Semestre" . "'>" . $row["anio"] . " - " . "1er Semestre" . "</option>";
	echo "<option value='" . $row["anio"] . " - " . $row["periodo"] . "'>" . $row["anio"] . " - " . $row["periodo"] .  "</option></optgroup>";
	break;
		}
}
?>
</select></form> 
	
<?php


?>
<!-- Select Multiple FIN--> 
</div>


  <ul class="nav nav-tabs">
    <li <?php echo $tab_lunes; ?>><a href="index.php" onclick="load(1);">Lunes</a></li> <!-- " -->
    <li <?php echo $tab_martes; ?>><a href="index.php?dia=martes" onclick="load(1);">Martes</a></li> <!--  -->
    <li <?php echo $tab_miercoles; ?>><a href="index.php?dia=miercoles">Mi&eacute;rcoles</a></li>
    <li <?php echo $tab_jueves; ?>><a href="index.php?dia=jueves">Jueves</a></li>
	<li <?php echo $tab_viernes; ?>><a href="index.php?dia=viernes">Viernes</a></li>
  </ul>
  
  
  
  <form class="form-horizontal" role="form">
  <input type="hidden" name="crono_dia" id="crono_dia" value="<?php echo $dia; ?>" />
  </form>
  
  <div class="panel panel-default">
  <div class="panel-heading">
  <div class="btn-group pull-right">
  
   
  <a  class="btn btn-uca" data-toggle="modal" data-target="#ModalAgregarMateria" style="margin-right:5px;"><span class="glyphicon glyphicon-plus" ></span> Agregar Materia</a>
  
  <button type="button" class="btn btn-uca dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <span class="glyphicon glyphicon-print" ></span> IMPRIMIR Cronogramas<span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a target="_blank" href="pdf/documentos/ver_cronograma.php">Lunes</a></li>
	<li><a target="_blank" href="pdf/documentos/ver_cronograma.php?dia=martes">Martes</a></li>
	<li><a target="_blank" href="pdf/documentos/ver_cronograma.php?dia=miercoles">Miércoles</a></li>
	<li><a target="_blank" href="pdf/documentos/ver_cronograma.php?dia=jueves">Jueves</a></li>
	<li><a target="_blank" href="pdf/documentos/ver_cronograma.php?dia=viernes">Viernes</a></li>
	</ul>
  
 </div>
    <h4><?php echo $titulo; ?></h4>
	
  </div>
  
  <div class="panel-body">
  <?php
  include("modal/agregar_materia.php");
  ?>
     <div class="col-sm-12 text-left">
	 
	 <div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->
	 
      
				</div>
		</div>
   
    </div>
    
  </div>
</div>

<script type="text/javascript" src="js/cronograma.js"></script>
</body>
</html>
<script>
$("#ingresar_materia").click(function(){
    var txt = $("#nueva_materia").serialize();
    $.post("ajax/agregar_materia.php", txt, function(result){
        $("#resultados_ajax").html(result).hide();	
		load(1);
	document.getElementById("nueva_materia").reset();	
	$("#resultados_ajax").html(result).fadeIn(1000);
    });
	
});

<!-- Initialize the plugin: -->
       // $('#select_cursos').multiselect();
		$('#select_periodos').multiselect();
		
	$(document).ready(function() {
        $('#select_cursos').multiselect({
            includeSelectAllOption: true
        });
    });	

		
		/*
		$('#btn_multiple').click(function(){
		//document.form_multiple.submit();
		var txt = $("#form_multiple").serialize();
    $.post("ajax/cargar_cronograma.php", txt, function(result){
        //$("#resultados_ajax").html(result).hide();	
		load(1);
	//document.getElementById("nueva_materia").reset();	
	//$("#resultados_ajax").html(result).fadeIn(1000);
    });
		
		});
		*/
		
</script>



