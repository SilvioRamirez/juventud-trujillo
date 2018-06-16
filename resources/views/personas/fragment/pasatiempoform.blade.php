<div class="row margin-top-10">
	
	{{-- Col 1 --}}
	<div class="col-md-6">
		<div class="form-group row">
			{!! Html::decode(Form::label('entrenamiento_especial', '<strong>¿Le motiva recibir entrenamiento especial para la defensa de la patria?</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::select('entrenamiento_especial', ['0' => 'No', '1' => 'Si'], $persona->entrenamiento_especial, ['class' => 'form-control form-control-sm' ]); !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('entrenamiento_especial_descripcion', '<strong>Observación:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('entrenamiento_especial_descripcion', $persona->entrenamiento_especial_descripcion, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('leer', '<strong>¿Le gusta leer?</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::select('leer', ['0' => 'No', '1' => 'Si'], $persona->leer, ['class' => 'form-control form-control-sm' ]); !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('leer_descripcion', '<strong>Observación:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('leer_descripcion', $persona->leer_descripcion, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
	</div>

	{{-- Col 2 --}}
	<div class="col-md-6">
		
		<div class="form-group row">
			{!! Html::decode(Form::label('conoce_lineas', '<strong>¿Conoce usted la 5 líneas estratégicas del PSUV?</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-8">
			{!! Form::select('conoce_lineas', ['0' => 'No', '1' => 'Si'], $persona->conoce_lineas, ['class' => 'form-control form-control-sm' ]); !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('conoce_estructura', '<strong>¿Conoce usted la estructura orgánica de la JPSUV?</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-8">
			{!! Form::select('conoce_estructura', ['0' => 'No', '1' => 'Si'], $persona->conoce_estructura, ['class' => 'form-control form-control-sm' ]); !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('recuerda_intervencion', '<strong>¿Recuerdas la última intervención del Comandante Chávez?</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-8">
			{!! Form::select('recuerda_intervencion', ['0' => 'No', '1' => 'Si'], $persona->recuerda_intervencion, ['class' => 'form-control form-control-sm' ]); !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('conoce_lineas_maduro', '<strong>¿Conoce las 5 lineas estrategias del Presidente Nicolas Maduro Moros?</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-8">
			{!! Form::select('conoce_lineas_maduro', ['0' => 'No', '1' => 'Si'], $persona->conoce_lineas_maduro, ['class' => 'form-control form-control-sm' ]); !!}
			</div>			
		</div>
	</div>

	

</div>
