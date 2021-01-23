@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_006_4/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('Postgrado.form_006_4.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">PROGRAMAS POSTGRADO</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
		              <th rowspan="2">NIVEL</th>
		              <th rowspan="2">N°</th>
					  <th rowspan="2">CURSO O PROGRAMA</th>
		              <th rowspan="2">UNIDAD ACADEMICA OFERTANTE</th>
		              <th rowspan="2" colspan="2">FECHA DE:</th>
		              <th rowspan="2">GESTION</th>
		              <th rowspan="2">OPCIONES</th>
	                </tr>
	                <tr>
	                	<th>INICIO</th>
	                	<th>CONCLUSION</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->nivel}}</td>
					<td>{{$reg->num}}</td>
					<td>{{$reg->curso}}</td>
					<td>{{$reg->unidad}}</td>
					<td>{{$reg->inicio}}</td>
					<td>{{$reg->fin}}</td>
					<td>{{$reg->gestion}}</td>
					<td>
						<a href="" data-target="#modal-delete-{{$reg->idf6_4}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('Postgrado.form_006_4.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f6_4XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection