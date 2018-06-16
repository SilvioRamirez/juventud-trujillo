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
					<label class="col-sm-2 col-form-label col-form-label-sm" for="instruccion">Nivel de Instrucción:</label>
					<select v-model="newInstruccion" class="col-sm-4 form-control form-control-sm" placeholder="Seleccionar">
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
					<label class="col-sm-2 col-form-label col-form-label-sm" for="Fbeneficiario_mision">Beneficiario de alguna misión: </label>
					<input class="col-sm-4 form-control form-control-sm" type="text" name="Fbeneficiario_mision" v-model="newBeneficiarioMision">
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label col-form-label-sm" for="Fmunicipio">Municipio: </label>

					<select v-model="newMunicipio" v-on:click="getMunicipios()" v-on:change="getParroquias(newMunicipio)" class="col-sm-4 form-control form-control-sm" placeholder="Seleccionar">
						<option v-for="item in municipios" v-bind:value="item.id_municipio" >
							@{{ item.municipio}}
						</option>
					</select>

					<label class="col-sm-2 col-form-label col-form-label-sm" for="newParroquia">Parroquia: </label>
					<select v-model="newParroquia" class="col-sm-4 form-control form-control-sm" placeholder="Seleccionar">
						<option v-for="item in parroquias" v-bind:value="item.id_parroquia">@{{ item.parroquia}}</option>
					</select>

				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label col-form-label-sm" for="Fdireccion">Direccion: </label>
					<input class="col-sm-4 form-control form-control-sm" type="text" name="Fdireccion" v-model="newDireccion">

					<label class="col-sm-2 col-form-label col-form-label-sm" for="Fcentro_votacion">Centro de Votación: </label>
					<input class="col-sm-4 form-control form-control-sm" type="text" name="Fcentro_votacion" v-model="newCentroVotacion">
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