<div class="form-group">	
	<div class="form-group">
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">
					{!! Form::label('cedula', 'Cedula:', ['class' => 'control-label']) !!}
				</span>
			</div>
				{!! Form::text('cedula', null, ['class' => 'form-control cedula', 'placeholder' => 'Ej.: V15167890']) !!}
			<div class="input-group-append">
				{!! Form::button('<i class="fa fa-search"></i> Buscar', ['type' => 'submit', 'class' => 'btn btn-primary'] )  !!}
			</div>
		</div>
	</div>
</div>
