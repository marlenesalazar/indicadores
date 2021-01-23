@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_004_10/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('BienestarUniversitario.form_004_10.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">AUXILIARES DE DOCENCIA SEGUN CARRERAS Y TIPO DE BECA</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th rowspan="2">FACULTADES</th>
		              <th rowspan="2">CARRERAS</th>
		              <th colspan="2">TIPO DE BECA</th>
		              <th rowspan="2">TOTAL</th>
		              <th rowspan="2">PORCENTAJE</th>
		              <th rowspan="2">OPCIONES</th>
	                </tr>
	                <tr>
		             <th>TITULAR</th>
		             <th>INVITADO</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->nombre_f}}</td>
					<td>{{$reg->nombre_c}}</td>
					<td>{{$reg->titular}}</td>
					<td>{{$reg->invitado}}</td>
					<td>{{$reg->total}}</td>
					<td>{{$reg->porcentaje}}</td>
					<td>
						<a href="" data-target="#modal-delete-{{$reg->idf4_10}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('BienestarUniversitario.form_004_10.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f4_10XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection