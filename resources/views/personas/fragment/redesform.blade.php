<div class="row margin-top-10">
	{{-- Col 1 --}}
	<div class="col-md-6">
		<div class="form-group row">
			{!! Html::decode(Form::label('facebook', '<strong>Facebook:</strong>', ['class' => 'col-sm-2 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-10">
			{!! Form::text('facebook', $persona->facebook, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('instagram', '<strong>Instagram:</strong>', ['class' => 'col-sm-2 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-10">
			{!! Form::text('instagram', $persona->instagram, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('twitter', '<strong>Twitter:</strong>', ['class' => 'col-sm-2 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-10">
			{!! Form::text('twitter', $persona->twitter, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
	</div>

	{{-- Col 2 --}}

	<div class="col-md-6">
		<div class="form-group row">
			{!! Html::decode(Form::label('whatsapp', '<strong>Whatsapp:</strong>', ['class' => 'col-sm-2 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-10">
			{!! Form::text('whatsapp', $persona->whatsapp, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('youtube', '<strong>YouTube:</strong>', ['class' => 'col-sm-2 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-10">
			{!! Form::text('youtube', $persona->youtube, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
		<div class="form-group row">
			{!! Html::decode(Form::label('snapchat', '<strong>Snapchat:</strong>', ['class' => 'col-sm-2 col-form-label col-form-label-sm'])) !!}
			<div class="col-sm-10">
			{!! Form::text('snapchat', $persona->snapchat, ['class' => 'form-control form-control-sm', ]) !!}
			</div>			
		</div>
	</div>	
</div>