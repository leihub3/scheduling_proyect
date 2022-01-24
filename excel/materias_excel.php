<?php
//print_r($_GET["anio"]);
//break;
$periodo = $_GET["periodo"];
$anio = substr("$periodo",0,4);
$semestre = substr("$periodo",7,12);

header("Content-Type: application/vnd.ms-excel");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=Listado_Materias_UCA_$periodo.xls");

require_once("../conexion.php");
require_once("../funciones.php");

/*
switch($mes){
				  case 01: case 02: case 03: case 04: case 05: case 06:
				  $anio = $anio;
				  $semestre = "2do Semestre";
				  break;
				  case 07: case 08: case 09: case 10: case 11: case 12:
				  $anio = $anio +1;
				  $semestre = "1er Semestre";
				  break;
				  }
*/

$sql = "Select * from materias where anio='$anio' && periodo='$semestre' order by profesor asc";// 
//echo $sql;
$res = $con->query($sql);
?>
<html>
<head>
<title>Listado de Materias UCA</title>
<style>

th{
text-align:center;
}

table{
border-collapse: collapse;
color:#000000;
}

table, th, td {
    border: 1px solid black;
}

</style>
</head>
<body>
<table>
<thead>
<tr>
<th colspan="9">UCA - Facultad de M&uacute;sica</th>
</tr>
<tr>
<th colspan="9">Listado de Materias - <?php echo $semestre . " " . $anio; ?></th>
</tr>
<tr>
<th colspan="9"></th>
</tr>
<tr>
<th># Carr.</th>
<th># Mat.</th>
<th>Nombre</th>
<th>A&ntilde;o</th>
<th>Profesor</th>
<th>Aula</th>
<th>D&iacute;a</th>
<th>H. Comienzo</th>
<th>H. Fin</th>
</tr>
</thead>
<?php
if($res->num_rows > 0){
while($row = $res->fetch_assoc()){
?>
<tr>
<td style="text-align:center"><?php echo str_replace("-", "_", $row["codigo_carrera"]); ?></td>
<td style="text-align:center"><?php echo $row["codigo_materia"]; ?></td>
<td><?php echo $row["nombre"]; ?></td>
<td><?php echo $row["curso"]; ?></td>
<td><?php echo $row["profesor"]; ?></td>
<td style="text-align:center"><?php echo $row["aula"]; ?></td>
<td style="text-align:center"><?php echo ucwords($row["dia"]); ?></td>
<td style="text-align:center"><?php echo $row["h_comienzo"]; ?></td>
<td><?php echo $row["h_fin"]; ?></td>
</tr>
<?php
}
}
?>
</table>
<?php

?>

</body>
</html>
