		$(document).ready(function(){
			load(1);
			
		});

		function load(page){
			var d= $("#crono_dia").val();
			var c= $("#select_curso").val();
			var p= $("#select_periodo").val();
			var m= $("#select_mostrar").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/cargar_cronograma_periodo.php?dia='+d+'&mostrar='+m+'&cursos='+c+'&periodo='+p,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					$('[data-toggle="tooltip"]').tooltip({html:true}); 
					
				}
			})
		}


	