@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_006_2/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('Postgrado.form_006_2.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">UNIDADES ACADEMICAS QUE OFERTARON CURSOS DE POSGRADO</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th>CURSO O PROGRAMA</th>
		              <th>UNIDAD ACADEMICA OFERTANTE</th>
		              <th>GESTION</th>
		              <th>NIVEL</th>
		              <th>OPCIONES</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->curso}}</td>
					<td>{{$reg->unidad}}</td>
					<td>{{$reg->gestion}}</td>
					<td>{{$reg->nivel}}</td>
					<td>
						<a href="" data-target="#modal-delete-{{$reg->idf6_2}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('Postgrado.form_006_2.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f6_2XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection