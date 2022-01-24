<?php
require_once("conexion.php");
require_once("funciones.php");

//header("Location: materias_periodo.php?periodo=2017+-+2do+Semestre");

if(isset($_GET["msg"]) && $_GET["msg"] == "OK"){
	echo "<script>alert('Materias eliminadas exitosamente.');</script>";
}

$mes = date("m");
switch($mes){
				  case 01: case 02: case 03: case 04: case 05: case 06:
				  $semestre = "1er Semestre";
				  break;
				  case 07: case 08: case 09: case 10: case 11: case 12:
				  $semestre = "2do Semestre";
				  break;
				  }
$periodo = date("Y") . " - " . $semestre;

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Crongrama UCA</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/custom.css">
 <link rel="stylesheet" href="css/bootstrap-multiselect.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/bootstrap-multiselect.js"></script>
<style>
/* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      border-radius: 0;
    }
  
    /* Set black background color, white text and some padding */

    
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
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="materias.php">Materias</a></li>
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
<div class="col-md-12"><h3 id="titulo">Listado de Materias UCA: <?php echo $periodo; ?></h3></div>

<div style="text-align:center"> 

 <!-- Select Multiple COMIENZO--> 
<form role="form" method="get" action="materias_periodo.php" style="margin-bottom:5px;" ><!--  -->
        <button class="btn btn-uca btn-border" id="btn_multiple" type="submit" ><span class="glyphicon glyphicon-eye-open"></span> Mostrar por Per&iacute;odo:</button> <!-- onclick="load(1);"-->

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

 <div class="col-md-7 pull-right"></div>

 

  <div class="panel panel-default">
  <div class="panel-heading">
  <div class="btn-group pull-right">
  
  <!-- BOTON Agregar Materia -->
  
  <a  class="btn btn-uca" data-toggle="modal" data-target="#ModalAgregarMateria" style="margin-right:5px;"><span class="glyphicon glyphicon-plus" ></span> Agregar Materia</a>
  
<!-- Fin btn Agregar Mat -->
 
 <!-- BOTON DESCARGAR EXCEL MATERIAS -->
  <div class="btn-group">
 <button type="button" class="btn btn-uca dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right:5px;">
   <span class="glyphicon glyphicon-download-alt" ></span> DESCARGAR EXCEL<span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
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
echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"]. " - 2do Semestre" ."'>".$row["anio"] . " - " . "2do Semestre" ."</a></li>";
break;
case "2do Semestre":
echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
break;
}	
}

$sql = "SELECT * from materias where anio != '$anio_actual' && anio <'$anio_sig' order by anio asc";
$res = $con->query($sql);
if($res->num_rows > 0){
while($row = $res->fetch_assoc()){
	if($row["anio"] != $anio){	
		//$anios[] .= $row["anio"];		
		echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"]. " - 1er Semestre" ."'>".$row["anio"] . " - " . "1er Semestre" ."</a></li>";
		echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"]. " - 2do Semestre" ."'>".$row["anio"] . " - " . "2do Semestre" ."</a></li>";		
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
	echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
	echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"]. " - 2do Semestre" ."'>".$row["anio"] . " - " . "2do Semestre" ."</a></li>";
	break;
	case "2do Semestre":
	echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
	break;
		}
}


$sql = "SELECT * from materias where anio = '$anio_actual' && anio != '2016' order by periodo desc";
$res = $con->query($sql);
if($res->num_rows > 0){
$row = $res->fetch_assoc();
	
	switch($row["periodo"]){
	case "1er Semestre":
	echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
	break;
	case "2do Semestre":
	echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"]. " - 1er Semestre" ."'>".$row["anio"] . " - " . "1er Semestre" ."</a></li>";
	echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
	break;
	 	}
}


$sql = "SELECT * from materias where anio = '$anio_sig' order by periodo desc";
$res = $con->query($sql);
if($res->num_rows > 0){
$row = $res->fetch_assoc();
	
	switch($row["periodo"]){
	case "1er Semestre":
	echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
	break;
	case "2do Semestre":
	echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"]. " - 1er Semestre" ."'>".$row["anio"] . " - " . "1er Semestre" ."</a></li>";
	echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
	break;
		}
}

$sql = "SELECT * from materias where anio > '$anio_sig' order by periodo desc";
$res = $con->query($sql);
if($res->num_rows > 0){
$row = $res->fetch_assoc();
	
	switch($row["periodo"]){
	case "1er Semestre":
	echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
	break;
	case "2do Semestre":
	echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"]. " - 1er Semestre" ."'>".$row["anio"] . " - " . "1er Semestre" ."</a></li>";
	echo "<li><a target='_blank' href='excel/materias_excel.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
	break;
		}
}

$mes = date("m");
switch($mes){
				  case 01: case 02: case 03: case 04: case 05: case 06:
				  $semestre = "1er Semestre";
				  break;
				  case 07: case 08: case 09: case 10: case 11: case 12:
				  $semestre = "2do Semestre";
				  break;
				  }
$periodo = date("Y") . " - " . $semestre;

?>
	</ul>
</div>
   <!-- fin EXCEL-->
 
 <!-- BOTON IMPRIMIR LISTADO -->
 <div class="btn-group">
 <button type="button" class="btn btn-uca dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <span class="glyphicon glyphicon-print" ></span> IMPRIMIR Listado<span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
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
echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"]. " - 2do Semestre" ."'>".$row["anio"] . " - " . "2do Semestre" ."</a></li>";
break;
case "2do Semestre":
echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
break;
}	
}

$sql = "SELECT * from materias where anio != '$anio_actual' && anio <'$anio_sig' order by anio asc";
$res = $con->query($sql);
if($res->num_rows > 0){
while($row = $res->fetch_assoc()){
	if($row["anio"] != $anio){	
		//$anios[] .= $row["anio"];		
		echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"]. " - 1er Semestre" ."'>".$row["anio"] . " - " . "1er Semestre" ."</a></li>";
		echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"]. " - 2do Semestre" ."'>".$row["anio"] . " - " . "2do Semestre" ."</a></li>";		
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
	echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
	echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"]. " - 2do Semestre" ."'>".$row["anio"] . " - " . "2do Semestre" ."</a></li>";
	break;
	case "2do Semestre":
	echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
	break;
		}
}


$sql = "SELECT * from materias where anio = '$anio_actual' && anio != '2016' order by periodo desc";
$res = $con->query($sql);
if($res->num_rows > 0){
$row = $res->fetch_assoc();
	
	switch($row["periodo"]){
	case "1er Semestre":
	echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
	break;
	case "2do Semestre":
	echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"]. " - 1er Semestre" ."'>".$row["anio"] . " - " . "1er Semestre" ."</a></li>";
	echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
	break;
	 	}
}


$sql = "SELECT * from materias where anio = '$anio_sig' order by periodo desc";
$res = $con->query($sql);
if($res->num_rows > 0){
$row = $res->fetch_assoc();
	
	switch($row["periodo"]){
	case "1er Semestre":
	echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
	break;
	case "2do Semestre":
	echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"]. " - 1er Semestre" ."'>".$row["anio"] . " - " . "1er Semestre" ."</a></li>";
	echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
	break;
		}
}

$sql = "SELECT * from materias where anio > '$anio_sig' order by periodo desc";
$res = $con->query($sql);
if($res->num_rows > 0){
$row = $res->fetch_assoc();
	
	switch($row["periodo"]){
	case "1er Semestre":
	echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
	break;
	case "2do Semestre":
	echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"]. " - 1er Semestre" ."'>".$row["anio"] . " - " . "1er Semestre" ."</a></li>";
	echo "<li><a target='_blank' href='pdf/documentos/ver_materias.php?periodo=".$row["anio"] . " - " . $row["periodo"]."'>".$row["anio"] . " - " . $row["periodo"] ."</a></li>";
	break;
		}
}

$mes = date("m");
switch($mes){
				  case 01: case 02: case 03: case 04: case 05: case 06:
				  $semestre = "1er Semestre";
				  break;
				  case 07: case 08: case 09: case 10: case 11: case 12:
				  $semestre = "2do Semestre";
				  break;
				  }
$periodo = date("Y") . " - " . $semestre;

?>
<hr>
<li><a target="_blank" title="Imprimir Per&iacute;odo: <?php echo $periodo; ?>" href="pdf/documentos/ver_materias.php?orden=profes&periodo=<?php echo $periodo; ?>">Orden Alfab. Profesores</a></li>

<!-- Fin Imprimir Listado -->

	</ul>
</div>
  
 </div>
    <h4>Materias</h4>
  </div>
  
  <div class="panel-body">
  <?php
  include("modal/agregar_materia.php");
  include("modal/editar_materia.php");
  include("modal/copiar_materia.php");
  ?>
  <div class="col-md-3"></div>
 
  <div class="col-md-6">
   <div class="input-group" style="margin-bottom:10px;">
   <form class="form-horizontal" role="form">
     <input type="text" class="form-control" id="q" placeholder="Profesor &oacute; Materia" onchange="load(1);">
	 <input type="hidden" class="form-control" id="p" value="<?php echo $_GET["periodo"] ?>">
	 </form>
      <span class="input-group-btn">
        <button class="btn btn-default" type="button"  onclick='load(1);'><span class="glyphicon glyphicon-search" ></span> Buscar</button>
      </span>
	   
    </div><!-- /input-group -->
</div><!-- /.row -->
<span id="loader"></span>
     <div class="col-sm-12 text-left">
	 <form name="imp_seleccion" target="_self" method="post" action="copia_masiva.php">
	 <div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->
	 
      
				</div>
		</div>
   
    </div>
    </form>
  </div>
</div>

<?php	 
	
?>	

<script type="text/javascript" src="js/materias.js"></script>
</body>
</html>
<script>
$('#select_periodos').multiselect();
$("#ingresar_materia").click(function(){
    var txt = $("#nueva_materia").serialize();
    $.post("ajax/agregar_materia.php", txt, function(result){
        $("#resultados_ajax").html(result).hide();	
		load(1);
	document.getElementById("nueva_materia").reset();	
	$("#resultados_ajax").html(result).fadeIn(1000);
    });
	
});


$("#actualizar_materia").click(function(){
   var txt = $("#editar_materia").serialize();
    $.post("ajax/editar_materia.php", txt, function(result){
        $("#resultados_ajax_editar").html(result).hide();	
		load(1);
	$("#resultados_ajax_editar").html(result).fadeIn(1000);		
    });
	
});

$("#duplicar_materia").click(function(){
   var txt = $("#copiar_materia").serialize();
    $.post("ajax/copiar_materia.php", txt, function(result){
        $("#resultados_ajax_copiar").html(result).hide();	
		load(1);
	$("#resultados_ajax_copiar").html(result).fadeIn(1000);		
    });
	
});


function obtener_datos(id,ccarr,cmat,anio,periodo,nombre,curso,profesor,aula,dia,hcomienzo,hfin){
			$("#editar_materia_id").val(id);
			$("#editar_materia_ccarr").val(ccarr);
			$("#editar_materia_cmat").val(cmat);
			$("#editar_materia_anio").val(anio);
			$("#editar_materia_periodo").val(periodo);
			$("#editar_materia_nombre").val(nombre);
			$("#editar_materia_curso").val(curso);
			$("#editar_materia_profesor").val(profesor);
			$("#editar_materia_aula").val(aula);
			$("#editar_materia_dia").val(dia);
			$("#editar_materia_hcomienzo").val(hcomienzo);
			$("#editar_materia_hfin").val(hfin);
		}
		
function obtener_datos_copiar(id,ccarr,cmat,anio,periodo,nombre,curso,profesor,aula,dia,hcomienzo,hfin){
			$("#copiar_materia_id").val(id);
			$("#copiar_materia_ccarr").val(ccarr);
			$("#copiar_materia_cmat").val(cmat);
			$("#copiar_materia_anio").val(anio);
			$("#copiar_materia_periodo").val(periodo);
			$("#copiar_materia_nombre").val(nombre);
			$("#copiar_materia_curso").val(curso);
			$("#copiar_materia_profesor").val(profesor);
			$("#copiar_materia_aula").val(aula);
			$("#copiar_materia_dia").val(dia);
			$("#copiar_materia_hcomienzo").val(hcomienzo);
			$("#copiar_materia_hfin").val(hfin);
		}		


function preguntar(a,b){
var id = "ajax/eliminar_materia.php?id=" + a;
var nombre = "¿Realmente deseas eliminar la materia: " + b + "?";
   eliminar=confirm(nombre);
   if (eliminar)
   //Redireccionamos si das a aceptar
     window.location.href = id; //página web a la que te redirecciona si confirmas la eliminaci&oacute;n
else
  //Y aqu&iacute; pon cualquier cosa que quieras que salga si le diste al boton de cancelar
    window.location.href = "materias.php";
}




</script>
