@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_010_2/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('DAF.form_010_2.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center"></h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th>FTE-ORG</th>
		              <th>DESCRIPCION </th>
		              <th>PRESUPUESTOS VIG.</th>
		              <th>EJECUCION</th>
		              <th>PERCIBIDO</th>
		              <th>PORCENTAJE DE EJECUCION</th>
		              <th>OPCIONES</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->fte}}</td>
					<td>{{$reg->descripcion}}</td>
					<td>{{$reg->presupuestos}}</td>
					<td>{{$reg->ejecucion}}</td>
					<td>{{$reg->percibido}}</td>
					<td>{{$reg->porcentaje}}</td>
					<td>
						<a href="" data-target="#modal-delete-{{$reg->idf10_2}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('DAF.form_010_2.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f10_2XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection