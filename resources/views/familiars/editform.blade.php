<div class="modal fade" id="modal-editar-familiar">
	<form method="PUT" v-on:submit.prevent="updateFamiliar(fillFamiliar.id)">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title text-center"><i class="fa fa-edit"></i> Editar Familiar</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body container-fluid">
				<div class="container-fluid">
				<div class="form-group row">
					<label class="col-sm-2 col-form-label col-form-label-sm" for="nombres">Nombres: </label>
					<input class="col-sm-4 form-control form-control-sm" type="text" name="fnombres" v-model="fillFamiliar.nombres">
					<label class="col-sm-2 col-form-label col-form-label-sm" for="cedula">Cedula: </label>
					<input class="col-sm-4 form-control form-control-sm" type="text" name="cedula" v-model="fillFamiliar.cedula">
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label col-form-label-sm" for="edad">Edad: </label>
					<input class="col-sm-4 form-control form-control-sm" type="text" name="edad" v-model="fillFamiliar.edad">
					<label class="col-sm-2 col-form-label col-form-label-sm" for="parentezco">Parentesco: </label>
					<select v-model="fillFamiliar.parentezco" class="col-sm-4 form-control form-control-sm" placeholder="Seleccionar">
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
					<label class="col-sm-2 col-form-label col-form-label-sm" for="instruccion">Instrucción: </label>
					<select v-model="fillFamiliar.instruccion" class="col-sm-4 form-control form-control-sm" placeholder="Seleccionar">
						<option value="Ninguno">Ninguno</option>
						<option value="Basica">Basica</option>	
						<option value="Bachiller">Bachiller</option>	
						<option value="Tecnico Medio">Tecnico Medio</option>	
						<option value="Tecnico Superior Universitario">Tecnico Superior Universitario</option>	
						<option value="Licenciado">Licenciado</option>	
						<option value="Ingeniero">Ingeniero</option>	
						<option value="Especializacion">Especializacion</option>	
						<option value="Maestria">Maestria</option>	
						<option value="Doctorado">Doctorado</option>	
						<option value="Postdoctorado">Postdoctorado</option>
					</select>

					<label class="col-sm-2 col-form-label col-form-label-sm" for="fillFamiliar.beneficiario_mision">Beneficiario de alguna misión: </label>
					<input class="col-sm-4 form-control form-control-sm" type="text" name="fillFamiliar.beneficiario_mision" v-model="fillFamiliar.beneficiario_mision">
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label col-form-label-sm" for="municipio">Municipio: </label>
					<select v-model="fillFamiliar.municipio" v-on:click="getMunicipios()" v-on:change="getParroquias(fillFamiliar.municipio)" class="col-sm-4 form-control form-control-sm" placeholder="Seleccionar">
						<option v-for="item in municipios" v-bind:value="item.municipio" >
							@{{ item.municipio}}
						</option>						
					</select>

					<label class="col-sm-2 col-form-label col-form-label-sm" for="parroquia">Parroquia: </label>
					<select v-model="fillFamiliar.parroquia" class="col-sm-4 form-control form-control-sm" placeholder="Seleccionar">
						<option v-for="item in parroquias" v-bind:value="item.parroquia">@{{ item.parroquia}}</option>
					</select>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label col-form-label-sm" for="direccion">Direccion: </label>
					<input class="col-sm-4 form-control form-control-sm" type="text" name="direccion" v-model="fillFamiliar.direccion">

					<label class="col-sm-2 col-form-label col-form-label-sm" for="centro_votacion">Centro de Votación: </label>
					<input class="col-sm-4 form-control form-control-sm" type="text" name="centro_votacion" v-model="fillFamiliar.centro_votacion">
				</div>
				<div class="form-group row">					
					<ul>
						<span class="text-danger"><li v-for="error in errors">@{{ error }}</li></span>
					</ul>
				</div>
				</div>
			</div>
			<div class="modal-footer">		        
		        <button type="submit" class="btn btn-primary"><i class="fa fa-sync-alt"></i> Actualizar</button>
		        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
		    </div>
		</div>
	</div>
	</form>
</div>