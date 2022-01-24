<?php
require_once("../conexion.php");

$sql = "Delete from materias where id_materia='".$_GET["id"]."'";

$res = $con->query($sql);

$messages[] = "La Materia ha sido eliminada con &eacute;xito.";

//header("Location: ../materias.php");


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