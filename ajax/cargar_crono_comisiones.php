<?php
//echo "Hola";
//break;
require_once("../conexion.php");
require_once("../funciones_comisiones.php");

$mes = date("m");
switch($mes){
				  case 01: case 02: case 03: case 04: case 05: case 06:
				  $semestre = "1er Semestre";
				  break;
				  case 07: case 08: case 09: case 10: case 11: case 12:
				  $semestre = "2do Semestre";
				  break;
				  }

if(!isset($_GET["dia"])){
$sWhere = " WHERE anio='".date("Y")."' && periodo='$semestre'";
$dia = "lunes";
$titulo = "Lunes";
$tab_lunes = "class='active'";
$tab_martes = "";
$tab_miercoles = "";
$tab_jueves = "";
$tab_viernes = "";
}else{
$sWhere = " WHERE anio='".date("Y")."' && periodo='$semestre'";
$dia = $_GET['dia'];
switch($_GET["dia"]){
case "martes":
$titulo = "Martes";
$tab_lunes = "";
$tab_martes = "class='active'";
$tab_miercoles = "";
$tab_jueves = "";
$tab_viernes = "";
break;
case "miercoles":
$titulo = "Miércoles";
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
<style type="text/css">
	table{
		font-family:Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif;
		font-weight: bold;
	}
	
#anchotabla {
width:100%;
}

#izq, #der {
float: left;
}

#izq {
margin-right: 10%;
margin-bottom: 10%;	
}

td{
padding: 0px 10px;	
	}	
</style>
<div id="anchotabla">

<div id="izq">
<table border="1px">
<tr>
<td>&nbsp;</td>	
<td colspan="5">1er A&ntilde;o - Direcci&oacute;n Orquestal - Comisi&oacute;n A</td>
</tr>
<tr>
<td>1er Cuatrimestre</td>	
<td>Lunes</td>
<td>Martes</td>
<td>Mi&eacute;rcoles</td>
<td>Jueves</td>
<td>Viernes</td>
</tr>

<tr>
<td>07:45 - 8:30</td>

	<!-- Casillero Lunes 7:45 -->	
<?php
$sql = "SELECT * from materias $sWhere && curso='1er Año' && dia='lunes' && comision='19A' && h_comienzo='07:45:00'";
//echo $sql;
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";
	$id = 1;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	//echo "<td>" . $materia . "</td>";
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td></td>
<?php
}
?>

<!-- Casillero Martes 7:45 -->
<?php
$sql = "SELECT * from materias $sWhere && curso='1er Año' && dia='martes' && comision='19A' && h_comienzo='07:45:00'";
//echo $sql;
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 1;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	//echo "<td>" . $materia . "</td>";
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td></td>
<?php
}
?>

<!-- Casillero Miercoles 7:45 -->
<?php
$sql = "SELECT * from materias $sWhere && curso='1er Año' && dia='miercoles' && comision='19A' && h_comienzo='07:45:00'";
//echo $sql;
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 1;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	//echo "<td>" . $materia . "</td>";
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td></td>
<?php
}
?>

<!-- Casillero Jueves 7:45 -->
<?php
$sql = "SELECT * from materias $sWhere && curso='1er Año' && dia='jueves' && comision='19A' && h_comienzo='07:45:00'";
//echo $sql;
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 1;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	//echo "<td>" . $materia . "</td>";
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td></td>
<?php
}
?>

<!-- Casillero Viernes 7:45 -->
<?php
$sql = "SELECT * from materias $sWhere && curso='1er Año' && dia='viernes' && comision='19A' && h_comienzo='07:45:00'";
//echo $sql;
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 1;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	//echo "<td>" . $materia . "</td>";
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td></td>
<?php
}
?>
</tr>

<tr>

<td>08:30 - 09:15</td>	

<!-- Casillero Lunes 8:30-->
<?php
$sql = "SELECT * from materias $sWhere && curso='1er Año' && dia='lunes' && comision='19A' && h_comienzo='08:30:00'";
//echo $sql;
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";
	$id = 2;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	//echo "<td>" . $materia . "</td>";
	
	casilleroX2($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a2"></td>
<?php
}
?>

<!-- Casillero Martes 8:30-->
<?php
$sql = "SELECT * from materias $sWhere && curso='1er Año' && dia='martes' && comision='19A' && h_comienzo='08:30:00'";
//echo $sql;
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 2;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	//echo "<td>" . $materia . "</td>";
	
	casilleroX2($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="b2"></td>
<?php
}
?>

<!-- Casillero Miercoles 8:30-->
<?php
$sql = "SELECT * from materias $sWhere && curso='1er Año' && dia='miercoles' && comision='19A' && h_comienzo='08:30:00'";
//echo $sql;
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 2;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	//echo "<td>" . $materia . "</td>";
	
	casilleroX2($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="c2"></td>
<?php
}
?>

<!-- Casillero jueves 8:30-->
<?php
$sql = "SELECT * from materias $sWhere && curso='1er Año' && dia='jueves' && comision='19A' && h_comienzo='08:30:00'";
//echo $sql;
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 2;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	//echo "<td>" . $materia . "</td>";
	
	casilleroX2($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="d2"></td>
<?php
}
?>

<!-- Casillero Viernes 8:30-->
<?php
$sql = "SELECT * from materias $sWhere && curso='1er Año' && dia='viernes' && comision='19A' && h_comienzo='08:30:00'";
//echo $sql;
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 2;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	//echo "<td>" . $materia . "</td>";
	
	casilleroX2($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="e2"></td>
<?php
}
?>
</tr>

<tr>
<td>09:30 - 10:15</td>	

<!-- Casillero Lunes 9:30-->
<td id="a3"></td>
<td id="b3"></td>
<td id="c3"></td>
<td id="d3"></td>
<td id="e3"></td>
</tr>

<tr>
<td>10:15 - 11:00</td>	
<td id="a4"></td>
<td id="b4"></td>
<td id="c4"></td>
<td id="d4"></td>
<td id="e4"></td>
</tr>

<tr>
<td>11:30 - 12:15</td>	
<td id="a5"></td>
<td id="b5"></td>
<td id="c5"></td>
<td id="d5"></td>
<td id="e5"></td>
</tr>

<tr>
<td>12:15 - 13:00</td>	
<td id="a6"></td>
<td id="b6"></td>
<td id="c6"></td>
<td id="d6"></td>
<td id="e6"></td>
</tr>

<tr>
<td>13:30 - 14:15</td>	
<td id="a7"></td>
<td id="b7"></td>
<td id="c7"></td>
<td id="d7"></td>
<td id="e7"></td>
</tr>

<tr>
<td>14:15 - 15:00</td>	
<td id="a8"></td>
<td id="b8"></td>
<td id="c8"></td>
<td id="d8"></td>
<td id="e8"></td>
</tr>

<tr>
<td>15:10 - 16:00</td>	
<td id="a9"></td>
<td id="b9"></td>
<td id="c9"></td>
<td id="d9"></td>
<td id="e9"></td>
</tr>

</table>
</div>


<div id="der">
<table border="1px">
<tr>
<td>&nbsp;</td>	
<td colspan="5">A&ntilde;o - Carrera - Comisi&oacute;n</td>
</tr>
<tr>
<td>1er Cuatrimestre</td>	
<td>Lunes</td>
<td>Martes</td>
<td>Mi&eacute;rcoles</td>
<td>Jueves</td>
<td>Viernes</td>
</tr>

</table>
</div>

</div> 

<?php

?>