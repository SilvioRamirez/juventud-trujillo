<div class="container-fluid margin-top-10">
	<div class="row">
	<div class="col-md-6">
		<h3 class="text-center">Foto de Perfil</h3>
		{!! Form::hidden('imagen', $persona->imagen, ['id' => 'imagen' ]) !!}
		<div class="">
			<canvas id="foto_final" class="offset-3 shadow rounded" style="height: 280px; width: 320px;"></canvas>
		</div>
		<div class="text-center">
		<button class="btn btn-primary margin-top-10" id="btn-subir-foto"><i class="fa fa-camera"></i> Tomar Fotografia</button>
		</div>
	</div>
		
	{{-- Col 1 --}}
	<div class="col-md-6">		
		<h3 class="text-center">Codigo QR</h3>
		{!! Form::hidden('uuid', $persona->uuid, ['id' => 'uuid', ]) !!}
		{!! Form::hidden('qrcode', $persona->qrcode, ['id' => 'qrcode', ]) !!}
		
		@if (!empty($persona->uuid))
			<div class="text-center">
			<img class="shadow" id="qrcodepng" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge('img/faceqr.png', .15, true)->errorCorrection('H')->size(300)->margin(0)->generate($persona->uuid)) !!} ">
			</div>
		@else
			@include('personas.fragment.info')
		@endif
		
		
		
	</div>
	</div>

</div>



