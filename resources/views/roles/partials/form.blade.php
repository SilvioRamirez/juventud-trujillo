<div class="form-group row">
	{!! Html::decode(Form::label('name', '<strong>Nombre: </strong>', ['class' => 'col-sm-4 col-form-label '])) !!}
	<div class="col-sm-8">
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>			
</div>
<div class="form-group row">
	{!! Html::decode(Form::label('slug', '<strong>Clave:</strong>', ['class' => 'col-sm-4 col-form-label'])) !!}
	<div class="col-sm-8">
		{!! Form::text('slug', null, ['class' => 'form-control']) !!}
	</div>			
</div>
<div class="form-group row">
	{!! Html::decode(Form::label('description', '<strong>Descripción:</strong>', ['class' => 'col-sm-4 col-form-label'])) !!}
	<div class="col-sm-8">
		{!! Form::text('description', null, ['class' => 'form-control']) !!}
	</div>			
</div>

<hr>
<h3>Permiso Especial</h3>
<div class="form-group">
	<label>{{ Form::radio('special', 'all-access') }} Acceso Total</label>
	<label>{{ Form::radio('special', 'no-access') }} Ningun Acceso</label>
</div>
<hr>


<h3>Lista de Permisos</h3>
<div class="form-check">
	<ul class="list-unstyled">
		@foreach($permissions as $permission)
			<li>
				<label class="form-check-label">
				{{ Form::checkbox('permissions[]', $permission->id, null) }}
				{{ $permission->name }}
				<em>({{ $permission->description ?: 'Sin Descripción' }})</em>
				</label>
			</li>
		@endforeach
	</ul>
</div>