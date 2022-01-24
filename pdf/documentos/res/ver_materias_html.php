<?php
//print_r($_GET);
//break;
require_once("../../conexion.php");
require_once("../../funciones.php");
?>
<style>

td{
text-align:center;
}

</style>

<page backtop="5mm" backbottom="8mm" backleft="8mm" backright="8mm" style="font-size: 12pt; font-family: arial" >
   <page_footer>
   
        <table class="page_footer">
            <tr>

                <td style="width: 50%; text-align: right">
                    
                    P&aacute;gina [[page_cu]]/[[page_nb]]
                
                </td>
                <td style="width: 50%; text-align: left">
	
                    <?php 
$periodo = $_GET["periodo"];
$anio = substr("$periodo",0,4);
$semestre = substr("$periodo",7,12);				
						
					echo "Listado de Materias UCA: " . $semestre . " de " . $anio;	
					?>
                </td>
            </tr>
        </table>
		
    </page_footer>
<?php

if(!isset($_GET["orden"])){
$sql = "Select * from materias where anio='$anio' && periodo='$semestre' order by curso asc, dia asc, h_comienzo asc";
}else{
$sql = "Select * from materias where anio='$anio' && periodo='$semestre' order by profesor asc";
}
$res = $con->query($sql);
?>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div id="contenedor">
  <table border="1">
   <tr>
  <th colspan="9" align="center"><h1>Listado de Materias UCA - <?php echo $semestre . " de " . $anio; ?></h1></th>
  </tr>
<tr style="font-weight:bold;">
	<td style="width:50px !important;"># Carr. </td>
	<td style="width:50px !important;"># Mat.</td>
	<td>Nombre</td>
	<td style="width:75px !important;">A&ntilde;o</td>
	<td>Profesor</td>
	<td style="width:90px !important;">Aula</td>
	<td style="width:75px !important;>D&iacute;a</td>
	<td>H. Comienzo</td>
	<td>H. Fin</td>
	</tr>

<?php
if($res->num_rows > 0){
while($row = $res->fetch_assoc()){
?>	

	<tr>
	<td><?php echo utf8_encode($row["codigo_carrera"]); ?></td>
	<td><?php echo utf8_encode($row["codigo_materia"]); ?></td>
	<td><?php echo utf8_encode($row["nombre"]); ?></td>
	<td><?php echo utf8_encode($row["curso"]); ?></td>
	<td><?php echo utf8_encode(strtoupper($row["profesor"])); ?></td>
	<td><?php echo $row["aula"]; ?></td>
	<td><?php echo ucwords($row["dia"]); ?></td>
	<td><?php echo $row["h_comienzo"]; ?></td>
	<td><?php echo $row["h_fin"]; ?></td>
</tr>
		

<?php
}
}
?>

</table>	
</div>
</page> 