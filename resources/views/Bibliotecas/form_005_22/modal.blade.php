<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$reg -> idf5_22}}">
{{Form::Open(array('action'=>array('F5_22Controller@destroy',$reg ->idf5_22),'method'=>'delete'))}}
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="close">
				<span aria-hidden="true">x</span>
			</button>
			<h4 class="modal-title">Eliminar Registro</h4>
		</div>
		<div class="modal-body">
			<p>Confirme si desea eliminar el registro seleccionado</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary">Confirmar</button>
		</div>
	</div>
</div>
</div>
