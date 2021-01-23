@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_001_8/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('JefaturaDePersonal.form_001_7.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">PERSONAL ADMINISTRATIVO POR SEXO SUGUN ACTIVIDAD</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th rowspan="2">ACTIVIDAD</th>
		              <th colspan="2">SEXO</th>
		              <th rowspan="2">TOTAL</th>
		              <th rowspan="2">PORCENTAJE</th>
		              <th rowspan="2">OPCIONES</th>
	                </tr>
	                <tr>
	                 <th>MUJERES</th>
		             <th>HOMBRES</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->actividad}}</td>
					<td>{{$reg->hombres}}</td>
					<td>{{$reg->mujeres}}</td>
					<td>{{$reg->total}}</td>
					<td>{{$reg->porcentaje}}</td>
					<td>
						<a href="" data-target="#modal-delete-{{$reg->idf1_8}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('JefaturaDePersonal.form_001_8.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f1_8XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection