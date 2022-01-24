<?php
//print_r($_GET);
//break;
require_once("../conexion.php");
require_once("../funciones.php");

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
$anio = substr("$periodo",0,4); 
$semestre = substr("$periodo",7,12);

$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		 $sTable = "SELECT * from materias where anio='$anio' && periodo='$semestre'";

if($_GET["q"] != ""){
$sWhere = " && profesor like '%$q%' or nombre like '%$q%' or curso like '%$q%' && anio='$anio' && periodo='$semestre'";
}else{
$sWhere = "";
}

$sql = "$sTable $sWhere order by anio desc, periodo desc, curso asc";
//echo $sql;
$res = $con->query($sql);
if($res->num_rows > 0){	

?>


<div class="table-responsive">

  <table class="table table-hover">
    <thead>
<tr>
	<th></th>
	<th># Carr.</th>
	<th># Mat.</th>
	<th>Calendario</th>
	<th>Per&iacute;odo</th>
	<th>Nombre</th>
	<th>A&ntilde;o</th>
	<th>Profesor</th>
	<th>Aula</th>
	<th>D&iacute;a</th>
	<th>H. Comienzo</th>
	<th>H. Fin</th>
	<th>Acciones</th>	
</tr>

</thead>
<tbody>
<tr>

<td colspan="2"><input type="checkbox" name="imp_seleccion[]" value="" onclick="toggle(this)" > Select All </td>
<td colspan="2"><label>Periodo Actual: </label><input type="text" class="form-control" name="periodo_actual" readonly  value="<?php echo $periodo; ?>"> </td>
<td colspan="2"><label>Periodo Nuevo: </label><select class="form-control" name="anio_nuevo">
<option value="0">Seleccionar Año: <option>
<?php
$sql4="select * from materias order by anio desc, periodo desc limit 1";
//echo $sql4;
$res4=$con->query($sql4);
if($res->num_rows>0){
	$row4=$res4->fetch_assoc();
	if($row4["periodo"]=="1er Semestre"){
		$anio = $row4["anio"];
		$semestre = "<option value='2do Semestre'>2do Semestre</option>";
	}else{
		$anio = $row4["anio"]+1;
		$semestre = "<option value='1er Semestre'>1er Semestre</option>";
	}
?>
<option value="<?php echo $anio;?>"><?php echo $anio;?></option>
<?php	
}
?>
</select></td>
<td colspan="2"><label><br></label><select class="form-control" name="semestre_nuevo">
<option value="0">Seleccionar Semestre: <option>
<?php
echo $semestre;
?>
</select></td>
<td colspan="4"><label style="font-size:13px;">Acciones para las Materias Seleccionadas: </label><br>
<select class="form-control" name="accion">
<option value="copiar" title="Copia las Materias Seleccionadas">Copiar</option>
<option value="eliminar" title="Eliminar las Materias Seleccionadas">Eliminar</option>
</select>
</td>
<td colspan="1"><label></label>
<span style="display:;" title='Enviar' class="btn btn-success" onclick="preguntar2(document.imp_seleccion.accion.value);"><i class="glyphicon glyphicon-play"></i> ENVIAR</span>

</td>
</tr>
	<tr>
<?php
while($row = $res->fetch_assoc()){
?>	
	<td><input type="checkbox" name="imp_seleccion[]" value="<?php echo $row["id_materia"]; ?>" onclick=""></td>
	<td><?php echo utf8_encode($row["codigo_carrera"]); ?></td>
	<td><?php echo utf8_encode($row["codigo_materia"]); ?></td>
	<td><?php echo utf8_encode($row["anio"]); ?></td>
	<td><?php echo utf8_encode($row["periodo"]); ?></td>
	<td style="max-width:200px"><?php echo utf8_encode($row["nombre"]); ?></td>
	<td><?php echo utf8_encode($row["curso"]); ?></td>
	<td><?php echo utf8_encode(strtoupper($row["profesor"])); ?></td>
	<td><?php echo $row["aula"]; ?></td>
	<td><?php echo ucwords($row["dia"]); ?></td>
	<td><?php echo $row["h_comienzo"]; ?></td>
	<td><?php echo $row["h_fin"]; ?></td>
	<td width="126px"><div class="flex-item">
					<a href="#" class='btn btn-default btn-sm' title='Editar Materia'  data-toggle="modal" onClick="obtener_datos(<?php echo $row["id_materia"];?>,'<?php echo $row["codigo_carrera"];?>',<?php echo $row["codigo_materia"];?>,'<?php echo utf8_encode($row["anio"]); ?>','<?php echo utf8_encode($row["periodo"]); ?>','<?php echo utf8_encode($row["nombre"]);?>','<?php echo utf8_encode($row["curso"]);?>', '<?php echo utf8_encode($row["profesor"]);?>', '<?php echo $row["aula"];?>','<?php echo $row["dia"];?>','<?php echo $row["h_comienzo"];?>','<?php echo $row["h_fin"];?>');" data-target="#MyModalEditarMateria" style=""><i class="glyphicon glyphicon-edit"></i></a>
					
					<a href="#" class='btn btn-default btn-sm' title='Copiar Materia'  data-toggle="modal" onClick="obtener_datos_copiar(<?php echo $row["id_materia"];?>,'<?php echo $row["codigo_carrera"];?>',<?php echo $row["codigo_materia"];?>,'<?php echo utf8_encode($row["anio"]); ?>','<?php echo utf8_encode($row["periodo"]); ?>','<?php echo utf8_encode($row["nombre"]);?>','<?php echo utf8_encode($row["curso"]);?>', '<?php echo utf8_encode($row["profesor"]);?>', '<?php echo $row["aula"];?>','<?php echo $row["dia"];?>','<?php echo $row["h_comienzo"];?>','<?php echo $row["h_fin"];?>');" data-target="#MyModalCopiarMateria" style=""><i class="glyphicon glyphicon-duplicate"></i></a>					
					
					<a class='btn btn-default btn-sm' href="javascript:preguntar(<?php echo $row["id_materia"]; ?>,'<?php echo utf8_encode($row["nombre"]); ?>')" title="Eliminar Materia"><i class="glyphicon glyphicon-trash"></i></a>
					
					</div></td>	
	</tr>
		
</tbody>
<?php
}
}
?>

</table>
					</div>

<?php
}
?>		

<script>
function toggle(oInput) {
	//alert();
    var aInputs = document.getElementsByTagName('input');
    for (var i=0;i<aInputs.length;i++) {
        if (aInputs[i] != oInput) {
            aInputs[i].checked = oInput.checked;
        }
    }
	document.getElementById('btn_copiarMasiva').style.display ="";
}

function preguntar2(a){
//var id = "ajax/eliminar_materia.php?id=" + a;
var nombre = "¿Realmente deseas " + a + " las materias seleccionadas?";
   eliminar=confirm(nombre);
   if (eliminar)
   //Redireccionamos si das a aceptar
      document.imp_seleccion.submit();
		
	//window.location.pathname;	
	
	// window.location.href = id; //página web a la que te redirecciona si confirmas la eliminación
else
  //Y aquí pon cualquier cosa que quieras que salga si le diste al boton de cancelar
    window.location.pathname;
}
/*
$("#btn_copiarMasiva").click(function(){
   document.imp_seleccion.submit();
	
});
*/
</script>			
