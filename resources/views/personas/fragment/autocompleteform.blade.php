<div class="row margin-top-10">
	{{-- Col 1 --}}
	<div class="col-md-6">
		<div class="form-group row">
			{!! Html::decode(Form::label('cedula', '<strong>Cedula:</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-8">
			{!! Form::text('cedula', $persona->cedula, ['class' => 'form-control-plaintext form-control-sm', 'readonly', 'id' => 'cedulaCarnet']) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('nombres', '<strong>Nombres y Apellidos:</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-8">
			{!! Form::text('nombres', $persona->nombres, ['class' => 'form-control-plaintext form-control-sm', 'readonly', 'id' => 'nombresCarnet']) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('municipio', '<strong>Municipio:</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-8">
			{!! Form::text('municipio', $persona->municipio, ['class' => 'form-control-plaintext form-control-sm', 'id' => 'municipioCarnet']) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('parroquia', '<strong>Parroquia:</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-8">
			{!! Form::text('parroquia', $persona->parroquia, ['class' => 'form-control-plaintext form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('centro_votacion', '<strong>Centro de Votación:</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-8">
			{!! Form::text('centro_votacion', $persona->centro_votacion, ['class' => 'form-control-plaintext form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('direccion', '<strong>Dirección:</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-8">
			{!! Form::text('direccion', $persona->direccion, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
	</div>

	{{-- Col 2 --}}
	<div class="col-md-6">
		<div class="form-group row">
			{!! Html::decode(Form::label('edad', '<strong>Edad:</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('edad', $persona->edad, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row date" id="f_nacimiento" data-target-input="nearest">
			{!! Html::decode(Form::label('f_nacimiento', '<strong>Fecha de Nacimiento:</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('f_nacimiento', $persona->f_nacimiento, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#f_nacimiento', 'id' => 'f_nacimiento', 'data-toggle' => 'datetimepicker', 'data-target' => '#f_nacimiento' ]) !!}
			</div>			
		</div>
		
		<div class="form-group row">
			{!! Html::decode(Form::label('c_comunal', '<strong>Consejo Comunal:</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('c_comunal', $persona->c_comunal, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('telefono_1', '<strong>Telefono Celular:</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('telefono_1', $persona->telefono_1, ['class' => 'form-control form-control-sm telefono', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('telefono_2', '<strong>Telefono Fijo:</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('telefono_2', $persona->telefono_2, ['class' => 'form-control form-control-sm telefono', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('correo', '<strong>Correo:</strong>', ['class' => 'col-sm-4 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-6">
			{!! Form::text('correo', $persona->correo, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
	</div>

</div>
