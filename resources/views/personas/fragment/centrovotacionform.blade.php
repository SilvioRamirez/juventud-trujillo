<div class="row margin-top-10">
	{{-- Col 1 --}}
	<div class="col-md-6">
		<div class="form-group row">
			{!! Html::decode(Form::label('votantes_centro', '<strong>¿Sabe cuantos votantes hay en su centro electoral?</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::select('votantes_centro', ['0' => 'No', '1' => 'Si'], $persona->votantes_centro, ['class' => 'form-control form-control-sm' ]); !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('votantes_centro_descripcion', '<strong>Indique cuantos:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('votantes_centro_descripcion', $persona->votantes_centro_descripcion, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('conoce_centro', '<strong>¿Conoce los consejo comunales, comunas, salas de batalla vinculados a su centro electoral?</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::select('conoce_centro', ['0' => 'No', '1' => 'Si'], $persona->conoce_centro, ['class' => 'form-control form-control-sm' ]); !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('conoce_centro_descripcion', '<strong>Indique cuales:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('conoce_centro_descripcion', $persona->conoce_centro_descripcion, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
	</div>

	{{-- Col 2 --}}

	<div class="col-md-6">
		
		<div class="form-group row">
			{!! Html::decode(Form::label('responsables_ubch', '<strong>¿Conoce usted a los responsables de la UBCH del centro electoral?</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::select('responsables_ubch', ['0' => 'No', '1' => 'Si'], $persona->responsables_ubch, ['class' => 'form-control form-control-sm' ]); !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('responsables_ubch_descripcion', '<strong>Indique quienes son:</strong>', ['class' => 'col-sm-6 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('responsables_ubch_descripcion', $persona->responsables_ubch_descripcion, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
	</div>

</div>
