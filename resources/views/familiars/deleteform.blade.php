<div class="modal fade" id="modal-eliminar-familiar">
	<form method="POST" v-on:submit.prevent="deleteFamiliar">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-center"><i class="fa fa-user-minus"></i> Eliminar Familiar</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<h2 class="text-center">¿Esta segur@ de eliminar este familiar?</h2>
				<div class="form-group row">
					
					<ul>
						<span class="text-danger"><li v-for="error in errors">@{{ error }}</li></span>
					</ul>


				</div>
			</div>
			<div class="modal-footer">		        
		        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-alt"></i> Eliminar</button>
		        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
		    </div>
		</div>
	</div>
	</form>
</div>