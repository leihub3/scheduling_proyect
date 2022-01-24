<?php
//print_r($_GET);
//break;
require_once("../../conexion.php");
require_once("../../funciones.php");

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
$dia = "miercoles";
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

$mes = date("m");
switch($mes){
				  case 01: case 02: case 03: case 04: case 05: case 06:
				  $semestre = "1er Semestre";
				  break;
				  case 07: case 08: case 09: case 10: case 11: case 12:
				  $semestre = "2do Semestre";
				  break;
				  }

$sWhere = " WHERE anio='".$_GET["anio"]."' && periodo='".$_GET["semestre"]."'"; //

?>
<style>
table{
border-collapse: collapse;
}

th{text-align:center;
}
td{
width:115px;
font-size:14px;
}

table, th, td {
    border: 1px solid black;
}


</style>
<page backtop="1mm" backbottom="1mm" backleft="8mm" backright="8mm" style="font-size: 12pt; font-family: arial" >
   <page_footer>
   
        <table class="page_footer">
            <tr>
                <td style="width: 100%; text-align: left; border-color:white; padding-left:10px;">
	
                    <?php 				
						
					echo "CRONOGRAMA UCA - " . $_GET["semestre"] . " de " . $_GET["anio"] . ". A&ntilde;os de Cursado: Todos. D&iacute;a: " . $titulo;	
					?>
                </td>
            </tr>
        </table>
		
    </page_footer>



<table border="1">  
    <thead>
<tr>
  <th colspan="12" align="center">CRONOGRAMA UCA - <?php echo $_GET["semestre"] . " " . $_GET["anio"];?> </th>
  </tr>
  <tr>
  <th colspan="12" align="center"><?php echo ucwords($titulo); ?></th>
  </tr>
 
 <tr>
	<th>&nbsp;</th>
	<th>901</th>
	<th>903</th>
	<th>904</th>
	<th>905</th>
	<th>907</th>
	<th>908</th>
	<th>GINAS</th>
	<th>MIDI</th>
	<th>S02</th>
	<th>O1</th>
	<th>O2</th>	
</tr>

</thead>
<tbody>
	<tr>
	<td>7:45 - 8:30</td>
	<!-- CASILLERO 901_7:45 -->	
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='07:45:00'";
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
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td></td>
<?php
}
?>	
	
	
	<!-- CASILLERO 903_7:45 -->	
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='07:45:00'";
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
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td></td>
<?php
}
?>
	
	
	<!-- CASILLERO 904_7:45 -->	
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='07:45:00'";
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
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id,$id);
}else{
?>
<td></td>
<?php
}
?>
	
	<!-- CASILLERO 905_7:45 -->	
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='07:45:00'";
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
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td></td>
<?php
}
?>
	
	<!-- CASILLERO 907_7:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='07:45:00'";
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
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td></td>
<?php
}
?>	
	
	
	<!-- CASILLERO 908_7:45 -->	
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='07:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 1;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td></td>
<?php
}
?>
	
	<!-- CASILLERO GINAS_7:45 -->	
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='07:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 1;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td></td>
<?php
}
?>
	
	<!-- CASILLERO MIDI_7:45 -->	
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='07:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 1;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td></td>
<?php
}
?>
	
	<!-- CASILLERO S02_7:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='07:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 1;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td></td>
<?php
}
?>


<!-- CASILLERO Otra 1_7:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='07:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 1;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td></td>
<?php
}
?>


<!-- CASILLERO Otra 2_7:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='07:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 1;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td></td>
<?php
}
?>
	
	</tr>
	
	<tr>	
	<td>8:30 - 9:15</td>
	<!-- CASILLERO 901_8:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='08:30:00'";
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
	
	casilleroX2($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a2"></td>
<?php
}
?>
	<!-- CASILLERO 903_8:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='08:30:00'";
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
	
	casilleroX2($aula,$h_fin, $color, $materia, $profesor, $letra_id,$id);
}else{
?>
<td id="b2">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 904_8:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='08:30:00'";
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
	
	casilleroX2($aula,$h_fin, $color, $materia, $profesor, $letra_id,$id);
}else{
?>
<td id="c2">&nbsp;</td>
<?php
}
?>
	
	<!-- CASILLERO 905_8:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='08:30:00'";
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
	
	casilleroX2($aula,$h_fin, $color, $materia, $profesor, $letra_id,$id);
}else{
?>
<td id="d2">&nbsp;</td>
<?php
}
?>

	<!-- CASILLERO 907_8:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='08:30:00'";
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
	
	casilleroX2($aula,$h_fin, $color, $materia, $profesor, $letra_id,$id);
}else{
?>
<td id="e2">&nbsp;</td>
<?php
}
?>
	
	<!-- CASILLERO 908_8:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='08:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 2;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX2($aula,$h_fin, $color, $materia, $profesor, $letra_id,$id);
}else{
?>
<td id="f2">&nbsp;</td>
<?php
}
?>

	<!-- CASILLERO GINAS_8:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='08:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 2;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX2($aula,$h_fin, $color, $materia, $profesor, $letra_id,$id);
}else{
?>
<td id="g2">&nbsp;</td>
<?php
}
?>
	
	<!-- CASILLERO MIDI_8:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='08:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 2;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX2($aula,$h_fin, $color, $materia, $profesor, $letra_id,$id);
}else{
?>
<td id="h2">&nbsp;</td>
<?php
}
?>
	
	<!-- CASILLERO S02_8:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='08:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 2;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX2($aula,$h_fin, $color, $materia, $profesor, $letra_id,$id);
}else{
?>
<td id="i2">&nbsp;</td>
<?php
}
?>

<!-- CASILLERO Otra 1_8:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='08:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 2;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="j2"></td>
<?php
}
?>


<!-- CASILLERO Otra 2_8:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='08:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 2;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX1($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="k2"></td>
<?php
}
?>
	
	</tr>
	
	<tr>
	<td>9:15 - 9:30</td>
	<td colspan="11" bgcolor="#999999"></td>
	</tr>
	
	<tr>
	<td>9:30 - 10:15</td>
	<!-- CASILLERO 901_9:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='09:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";
	$id = 3;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX3($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a3">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 903_9:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='09:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 3;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX3($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="b3">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 904_9:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='09:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 3;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX3($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="c3">&nbsp;</td>
<?php
}
?>
	
	<!-- CASILLERO 905_9:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='09:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 3;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX3($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="d3">&nbsp;</td>
<?php
}
?>
	
	<!-- CASILLERO 907_9:30 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='09:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 3;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX3($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="e3">&nbsp;</td>
<?php
}
?>
	
	<!-- CASILLERO 908_9:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='09:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 3;

	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX3($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="f3">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO GINAS_9:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='09:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 3;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX3($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="g3">&nbsp;</td>
<?php
}
?>
	
	<!-- CASILLERO MIDI_9:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='09:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 3;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX3($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="h3">&nbsp;</td>
<?php
}
?>
	
	<!-- CASILLERO S02_9:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='09:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 3;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX3($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="i3">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 1_9:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='09:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 3;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX3($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="j3">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 2_9:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='09:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 3;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX3($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="k3">&nbsp;</td>
<?php
}
?>
	
	
	</tr>
	
	<tr>
	<td>10:15 - 11:00</td>
	
	<!-- CASILLERO 901_10:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='10:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";
	$id = 4;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX4($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a4">&nbsp;</td>
<?php
}
?>
	
	<!-- CASILLERO 903_10:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='10:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 4;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX4($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="b4">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 904_10:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='10:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 4;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX4($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="c4">&nbsp;</td>
<?php
}
?>
	
	<!-- CASILLERO 905_10:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='10:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 4;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX4($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="d4">&nbsp;</td>
<?php
}
?>
	
	<!-- CASILLERO 907_10:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='10:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 4;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX4($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="e4">&nbsp;</td>
<?php
}
?>
	
	<!-- CASILLERO 908_10:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='10:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 4;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX4($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="f4">&nbsp;</td>
<?php
}
?>
	
	<!-- CASILLERO GINAS_10:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='10:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 4;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX4($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="g4">&nbsp;</td>
<?php
}
?>
	
	<!-- CASILLERO MIDI_10:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='10:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 4;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX4($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="h4">&nbsp;</td>
<?php
}
?>
	
	<!-- CASILLERO S02_10:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='10:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 4;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX4($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="i4">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 1_10:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='10:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 4;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX4($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="j4">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 2_10:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='10:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 4;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX4($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="k4">&nbsp;</td>
<?php
}
?>

	</tr>
	
	<tr>
	<td>11:00 - 11:30</td>
	<td colspan="11" bgcolor="#999999"></td>
	</tr>
	
	<tr>
	<td>11:30 - 12:15</td>
	<!-- CASILLERO 901_11:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='11:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";
	$id = 5;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX5($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a5">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 903_11:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='11:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 5;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX5($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="b5">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 904_11:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='11:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 5;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX5($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="c5">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 905_11:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='11:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 5;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX5($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="d5">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 907_11:30 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='11:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 5;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX5($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="e5">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 908_11:30 -->
			<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='11:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 5;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX5($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="f5">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO GINAS_11:30 -->
				<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='11:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 5;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX5($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="g5">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO MIDI_11:30 -->
				<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='11:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 5;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX5($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="h5">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO S02_11:30 -->
					<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='11:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 5;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX5($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="i5">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 1_11:30 -->
					<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='11:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 5;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX5($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="j5">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 2_11:30 -->
					<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='11:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 5;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX5($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="k5">&nbsp;</td>
<?php
}
?>
	
	
	</tr>
	
	<tr>
	<td>12:15 - 13:00</td>
	<!-- CASILLERO 901_12:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='12:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";
	$id = 6;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX6($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a6">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 903_12:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='12:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 6;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX6($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="b6">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 904_12:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='12:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 6;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX6($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="c6">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 905_12:15 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='12:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 6;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX6($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="d6">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 907_12:15 -->
			<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='12:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 6;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX6($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="e6">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 908_12:15 -->
				<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='12:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 6;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX6($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="f6">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO GINAS_12:15 -->
				<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='12:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 6;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX6($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="g6">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO MIDI_12:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='12:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 6;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX6($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="h6">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO S02_12:15 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='12:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 6;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX6($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="i6">&nbsp;</td>
<?php
}
?>
	
	
<!-- CASILLERO Otra 1_12:15 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='12:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 6;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX6($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="j6">&nbsp;</td>
<?php
}
?>

<!-- CASILLERO Otra 2_12:15 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='12:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 6;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX6($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="k6">&nbsp;</td>
<?php
}
?>	
	
	</tr>
	
	<tr>
	<td>13:00 - 13:30</td>
	<td colspan="11" bgcolor="#999999"></td>
	</tr>
	
	<tr>
	<td>13:30 - 14:15</td>
	<!-- CASILLERO 901_13:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='13:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";
	$id = 7;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX7($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a7">&nbsp;</td>
<?php
}
?>	
	
	<!-- CASILLERO 903_13:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='13:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 7;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX7($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="b7">&nbsp;</td>
<?php
}
?>	
	
	
	<!-- CASILLERO 904_13:30 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='13:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 7;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX7($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="c7">&nbsp;</td>
<?php
}
?>	
	
	
	<!-- CASILLERO 905_13:30 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='13:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 7;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX7($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="d7">&nbsp;</td>
<?php
}
?>	
	
	
	<!-- CASILLERO 907_13:30 -->
			<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='13:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 7;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX7($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="e7">&nbsp;</td>
<?php
}
?>	
	
	
	<!-- CASILLERO 908_13:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='13:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 7;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX7($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="f7">&nbsp;</td>
<?php
}
?>	
	
	
	<!-- CASILLERO GINAS_13:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='13:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 7;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX7($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="g7">&nbsp;</td>
<?php
}
?>	
	
	
	<!-- CASILLERO MIDI_13:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='13:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 7;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX7($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="h7">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO S02_13:30 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='13:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 7;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX7($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="i7">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 1_13:30 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='13:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 7;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX7($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="j7">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 2_13:30 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='13:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 7;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX7($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="k7">&nbsp;</td>
<?php
}
?>
	
	
	</tr>
	
	<tr>
	<td>14:15 - 15:00</td>
	<!-- CASILLERO 901_14:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='14:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";
	$id = 8;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX8($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a8">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 903_14:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='14:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 8;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX8($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="b8">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 904_14:15 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='14:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 8;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX8($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="c8">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 905_14:15 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='14:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 8;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX8($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="d8">&nbsp;</td>
<?php
}
?>

	
	
	<!-- CASILLERO 907_14:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='14:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 8;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX8($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="e8">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 908_14:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='14:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 8;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX8($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="f8">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO GINAS_14:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='14:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 8;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX8($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="g8">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO MIDI_14:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='14:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 8;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX8($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="h8">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO S02_14:15 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='14:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 8;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX8($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="i8">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 1_14:15 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='14:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 8;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX8($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="j8">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 2_14:15 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='14:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 8;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX8($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="k8">&nbsp;</td>
<?php
}
?>
	
	
	</tr>
	
	<tr>
	<td>15:00 - 15:10</td>
	<td colspan="11" bgcolor="#999999"></td>
	</tr>
	
	<tr>
	<td>15:10 - 15:55</td>
	<!-- CASILLERO 901_15:10 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='15:10:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";
	$id = 9;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX9($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a9">&nbsp;</td>
<?php
}
?>
	
	
	
	<!-- CASILLERO 903_15:10 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='15:10:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 9;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX9($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="b9">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 904_15:10 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='15:10:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 9;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX9($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="c9">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 905_15:10 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='15:10:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 9;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX9($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="d9">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 907_15:10 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='15:10:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 9;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX9($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="e9">&nbsp;</td>
<?php
}
?>
	
	
	
	<!-- CASILLERO 908_15:10 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='15:10:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 9;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX9($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="f9">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO GINAS_15:10 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='15:10:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 9;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX9($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="g9">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO MIDI_15:10 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='15:10:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 9;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX9($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="h9">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO S02_15:10 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='15:10:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 9;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX9($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="i9">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 1_15:10 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='15:10:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 9;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX9($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="j9">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 2_15:10 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='15:10:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 9;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX9($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="k9">&nbsp;</td>
<?php
}
?>	
	
	</tr>
	
	<tr>
	<td>15:55 - 16:40</td>
	<!-- CASILLERO 901_15:55 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='15:55:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";
	$id = 10;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX10($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a10">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 903_15:55 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='15:55:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 10;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX10($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="b10">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 904_15:55 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='15:55:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 10;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX10($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="c10">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 905_15:55 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='15:55:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 10;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX10($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="d10">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 907_15:55 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='15:55:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 10;
	$materia = utf8_encode($row["nombre"]);

	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX10($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="e10">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 908_15:55 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='15:55:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 10;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX10($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="f10">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO GINAS_15:55 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='15:55:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 10;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX10($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="g10">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO MIDI_15:55 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='15:55:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 10;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX10($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="h10">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO S02_15:55 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='15:55:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 10;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX10($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="i10">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 1_15:55 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='15:55:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 10;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX10($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="j10">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 2_15:55 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='15:55:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 10;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX10($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="k10">&nbsp;</td>
<?php
}
?>
	
	
	</tr>
	
	<tr>
	<td>16:40 - 16:45</td>
	<td colspan="11" bgcolor="#999999"></td>
	</tr>
	
	<tr>
	<td>16:45 - 17:30</td>
	<!-- CASILLERO 901_16:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='16:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";
	$id = 11;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX11($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a11">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 903_16:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='16:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 11;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX11($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="b11">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 904_16:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='16:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 11;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX11($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="c11">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 905_16:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='16:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 11;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX11($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="d11">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 907_16:45 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='16:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 11;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX11($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="e11">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 908_16:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='16:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 11;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX11($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="f11">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO GINAS_16:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='16:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 11;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX11($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="g11">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO MIDI_16:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='16:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 11;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX11($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="h11">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO S02_16:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='16:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 11;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX11($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="i11">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 1_16:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='16:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 11;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX11($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="j11">&nbsp;</td>
<?php
}
?>	


<!-- CASILLERO Otra 2_16:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='16:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 11;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX11($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="k11">&nbsp;</td>
<?php
}
?>
	
	</tr>
	
	<tr>
	<td>17:30 - 18:00</td>
	<td colspan="11" bgcolor="#999999"></td>
	</tr>
	
	<tr>
	<td>18:00 - 18:45</td>
	<!-- CASILLERO 901_18:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='18:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";
	$id = 12;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX12($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a12">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 903_18:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='18:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 12;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX12($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="b12">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 904_18:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='18:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 12;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX12($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="c12">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 905_18:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='18:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 12;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX12($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="d12">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 907_18:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='18:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 12;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX12($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="e12">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 908_18:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='18:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 12;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX12($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="f12">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO GINAS_18:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='18:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 12;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX12($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="g12">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO MIDI_18:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='18:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 12;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX12($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="h12">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO S02_18:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='18:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 12;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX12($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="i12">&nbsp;</td>
<?php
}
?>

<!-- CASILLERO Otra 1_18:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='18:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 12;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX12($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="j12">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 2_18:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='18:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 12;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX12($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="k12">&nbsp;</td>
<?php
}
?>

	</tr>
	
	<tr>
	<td>18:45 - 19:30</td>
	<!-- CASILLERO 901_18:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='18:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";
	$id = 13;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX13($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a13">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 903_18:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='18:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 13;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX13($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="b13">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 904_18:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='18:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 13;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX13($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="c13">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 905_18:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='18:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 13;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX13($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="d13">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 907_18:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='18:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 13;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX13($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="e13">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 908_18:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='18:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 13;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX13($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="f13">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO GINAS_18:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='18:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 13;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX13($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="g13">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO MIDI_18:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='18:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 13;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX13($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="h13">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO S02_18:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='18:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 13;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX13($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="i13">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 1_18:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='18:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 13;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX13($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="j13">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 2_18:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='18:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 13;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX13($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="k13">&nbsp;</td>
<?php
}
?>
	
	
	</tr>
	
	<tr>
	<td>19:30 - 19:45</td>
	<td colspan="11" bgcolor="#999999"></td>
	</tr>
	
	<tr>
	<td>19:45 - 20:30</td>
	<!-- CASILLERO 901_19:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='19:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";
	$id = 14;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX14($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a14">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 903_19:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='19:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 14;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX14($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="b14">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 904_19:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='19:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 14;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX14($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="c14">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 905_19:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='19:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 14;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX14($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="d14">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 907_19:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='19:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 14;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX14($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="e14">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 908_19:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='19:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 14;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX14($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="f14">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO GINAS_19:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='19:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 14;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX14($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="g14">&nbsp;</td>
<?php
}
?>
	
	
	
	<!-- CASILLERO MIDI_19:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='19:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 14;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX14($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="h14">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO S02_19:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='19:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 14;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX14($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="i14">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 1_19:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='19:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 14;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX14($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="j14">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 2_19:45 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='19:45:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 14;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX14($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="k14">&nbsp;</td>
<?php
}
?>
	
	
	</tr>
	
	<tr>
	<td>20:30 - 21:15</td>
	<!-- CASILLERO 901_20:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='20:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";
	$id = 15;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX15($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a15">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 903_20:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='20:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 15;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX15($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="b15">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 904_20:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='20:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 15;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX15($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="c15">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 905_20:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='20:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 15;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX15($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="d15">&nbsp;</td>
<?php
}
?>
	
		
	<!-- CASILLERO 907_20:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='20:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 15;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX15($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="e15">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 908_20:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='20:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 15;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX15($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="f15">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO GINAS_20:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='20:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 15;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX15($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="g15">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO MIDI_20:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='20:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 15;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX15($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="h15">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO S02_20:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='20:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 15;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX15($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="i15">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 1_20:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='20:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 15;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX15($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="j15">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 2_20:30 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='20:30:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 15;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX15($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="k15">&nbsp;</td>
<?php
}
?>
	
	
	</tr>
	
	<tr>
	<td>21:15 - 22:00</td>
	<!-- CASILLERO 901_21:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='21:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";

	$id = 16;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX16($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a16">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 903_21:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='21:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 16;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX16($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="b16">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 904_21:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='21:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 16;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX16($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="c16">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 905_21:15 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='21:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 16;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX16($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="d16">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 907_21:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='21:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 16;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX16($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="e16">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 908_21:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='21:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 16;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX16($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="f16">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO GINAS_21:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='21:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 16;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX16($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="g16">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO MIDI_21:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='21:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 16;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX16($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="h16">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO S02_21:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='21:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 16;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX16($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="i16">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 1_21:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='21:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 16;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX16($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="j16">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 2_21:15 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='21:15:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 16;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX16($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="k16">&nbsp;</td>
<?php
}
?>
	
	
	</tr>
	
	<tr>
	<td>22:00 - 22:45</td>
	<!-- CASILLERO 901_22:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='901' && h_comienzo='22:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "a";

	$id = 17;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX17($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="a17">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 903_22:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='903' && h_comienzo='22:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "b";
	$id = 17;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX17($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="b17">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 904_22:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='904' && h_comienzo='22:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "c";
	$id = 17;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX17($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="c17">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 905_22:00 -->
		<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='905' && h_comienzo='22:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "d";
	$id = 17;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX17($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="d17">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 907_22:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='907' && h_comienzo='22:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "e";
	$id = 17;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX17($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="e17">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO 908_22:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='908' && h_comienzo='22:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "f";
	$id = 17;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX17($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="f17">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO GINAS_22:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='GINAS' && h_comienzo='22:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "g";
	$id = 17;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX17($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="g17">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO MIDI_22:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='MIDI' && h_comienzo='22:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "h";
	$id = 17;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX17($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="h17">&nbsp;</td>
<?php
}
?>
	
	
	<!-- CASILLERO S02_22:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='S02' && h_comienzo='22:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "i";
	$id = 17;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX17($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="i17">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 1_22:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 1' && h_comienzo='22:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "j";
	$id = 17;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX17($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="j17">&nbsp;</td>
<?php
}
?>


<!-- CASILLERO Otra 2_22:00 -->
	<?php
$sql = "SELECT * from materias $sWhere && dia='$dia' && aula='Otra 2' && h_comienzo='22:00:00'";
$res = $con->query($sql);
if($res->num_rows > 0){
	$row = $res->fetch_assoc();
	$color = color_curso($row["curso"]);
	$aula = $row["aula"];
	//$h_comienzo = $row["h_comienzo"];
	$h_fin = $row["h_fin"];
	$letra_id = "k";
	$id = 17;
	$materia = utf8_encode($row["nombre"]);
	$profesor = utf8_encode($row["profesor"]);
	
	casilleroX17($aula,$h_fin, $color, $materia, $profesor, $letra_id, $id);
}else{
?>
<td id="k17">&nbsp;</td>
<?php
}
?>


	
	
	</tr>
		
<tr>
	<td colspan="12" style="border:none; color:white;">ESPACIO</td>
</tr>

<tr style="border:0px white solid;">
  <td colspan="2" style="background:yellow; border:0px white solid; text-align:center;border-radius:10px;">1er A&ntilde;o</td>
  <td colspan="2" style="background:lightblue; border:0px white solid; text-align:center;border-radius:10px;">2do A&ntilde;o</td>
  <td colspan="2" style="background:pink; border:0px white solid; text-align:center;border-radius:10px;">3er A&ntilde;o</td>
  <td colspan="2" style="background:orange; border:0px white solid; text-align:center;border-radius:10px;">4to A&ntilde;o</td>
  <td colspan="2" style="background:#9966FF; border:0px white solid; text-align:center;border-radius:10px;">5to A&ntilde;o</td>
  </tr>
<tr>
<td colspan="12" style="border:none; color:white;">ESPACIO</td>
</tr>
		
</tbody>
</table>
</page>