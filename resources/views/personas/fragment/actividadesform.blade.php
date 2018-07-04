<div class="row margin-top-10">
	
	{{-- Col 1 --}}
	<div class="col-md-6">
		<div class="form-group row">
			{!! Html::decode(Form::label('deporte', '<strong>¿Que deporte le gusta practicar?</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('deporte', $persona->deporte, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('actividad_extra', '<strong>¿Que actividad extra le gusta hacer?</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('actividad_extra', $persona->actividad_extra, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('enfermedad', '<strong>¿Padece alguna enfermedad?</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('enfermedad', $persona->enfermedad, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('campismo', '<strong>¿Le gustaría hacer campismo?:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::select('campismo', ['0' => 'No', '1' => 'Si'], $persona->campismo, ['class' => 'form-control form-control-sm' ]); !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('cultura', '<strong>¿Le gustaria vincularse a alguna actividad cultural?</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::select('cultura', ['0' => 'No', '1' => 'Si'], $persona->cultura, ['class' => 'form-control form-control-sm' ]); !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('cultura_descripcion', '<strong>Indique que actividades culturales:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('cultura_descripcion', $persona->cultura_descripcion, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('grado_instruccion', '<strong>Grado instrucción:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::select('grado_instruccion', [
				'Ninguno' => 'Ninguno',
				'Basica' => 'Basica',
				'Bachiller' => 'Bachiller',
				'Tecnico Medio' => 'Tecnico Medio',
				'Tecnico Superior Universitario' => 'Tecnico Superior Universitario',
				'Licenciado' => 'Licenciado',
				'Ingeniero' => 'Ingeniero',
				'Especializacion' => 'Especializacion',
				'Maestria' => 'Maestria',
				'Doctorado' => 'Doctorado',
				'Postdoctorado' => 'Postdoctorado'
				], $persona->grado_instruccion, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccionar']); !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('liceo_universidad', '<strong>Nombre del Liceo o Universidad:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('liceo_universidad', $persona->liceo_universidad, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('carrera', '<strong>Carrera o Mención:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('carrera', $persona->carrera, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
	</div>

	{{-- Col 2 --}}
	<div class="col-md-6">
		
		<div class="form-group row">
			{!! Html::decode(Form::label('trabajo', '<strong>¿Trabaja?</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::select('trabajo', ['0' => 'No', '1' => 'Si'], $persona->trabajo, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccionar']); !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('lugar_trabajo', '<strong>Lugar de Trabajo:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('lugar_trabajo', $persona->lugar_trabajo, ['class' => 'form-control form-control-sm', ]) !!}
			</div>
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('ingreso_mensual', '<strong>Ingreso Mensual:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::select('ingreso_mensual', [
				'Ninguno' => 'Ninguno',
				'Menos del sueldo minimo' => 'Menos del sueldo minimo',
				'Sueldo minimo' => 'Sueldo minimo',
				'Sueldo minimo mas cestatickets' => 'Sueldo minimo mas cestatickets',
				'Mas del sueldo minimo' => 'Mas del sueldo minimo'
				], $persona->ingreso_mensual, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccionar']); !!}
			</div>			
		</div>

		<div class="form-group row">
			{!! Html::decode(Form::label('ocupacion', '<strong>Ocupación:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('ocupacion', $persona->ocupacion, ['class' => 'form-control form-control-sm', 'placeholder' => '¿A que se dedica? ¿En que trabaja?' ]) !!}
			</div>
		</div>

		<div class="form-group row">
			{!! Html::decode(Form::label('potencialidad', '<strong>Potencialidades productivas:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('potencialidad', $persona->potencialidad, ['class' => 'form-control form-control-sm', 'placeholder' => 'Siembra de Platanos, Producción de Harina, etc...']) !!}
			</div>
		</div>

		<div class="form-group row">
			{!! Html::decode(Form::label('terreno', '<strong>¿Tiene terreno para sembrar?</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::select('terreno', ['No' => 'No', 'Si' => 'Si'], $persona->terreno, ['class' => 'form-control form-control-sm' ]); !!}
			</div>			
		</div>

		<div class="form-group row">
			{!! Html::decode(Form::label('terreno_cantidad', '<strong>Cantidad de Terreno - Medida:</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-2">
			{!! Form::text('terreno_cantidad', $persona->terreno_cantidad, ['class' => 'form-control form-control-sm', 'placeholder' => '1,2,500' ]) !!}
			</div>
			<div class="col-sm-6">
			{!! Form::select('terreno_medida', [
				'Metros cuadrados (m2)' => 'Metros cuadrados (m2)',
				'Kilometros cuadrados (km2)' => 'Kilometros cuadrados (km2)',
				'Hectareas (hm2)' => 'Hectareas (hm2)'
				], $persona->terreno_medida, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccionar']); !!}
			</div>
			{{-- Archivo modificado --}}
		</div>
	</div>

</div>
