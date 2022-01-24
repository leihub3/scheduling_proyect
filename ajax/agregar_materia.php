<?php
	//include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	
	if (empty($_POST['nueva_materia_nombre'])) {
           $errors[] = "Nombre de la Materia vac&iacute;o";
        }else if ($_POST['nueva_materia_ccarr'] == ""){
			$errors[] = "Falta el C&oacute;digo de Carrera";
		}else if ($_POST['nueva_materia_cmat'] == ""){
			$errors[] = "Falta el C&oacute;digo de Materia";
		}else if ($_POST['nueva_materia_curso'] == "noseleccionado"){
			$errors[] = "A&ntilde;o de cursado vac&iacute;o";
		} else if (empty($_POST['nueva_materia_profesor'])){
			$errors[] = "Campo Profesor vac&iacute;o";
		} else if ($_POST['nueva_materia_aula'] == "noseleccionado"){
			$errors[] = "Campo Aula vac&iacute;o";
		} else if ($_POST['nueva_materia_dia'] == "noseleccionado"){
			$errors[] = "Día no seleccionado";	
		}else if ($_POST['nueva_materia_hcomienzo'] == "noseleccionado"){
			$errors[] = "Horario de Comienzo no seleccionado";	
		}else if ($_POST['nueva_materia_hfin'] == "noseleccionado"){
			$errors[] = "Horario de Finalizaci&oacute;n no seleccionado";	
		}else if ($_POST['nueva_materia_hfin'] < $_POST['nueva_materia_hcomienzo'] or $_POST['nueva_materia_hcomienzo'] > $_POST['nueva_materia_hfin'] ){
			$errors[] = "Los Horarios est&aacute;n mal seleccionados";	
		} else if (
			!empty($_POST['nueva_materia_ccarr']) &&
			!empty($_POST['nueva_materia_cmat']) &&
			!empty($_POST['nueva_materia_anio']) &&
			!empty($_POST['nueva_materia_periodo']) &&
			!empty($_POST['nueva_materia_nombre']) &&
			!empty($_POST['nueva_materia_curso']) &&
			!empty($_POST['nueva_materia_profesor']) &&
			!empty($_POST['nueva_materia_aula']) &&
			!empty($_POST['nueva_materia_dia']) &&
			!empty($_POST['nueva_materia_hcomienzo']) &&
			!empty($_POST['nueva_materia_hfin'])
		){
		/* Connect To Database*/
		require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$sql="Select * from materias where anio='".$_POST["nueva_materia_anio"]."' && periodo='".$_POST["nueva_materia_periodo"]."' && dia='".$_POST["nueva_materia_dia"]."' && aula='".$_POST["nueva_materia_aula"]."' && h_comienzo <= '".$_POST["nueva_materia_hcomienzo"]."' && h_fin > '".$_POST["nueva_materia_hcomienzo"]."'";	
		
		$res = $con->query($sql);
		if($res->num_rows > 0){	
			$errors []= "Lo siento el aula ". $_POST["nueva_materia_aula"] ."  est&aacute; ocupada en ese horario.".mysqli_error($con);
			}else{			
			$sql="Select * from materias where anio='".$_POST["nueva_materia_anio"]."' && periodo='".$_POST["nueva_materia_periodo"]."' && dia='".$_POST["nueva_materia_dia"]."' && aula='".$_POST["nueva_materia_aula"]."' && h_comienzo < '".$_POST["nueva_materia_hfin"]."' && h_fin >= '".$_POST["nueva_materia_hfin"]."'";
			
			$res = $con->query($sql);
			if($res->num_rows > 0){	
			$errors []= "Lo siento el aula ". $_POST["nueva_materia_aula"] ."  est&aacute; ocupada en ese horario.".mysqli_error($con);
			}else{
			$sql="INSERT INTO  `materias` (
`id_materia` ,
`codigo_carrera` ,
`codigo_materia` ,
`anio` ,
`periodo` ,
`nombre` ,
`curso` ,
`profesor` ,
`aula` ,
`dia` ,
`h_comienzo` ,
`h_fin`
)
VALUES (
NULL , '".utf8_decode($_POST["nueva_materia_ccarr"])."','".utf8_decode($_POST["nueva_materia_cmat"])."', '".utf8_decode($_POST["nueva_materia_anio"])."', '".utf8_decode($_POST["nueva_materia_periodo"])."', '".utf8_decode($_POST["nueva_materia_nombre"])."',  '".utf8_decode($_POST["nueva_materia_curso"])."',  '".utf8_decode($_POST["nueva_materia_profesor"])."',  '".utf8_decode($_POST["nueva_materia_aula"])."',  '".utf8_decode($_POST["nueva_materia_dia"])."',  '".utf8_decode($_POST["nueva_materia_hcomienzo"])."',  '".utf8_decode($_POST["nueva_materia_hfin"])."'
)";
			
			$res = $con->query($sql);
			
			$messages[] = "La Materia ha sido a&ntilde;adida con &eacute;xito.";
			}
			
			}
		
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>&iexcl;Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>