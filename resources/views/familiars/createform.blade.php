<div class="modal fade" id="modal-agregar-familiar">
	<form method="POST" v-on:submit.prevent="createFamiliar">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-center"><i class="fa fa-user-plus"></i> Nuevo Familiar</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body container-fluid">
				<div class="container-fluid">
				<div class="form-group row">
					<label class="col-sm-2 col-form-label col-form-label-sm" for="fnombres">Nombres y Apellidos: </label>
					<input class="col-sm-4 form-control form-control-sm" type="text" name="fnombres" v-model="newNombres">
					
					<label class="col-sm-2 col-form-label col-form-label-sm" for="Fcedula">Cedula: </label>
					<input class="col-sm-4 form-control form-control-sm cedula" type="text" name="Fcedula" v-model="newCedula"></div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label col-form-label-sm" for="Fedad">Edad: </label>
					<input class="col-sm-4 form-control form-control-sm" type="text" name="Fedad" v-model="newEdad">
					<label class="col-sm-2 col-form-label col-form-label-sm" for="Fparentezco">Parentesco: </label>					
					<select v-model="newParentezco" class="col-sm-4 form-control form-control-sm" placeholder="Seleccionar">
						<option value="Madre">Madre</option>
						<option value="Padre">Padre</option>	
						<option value="Hijo">Hijo</option>	
						<option value="Hija">Hija</option>	
						<option value="Conyugue">Conyugue</option>	
						<option value="Yerno">Yerno</option>	
						<option value="Nuera">Nuera</option>	
						<option value="Suegro">Suegro</option>	
						<option value="Suegra">Suegra</option>	
						<option value="Abuelo">Abuelo</option>	
						<option value="Abuela">Abuela</option>
						<option value="Nieto">Nieto</option>	
						<option value="Nieta">Nieta</option>	
						<option value="Hermano">Hermano</option>	
						<option value="Hermana">Hermana</option>	
						<option value="Cunado">Cunado</option>	
						<option value="Cunada">Cunada</option>
						<option value="Bisabuelo">Bisabuelo</option>	
						<option value="Bisabuela">Bisabuela</option>	
						<option value="Bisnieto">Bisnieto</option>
						<option value="Bisnieta">Bisnieta</option>
						<option value="Tio">Tio</option>
						<option value="Tia">Tia</option>
						<option value="Sobrino">Sobrino</option>
						<option value="Sobrina">Sobrina</option>
						<option value="Primo">Primo</option>
						<option value="Prima">Prima</option>
					</select>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label col-form-label-sm" for="Fbeneficiario_mision">Beneficiario de alguna misión: </label>
					<input class="col-sm-4 form-control form-control-sm" type="text" name="Fbeneficiario_mision" v-model="newBeneficiarioMision">
				</div>
				
				<div class="form-group row">
					<ul>
						<span class="text-danger"><li v-for="error in errors">@{{ error }}</li></span>
					</ul>

				</div>
				</div>
			</div>
			<div class="modal-footer">		        
		        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
		        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
		    </div>
		</div>
	</div>
	</form>
</div>