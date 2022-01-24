	<?php
		if (isset($con))
		{
	?>	
	
	<!-- Modal -->
<div class="modal fade" id="ModalAgregarMateriaPeriodo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-plus'></i> Agregar Nueva Materia periodo</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" method="post" id="nueva_materia_periodo" name="nueva_materia_periodo">
			<div id="resultados_ajax_periodo"></div>
			
			<div class="form-group">				
				<label class="col-sm-3 control-label">Código de Carrera:</label>
				<div class="col-sm-8">
					  <input type="text" class="form-control" id="nueva_materia_periodo_ccarr" name="nueva_materia_periodo_ccarr" placeholder="Ingresa el Código de Carrera">
				</div>
			  </div>
			  
			  <div class="form-group">				
				<label class="col-sm-3 control-label">Código de Materia:</label>
				<div class="col-sm-8">
					  <input type="number" class="form-control" id="nueva_materia_periodo_cmat" name="nueva_materia_periodo_cmat" placeholder="Ingresa el Código de Materia">
				</div>
			  </div>
			
			<div class="form-group">				
				<label class="col-sm-3 control-label">Año Calendario:</label>
				<div class="col-sm-8">
					  <input type="number" class="form-control" id="nueva_materia_periodo_anio" name="nueva_materia_periodo_anio" placeholder="Ingresa el Año Calendario" value="<?php echo date("Y"); ?>">
				</div>
			  </div>
			  			  
			  
			  <div class="form-group">
				<label class="col-sm-3 control-label">Período:</label>
				<div class="col-sm-8">
				  <select class="form-control" name="nueva_materia_periodo_periodo" id="nueva_materia_periodo_periodo">
				 	
				  <?php 
				  $periodo = "";
				  switch(date("m")){
				  case 01: case 02: case 03: case 04: case 05: case 06:
				  $periodo = "selected='selected'";
				  break;
				  case 07: case 08: case 09: case 10: case 11: case 12:
				  $periodo = "selected='selected'";
				  break;
				  } ?>
				  <option value="noseleccionado">No Seleccionado</option>
				  <option value="1er Semestre" <?php echo $periodo; ?> >1er Semestre</option>
				  <option value="2do Semestre" <?php echo $periodo; ?>>2do Semestre</option>
				  </select>
					</div>
			  </div>
			  
			
			  <div class="form-group">				
				<label class="col-sm-3 control-label">Nombre:</label>
				<div class="col-sm-8">
					  <input type="text" class="form-control" id="nueva_materia_periodo_nombre" name="nueva_materia_periodo_nombre" placeholder="Nombre de la Materia">
				</div>
			  </div>
			  
			  
			  
			  <div class="form-group">
				<label class="col-sm-3 control-label">Año de Cursado:</label>
				<div class="col-sm-8">
				  <select class="form-control" name="nueva_materia_periodo_curso" id="nueva_materia_periodo_curso">
				  <option value="noseleccionado">Seleccionar Año</option>
				  <option value="1er Año">1er Año</option>
				  <option value="2do Año">2do Año</option>
				  <option value="3er Año">3er Año</option>
				  <option value="4to Año">4to Año</option>
				  <option value="5to Año">5to Año</option>
				  </select>
					</div>
			  </div>
			  
			  <div class="form-group">
				<label class="col-sm-3 control-label">Profesor:</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="nueva_materia_periodo_profesor" name="nueva_materia_periodo_profesor" placeholder="Profesor">
					</div>
			  </div>
			  
			  <div class="form-group">
				<label class="col-sm-3 control-label">Aula:</label>
				<div class="col-sm-8">
				  <select class="form-control" name="nueva_materia_periodo_aula" id="nueva_materia_periodo_aula">
				  <option value="noseleccionado">Seleccionar Aula</option>
				  <option value="901">901</option>
				  <option value="903">903</option>
				  <option value="904">904</option>
				  <option value="905">905</option>
				  <option value="907">907</option>
				  <option value="908">908</option>
				  <option value="GINAS">Ginastera</option>
				  <option value="MIDI">Midi</option>
				  <option value="S02">S02</option>
				  <option value="Otra 1">Otra 1</option>
				  <option value="Otra 2">Otra 2</option>
				  </select>
					</div>
			  </div>
			  
			  <div class="form-group">
				<label  class="col-sm-3 control-label">Día:</label>
				<div class="col-sm-8">
				  <select class="form-control" name="nueva_materia_periodo_dia" id="nueva_materia_periodo_dia" required>
				  <option value="noseleccionado">Seleccionar Día</option>
				  <option value="lunes">Lunes</option>
				  <option value="martes">Martes</option>
				  <option value="miercoles">Miércoles</option>
				  <option value="jueves">Jueves</option>
				  <option value="viernes">Viernes</option>
				  </select>
					</div>
			  </div>
			  
			  <div class="form-group">
				<label  class="col-sm-3 control-label">Hora de Comienzo:</label>
				<div class="col-sm-8">
				 <select class="form-control" name="nueva_materia_periodo_hcomienzo" id="nueva_materia_periodo_hcomienzo">
				  <option value="noseleccionado">Seleccionar H. de Comienzo</option>
				  <option value="07:45:00">7:45</option>
				  <option value="08:30:00">8:30</option>
				  <option value="09:30:00">9:30</option>
				  <option value="10:15:00">10:15</option>
				  <option value="11:30:00">11:30</option>
				  <option value="12:15:00">12:15</option>
				  <option value="13:30:00">13:30</option>
				  <option value="14:15:00">14:15</option>
				  <option value="15:10:00">15:10</option>
				  <option value="15:55:00">15:55</option>
				  <option value="16:45:00">16:45</option>
				  <option value="18:00:00">18:00</option>
				  <option value="18:45:00">18:45</option>
				  <option value="19:45:00">19:45</option>
				  <option value="20:30:00">20:30</option>
				  <option value="21:15:00">21:15</option>
				  <option value="22:00:00">22:00</option>
				  </select>
					</div>
			  </div>
			  
			  <div class="form-group">
				<label  class="col-sm-3 control-label">Hora Fin:</label>
				<div class="col-sm-8">
				  <select class="form-control" name="nueva_materia_periodo_hfin" id="nueva_materia_periodo_hfin">
				   <option value="noseleccionado">Seleccionar H. Fin</option>
				  <option value="08:30:00">8:30</option>
				  <option value="09:15:00">9:15</option>
				  <option value="10:15:00">10:15</option>
				  <option value="11:00:00">11:00</option>
				  <option value="12:15:00">12:15</option>
				  <option value="13:00:00">13:00</option>
				  <option value="14:15:00">14:15</option>
				  <option value="15:00:00">15:00</option>
				  <option value="15:55:00">15:55</option>
				  <option value="16:40:00">16:40</option>
				  <option value="17:30:00">17:30</option>
				  <option value="18:45:00">18:45</option>
				  <option value="19:30:00">19:30</option>
				  <option value="20:30:00">20:30</option>
				  <option value="21:15:00">21:15</option>
				  <option value="22:00:00">22:00</option>
				  <option value="22:45:00">22:45</option>
				  </select>
					</div>
			  </div>
			  
			  </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="ingresar_materia_periodo">Ingresar Datos</button>
      </div>
    </div>
  </div>
</div>

	<?php
		}
	?>