@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_012_1/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('Extension.form_012_1.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">CENTROS DE EXTENSION (ESPECIALIZADOS) SEGUN FACULTADES Y CARRERAS</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th rowspan="2">FACULTADES</th>
		              <th rowspan="2">CARRERAS</th>
		              <th rowspan="2">NOMBRE DEL CENTRO (SEGUN OBJETIVO)</th>
		              <th colspan="3">TIPO DE EXTENSION</th>
		              <th rowspan="2">OPCIONES</th>
	                </tr>
	                <tr>
		             <th>LIBRE</th>
		             <th>INTERNA</th>
		             <th>EXTERNA</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->nombre_f}}</td>
					<td>{{$reg->nombre_c}}</td>
					<td>{{$reg->n_centro}}</td>
					<td>{{$reg->libre}}</td>
					<td>{{$reg->interna}}</td>
					<td>{{$reg->externa}}</td>
					<td>
						
						<a href="" data-target="#modal-delete-{{$reg->idf12_1}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('Extension.form_012_1.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f12_1XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection