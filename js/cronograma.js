		$(document).ready(function(){
			load(1);
			
		});

		function load(page){
			var d= $("#crono_dia").val();
			var c= $("#select_cursos").val();
			var p= $("#select_periodos").val();
			var m= $("#select_mostrar").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'./ajax/cargar_cronograma.php?dia='+d+'&mostrar='+m+'&cursos='+c+'&periodos='+p,
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


	