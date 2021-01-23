@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_003_5/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('DataCenter.form_003_5.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">MATRICULA PREUNIVERSITARIO, SEGÚN COMPOSICIÓN DE EDAD, POR FACULTAD</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th rowspan="2">EDAD</th>
		              <th colspan="13">FACULTADES</th>
		              <th rowspan="2">TOTAL</th>
		              <th rowspan="2">PORCENTAJE</th>
		              <th rowspan="2">OPCIONES</th>
	                </tr>
	                <tr>
	                 <th>ARTES</th>
		             <th>CC. AA. Y PP</th>
		             <th>CC. EE. FF. Y AA</th>
		             <th>CIENCIAS PURAS.</th>
		             <th>CC. SS. Y HH.</th>
		             <th>DERECHO</th>
		             <th>INGENIERIA</th>
		             <th>ING. GEOLOGICA</th>
		             <th>ING. MINERA</th>
		             <th>TECNOLOGICA</th>
		             <th>CIENCIAS DE LA SALUD</th>
		             <th>MEDICINA</th>
		             <th>PROGRAMA UNCIA</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->edad}}</td>
					<td>{{$reg->artes}}</td>
					<td>{{$reg->cc_aa}}</td>
					<td>{{$reg->cc_ee}}</td>
					<td>{{$reg->c_puras}}</td>
					<td>{{$reg->cc_ss}}</td>
					<td>{{$reg->derecho}}</td>
					<td>{{$reg->ing}}</td>
					<td>{{$reg->ing_geo}}</td>
					<td>{{$reg->ing_min}}</td>
					<td>{{$reg->tecnologica}}</td>
					<td>{{$reg->c_salud}}</td>
					<td>{{$reg->medicina}}</td>
					<td>{{$reg->p_uncia}}</td>
					<td>{{$reg->total}}</td>
					<td>{{$reg->porcentaje}}</td>
					<td>
						<a href="" data-target="#modal-delete-{{$reg->idf3_5}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('DataCenter.form_003_5.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f3_5XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection