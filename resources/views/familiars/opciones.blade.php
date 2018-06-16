<div class="modal fade" id="modal-opciones-familiar">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-center"><i class="fa fa-cog"></i> Opciones - Familiar</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
				<h2 class="text-center" id="title-opciones-familiar"></h2>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info" v-on:click.prevent="editFamiliar()"><i class="fa fa-edit"></i> Editar</button>
		        <button type="button" class="btn btn-danger" data-toggle="modal" data-dismiss="modal" data-target="#modal-eliminar-familiar"><i class="fa fa-trash-alt"></i> Eliminar</button>
		        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
		    </div>
		</div>
	</div>

</div>