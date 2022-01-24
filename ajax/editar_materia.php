<?php
	//include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	
	/*Inicia validacion del lado del servidor*/
	
	if (empty($_POST['editar_materia_nombre'])) {
           $errors[] = "Nombre de la Materia vacío";
        }else if ($_POST['editar_materia_ccarr'] == ""){
			$errors[] = "Falta el C&oacute;digo de Carrera";
		}else if ($_POST['editar_materia_cmat'] == ""){
			$errors[] = "Falta el C&oacute;digo de Materia";
		}else if ($_POST['editar_materia_curso'] == "noseleccionado"){
			$errors[] = "Año de cursado vacío";
		} else if (empty($_POST['editar_materia_profesor'])){
			$errors[] = "Campo Profesor vacío";
		} else if ($_POST['editar_materia_aula'] == "noseleccionado"){
			$errors[] = "Campo Aula vacío";
		} else if ($_POST['editar_materia_dia'] == "noseleccionado"){
			$errors[] = "Día no seleccionado";	
		}else if ($_POST['editar_materia_hcomienzo'] == "noseleccionado"){
			$errors[] = "Horario de Comienzo no seleccionado";	
		}else if ($_POST['editar_materia_hfin'] == "noseleccionado"){
			$errors[] = "Horario de Finalización no seleccionado";	
		}else if ($_POST['editar_materia_hfin'] < $_POST['editar_materia_hcomienzo'] or $_POST['editar_materia_hcomienzo'] > $_POST['editar_materia_hfin'] ){
			$errors[] = "Los Horarios están mal seleccionados";	
		} else if (
			!empty($_POST['editar_materia_ccarr']) &&
			!empty($_POST['editar_materia_cmat']) &&
			!empty($_POST['editar_materia_nombre']) &&
			!empty($_POST['editar_materia_curso']) &&
			!empty($_POST['editar_materia_profesor']) &&
			!empty($_POST['editar_materia_aula']) &&
			!empty($_POST['editar_materia_dia']) &&
			!empty($_POST['editar_materia_hcomienzo']) &&
			!empty($_POST['editar_materia_hfin'])
		){
		/* Connect To Database*/
		require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$sql="Select * from materias where anio='".$_POST["editar_materia_anio"]."' && periodo='".$_POST["editar_materia_periodo"]."' && dia='".$_POST["editar_materia_dia"]."' && aula='".$_POST["editar_materia_aula"]."' && h_comienzo <= '".$_POST["editar_materia_hcomienzo"]."' && h_fin > '".$_POST["editar_materia_hcomienzo"]."' && `id_materia`!='".$_POST["editar_materia_id"]."'";	
		
		$res = $con->query($sql);
		if($res->num_rows > 0){	
			$errors []= "Lo siento el aula ". $_POST["editar_materia_aula"] ."  est&aacute; ocupada en ese horario.".mysqli_error($con);
			}else{			
			$sql="Select * from materias where anio='".$_POST["editar_materia_anio"]."' && periodo='".$_POST["editar_materia_periodo"]."' && dia='".$_POST["editar_materia_dia"]."' && aula='".$_POST["editar_materia_aula"]."' && h_comienzo < '".$_POST["editar_materia_hfin"]."' && h_fin >= '".$_POST["editar_materia_hfin"]."' && `id_materia`!='".$_POST["editar_materia_id"]."' ";
			
			$res = $con->query($sql);
			if($res->num_rows > 0){	
			$errors []= "Lo siento el aula ". $_POST["editar_materia_aula"] ."  est&aacute; ocupada en ese horario.".mysqli_error($con);
			}else{
			$sql="UPDATE `materias` SET `codigo_carrera`='".utf8_decode($_POST["editar_materia_ccarr"])."', `codigo_materia`='".utf8_decode($_POST["editar_materia_cmat"])."', `anio`='".utf8_decode($_POST["editar_materia_anio"])."', `periodo`='".utf8_decode($_POST["editar_materia_periodo"])."',`nombre`='".utf8_decode($_POST["editar_materia_nombre"])."',`curso`='".utf8_decode($_POST["editar_materia_curso"])."',`profesor`='".utf8_decode($_POST["editar_materia_profesor"])."',`aula`='".$_POST["editar_materia_aula"]."',`dia`='".$_POST["editar_materia_dia"]."',`h_comienzo`='".$_POST["editar_materia_hcomienzo"]."',`h_fin`='".$_POST["editar_materia_hfin"]."' WHERE `id_materia`='".$_POST["editar_materia_id"]."'";
			
			$res = $con->query($sql);
			
			$messages[] = "La Materia " .$_POST["editar_materia_nombre"] . " ha sido editada con &eacute;xito.";
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