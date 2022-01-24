<?php
	//print_r($_POST);
	//break;
	//include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	
	/*Inicia validacion del lado del servidor*/
	
	if (empty($_POST['copiar_materia_nombre'])) {
           $errors[] = "Nombre de la Materia vacío";
        }else if ($_POST['copiar_materia_ccarr'] == ""){
			$errors[] = "Falta el C&oacute;digo de Carrera";
		}else if ($_POST['copiar_materia_cmat'] == ""){
			$errors[] = "Falta el C&oacute;digo de Materia";
		}else if ($_POST['copiar_materia_curso'] == "noseleccionado"){
			$errors[] = "Año de cursado vacío";
		} else if (empty($_POST['copiar_materia_profesor'])){
			$errors[] = "Campo Profesor vacío";
		} else if ($_POST['copiar_materia_aula'] == "noseleccionado"){
			$errors[] = "Campo Aula vacío";
		} else if ($_POST['copiar_materia_dia'] == "noseleccionado"){
			$errors[] = "Día no seleccionado";	
		}else if ($_POST['copiar_materia_hcomienzo'] == "noseleccionado"){
			$errors[] = "Horario de Comienzo no seleccionado";	
		}else if ($_POST['copiar_materia_hfin'] == "noseleccionado"){
			$errors[] = "Horario de Finalización no seleccionado";	
		}else if ($_POST['copiar_materia_hfin'] < $_POST['copiar_materia_hcomienzo'] or $_POST['copiar_materia_hcomienzo'] > $_POST['copiar_materia_hfin'] ){
			$errors[] = "Los Horarios están mal seleccionados";	
		} else if (
			!empty($_POST['copiar_materia_ccarr']) &&
			!empty($_POST['copiar_materia_cmat']) &&
			!empty($_POST['copiar_materia_nombre']) &&
			!empty($_POST['copiar_materia_curso']) &&
			!empty($_POST['copiar_materia_profesor']) &&
			!empty($_POST['copiar_materia_aula']) &&
			!empty($_POST['copiar_materia_dia']) &&
			!empty($_POST['copiar_materia_hcomienzo']) &&
			!empty($_POST['copiar_materia_hfin'])
		){
		/* Connect To Database*/
		require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$sql="Select * from materias where anio='".$_POST["copiar_materia_anio"]."' && periodo='".$_POST["copiar_materia_periodo"]."' && dia='".$_POST["copiar_materia_dia"]."' && aula='".$_POST["copiar_materia_aula"]."' && h_comienzo <= '".$_POST["copiar_materia_hcomienzo"]."' && h_fin > '".$_POST["copiar_materia_hcomienzo"]."'";	
		
		$res = $con->query($sql);
		if($res->num_rows > 0){	
			$errors []= "Lo siento el aula ". $_POST["copiar_materia_aula"] ."  est&aacute; ocupada en ese horario.".mysqli_error($con);
			}else{			
			$sql="Select * from materias where anio='".$_POST["copiar_materia_anio"]."' && periodo='".$_POST["copiar_materia_periodo"]."' && dia='".$_POST["copiar_materia_dia"]."' && aula='".$_POST["copiar_materia_aula"]."' && h_comienzo < '".$_POST["copiar_materia_hfin"]."' && h_fin >= '".$_POST["copiar_materia_hfin"]."'";
			
			$res = $con->query($sql);
			if($res->num_rows > 0){	
			$errors []= "Lo siento el aula ". $_POST["copiar_materia_aula"] ."  est&aacute; ocupada en ese horario.".mysqli_error($con);
			}else{
			$sql="INSERT INTO `materias`(`id_materia`, `codigo_carrera`, `codigo_materia`, `anio`, `periodo`, `nombre`, `curso`, `profesor`, `aula`, `dia`, `h_comienzo`, `h_fin`) 
			VALUES (NULL,'".utf8_decode($_POST["copiar_materia_ccarr"])."','".utf8_decode($_POST["copiar_materia_cmat"])."','".utf8_decode($_POST["copiar_materia_anio"])."','".utf8_decode($_POST["copiar_materia_periodo"])."','".utf8_decode($_POST["copiar_materia_nombre"])."','".utf8_decode($_POST["copiar_materia_curso"])."','".utf8_decode($_POST["copiar_materia_profesor"])."','".utf8_decode($_POST["copiar_materia_aula"])."','".$_POST["copiar_materia_dia"]."','".$_POST["copiar_materia_hcomienzo"]."','".$_POST["copiar_materia_hfin"]."')";
			
			$res = $con->query($sql);
			
			$messages[] = "La Materia " .$_POST["copiar_materia_nombre"] . " ha sido ingresada con &eacute;xito.";
			}
			
			}
		
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>&iexcl;Error!</strong> 
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