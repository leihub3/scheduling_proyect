<?php
require_once("conexion.php");
require_once("funciones.php");

//print_r($_POST);
//break;

switch($_POST["accion"]){
	case "copiar":
				if(isset($_POST["imp_seleccion"]) && $_POST["anio_nuevo"] != 0 && $_POST["semestre_nuevo"] != 0){
				$select =  $_POST["imp_seleccion"];
			 //$cervezas=$_POST["cerveza"]; 

			//recorremos el array de cervezas seleccionadas. No olvidarse q la primera posición de un array es la 0 

			for ($i=0;$i<count($select);$i++)    
			{    
			$anio_nuevo = $_POST["anio_nuevo"];
			$semestre_nuevo = $_POST["semestre_nuevo"];
			$sql="select * from materias where id_materia=$select[$i]";
			$res=$con->query($sql);
			$cursos = "'".utf8_encode("1er Año")."'" . "," . "'".utf8_encode("2do Año")."'". "," . "'".utf8_encode("3er Año")."'". "," . "'".utf8_encode("4to Año")."'". "," . "'".utf8_encode("5to Año")."'";
			//echo $sql;
			//break;
			if($res->num_rows>0){
				$row=$res->fetch_assoc();
				$sql="INSERT INTO `materias`(`id_materia`, `codigo_carrera`, `codigo_materia`, `anio`, `periodo`, `nombre`, `curso`, `profesor`, `aula`, `dia`, `h_comienzo`, `h_fin`) 
				VALUES (null,'".$row["codigo_carrera"]."','".$row["codigo_materia"]."','".$anio_nuevo."','".$semestre_nuevo."','".$row["nombre"]."','".$row["curso"]."','".$row["profesor"]."','".$row["aula"]."','".$row["dia"]."','".$row["h_comienzo"]."','".$row["h_fin"]."')";
				$res=$con->query($sql);
				
				if($res){
					//echo "<script>alert('Materias copiadas con &Eacute;xito')</script>";
					header("Location: cronogramas_periodo.php?dia=lunes&cursos%5B%5D=$cursos&periodo=$anio_nuevo+-+$semestre_nuevo&msg=OK");
				}else{
					echo "<script>window.history.back();</script>";
					
				}
			}
			 
			//echo "<br> Id Materia " . $i . ": " . $select[$i];    
			}
			}else{
				echo "<script>window.history.back();</script>";
			}
	break;
	case "eliminar":
	//print_r($_POST);
	//break;
				if(isset($_POST["imp_seleccion"])){
			$select =  $_POST["imp_seleccion"];
			 //$cervezas=$_POST["cerveza"]; 

			//recorremos el array de cervezas seleccionadas. No olvidarse q la primera posición de un array es la 0 

			for ($i=0;$i<count($select);$i++)    
			{    

			$sql="delete from materias where id_materia=$select[$i]";
			//echo $sql;
			//break;
			$res=$con->query($sql);

				if($res){
					//echo "<script>alert('Materias copiadas con &Eacute;xito')</script>";
					header("Location: materias.php?msg=OK");
				}else{
					echo "<script>window.history.back();</script>";
					
				}
			 
			//echo "<br> Id Materia " . $i . ": " . $select[$i];    
			}
			}else{
				echo "<script>window.history.back();</script>";
			}
	break;
}


 

?>