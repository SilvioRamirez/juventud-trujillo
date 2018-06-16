<div class="row margin-top-10">

	{{-- Col 1 --}}
	<div class="col-md-6">
		<div class="form-group row">
			{!! Html::decode(Form::label('organizacion', '<strong>Organización de base:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('organizacion', $persona->organizacion, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('estructura', '<strong>Estructura:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">			
			{!! Form::select('estructura', ['Nacional' => 'Nacional', 'Estadal' => 'Estadal', 'Municipal' => 'Municipal', 'Parroquial' => 'Parroquial'], $persona->estructura, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccionar', 'id' => 'estructuraCarnet']); !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('responsabilidad', '<strong>Responsabilidad JPSUV:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm', 'placeholder' => 'Seleccionar'])) !!}
			<div class="col-sm-6">
			{!! Form::select('responsabilidad', [
				'Enlace' 		=> 'Enlace', 
				'Organizacion' 	=> 'Organizacion', 
				'Tecnica Electoral' => 'Tecnica Electoral', 
				'Secretaria' 		=> 'Secretaria',
				'Movilizacion' 		=> 'Movilizacion',
				'Formacion' 		=> 'Formacion',
				'Cultura' 			=> 'Cultura',
				'Deporte'			=> 'Deporte',
				'Educacion Media' 	=> 'Educacion Media',
				'Educacion Universitaria' 	=> 'Educacion Universitaria',
				'Eco Socialismo' 			=> 'Eco Socialismo',
				'Mujeres Jovenes' 			=> 'Mujeres Jovenes',
				'Juventud Trabajadora' 		=> 'Juventud Trabajadora',
				'Activacion Productiva - Chamba Juvenil' 	=> 'Activacion Productiva - Chamba Juvenil',
				'Profesores Universitarios' 				=> 'Profesores Universitarios',
				'Finanzas' 									=> 'Finanzas',
				'Asuntos Internacionales' 					=> 'Asuntos Internacionales',
				'Defensa Integral - Milicia Juvenil' 		=> 'Defensa Integral - Milicia Juvenil',
				'Profesionales y Tecnicos Medios' 			=> 'Profesionales y Tecnicos Medios',
				'Movimiento Nacional por la Vivienda Joven' => 'Movimiento Nacional por la Vivienda Joven',
				'Sexo Diversidad' 							=> 'Sexo Diversidad',
				'Militante' 								=> 'Militante',
				], $persona->responsabilidad, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccionar', 'id' => 'responsabilidadCarnet']); !!}

			</div>			
		</div>
		
		
		<div class="form-group row">
			{!! Html::decode(Form::label('vocero_comunal', '<strong>¿Esta vinculad@ al consejo comunal?</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">			
			{!! Form::select('vocero_comunal', ['0' => 'No', '1' => 'Si'], $persona->vocero_comunal, ['class' => 'form-control form-control-sm' ]); !!}
			</div>
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('vocero_comunal_descripcion', '<strong>¿Que responsabilidad tiene?</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('vocero_comunal_descripcion', $persona->vocero_comunal_descripcion, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
	</div>

	{{-- Col 2 --}}
	<div class="col-md-6">
		<div class="form-group row">
			{!! Html::decode(Form::label('beneficiario_mision', '<strong>¿Es beneficiari@ de alguna misión?</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">			
			{!! Form::select('beneficiario_mision', ['0' => 'No', '1' => 'Si'], $persona->beneficiario_mision, ['class' => 'form-control form-control-sm' ]); !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('beneficiario_mision_descripcion', '<strong>Misiones por las que ha sido beneficiad@:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('beneficiario_mision_descripcion', $persona->beneficiario_mision_descripcion, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('embarazo', '<strong>Embarazo:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::select('embarazo', ['0' => 'No', '1' => 'Si'], $persona->embarazo, ['class' => 'form-control form-control-sm' ]); !!}
			</div>
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('embarazo_semanas', '<strong>Semanas de Embarazo:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('embarazo_semanas', $persona->embarazo_semanas, ['class' => 'form-control form-control-sm', ]) !!}
			</div>
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('vivienda', '<strong>Vivienda:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::select('vivienda', ['propia' => 'Propia', 'alquilada' => 'Alquilada', 'prestada' => 'Prestada', 'hacinamiento' => 'Hacinamiento', 'arrimado' => 'Arrimado', 'padres' => 'Padres'], $persona->vivienda, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccionar']); !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('vivienda_tipo', '<strong>Tipo de vivienda:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::select('vivienda_tipo', ['casa' => 'Casa', 'apartamento' => 'Apartamento', 'rancho' => 'Rancho', 'bahareque' => 'Bahareque', 'quinta' => 'Quinta', 'condicion de calle' => 'Condicion de calle'], $persona->vivienda_tipo, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccionar']); !!}
			</div>			
		</div>
	</div>

</div>