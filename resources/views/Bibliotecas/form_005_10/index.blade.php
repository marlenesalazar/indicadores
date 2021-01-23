@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_005_10/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('Bibliotecas.form_005_10.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">TOTAL DE OBRAS CONSULTADAS DE BIBLIOTECAS </h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th rowspan="3">USUARIO</th>
		              <th colspan="4">TOTAL</th>
		              <th rowspan="3">TOTAL</th>
		              <th rowspan="3">OPCIONES</th>
	                </tr>
	                <tr>
	                	<th colspan="2">MASCULINO</th>
	                	<th colspan="2">FEMENINO</th>
	                </tr>
	                <tr>
	                	<th>OBRAS</th>
	                	<th>LECTORES</th>
	                	<th>OBRAS</th>
	                	<th>LECTORES</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->usuario}}</td>
					<td>{{$reg->obras_m}}</td>
					<td>{{$reg->lectores_m}}</td>
					<td>{{$reg->obras_f}}</td>
					<td>{{$reg->lectores_f}}</td>
					<td>{{$reg->total}}</td>
					<td>
						<a href="" data-target="#modal-delete-{{$reg->idf5_10}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('Bibliotecas.form_005_10.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f5_10XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection