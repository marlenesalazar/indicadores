@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_007_6/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('Inscripciones.form_007_6.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">CARRERAS PARALELAS POR ORIGEN DE CARRERA SEGUN FACULTADES</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th rowspan="2">FACULTADES</th>
		              <th rowspan="2">CARRERAS</th>
		              <th colspan="12">CARRERA PARALELA</th>
		              <th rowspan="2">OPCIONES</th>
	                </tr>
	                <tr>
		             <th>ARTES</th>
		             <th>FAC. AGRONOMIA</th>
		             <th>FAC. CC.EE.FF. Y AA.</th>
		             <th>FAC. CIENCIAS PURAS</th>
		             <th>FAC. DE CC.SS. Y HH.</th>
		             <th>FAC. DERECHO</th>
		             <th>FAC. INGENIERIA</th>
		             <th>FAC. ING. GEOLOGICA</th>
		             <th>FAC. ING. MINERA</th> 
		             <th>FAC. TECNOLOGICA</th>
		             <th>FAC. CC. DE LA SALUD</th>
		             <th>FAC. DE MEDICINA</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->nombre_f}}</td>
					<td>{{$reg->nombre_c}}</td>
					<td>{{$reg->artes}}</td>
					<td>{{$reg->agronomia}}</td>
					<td>{{$reg->cc_ee}}</td>
					<td>{{$reg->c_puras}}</td>
					<td>{{$reg->cc_ss}}</td>
					<td>{{$reg->derecho}}</td>
					<td>{{$reg->ingenieria}}</td>
					<td>{{$reg->geologica}}</td>
					<td>{{$reg->minera}}</td>
					<td>{{$reg->tecnologica}}</td>
					<td>{{$reg->salud}}</td>
					<td>{{$reg->medicina}}</td>
					<td>
						<a href="" data-target="#modal-delete-{{$reg->idf7_6}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('Inscripciones.form_007_6.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f7_6XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection