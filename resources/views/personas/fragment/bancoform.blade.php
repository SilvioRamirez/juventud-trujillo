<div class="row margin-top-10">

	{{-- Col 1 --}}
	<div class="col-md-12">		
		<div class="form-group row">
			{!! Html::decode(Form::label('banco', '<strong>Banco:</strong>', ['class' => 'col-sm-2 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-10">
			{!! Form::select('banco', $banco, $persona->banco, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccionar', 'id' => 'banco' ]); !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('cuenta', '<strong>Cuenta:</strong>', ['class' => 'col-sm-2 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-10">
			{!! Form::text('cuenta', $persona->cuenta, ['class' => 'form-control form-control-sm banco-cuenta', 'id' => 'cuenta']) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('cuenta_tipo', '<strong>Cuenta tipo:</strong>', ['class' => 'col-sm-2 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-10">
				{!! Form::select('cuenta_tipo', ['corriente' => 'Corriente', 'ahorro' => 'Ahorro', 'virtual' => 'Virtual'], $persona->cuenta_tipo, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccionar']); !!}
			</div>			
		</div>
	</div>

</div>
