@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_001_4/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('JefaturaDePersonal.form_001_4.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">PERSONAL DOCENTE POR CATEGORIA Y DEDICACION, SEGUN CARRERAS</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th rowspan="2">FACULTADES</th>
		              <th rowspan="2">CARRERAS</th>
		              <th colspan="3">CATEDRATICO</th>
		              <th colspan="3">ADJUNTO</th>
		              <th colspan="3">ASISTENTE</th>
		              <th colspan="3">ASISTENTE A.I.</th>
		              <th rowspan="2">TOTAL</th>
		              <th rowspan="2">PORCENTAJE</th>
		              <th rowspan="2">OPCIONES</th>
	                </tr>
	                <tr>
		             <th>TC</th>
		             <th>TH</th>
		             <th>ST</th>
		             <th>TC</th>
		             <th>TH</th>
		             <th>ST</th>
		             <th>TC</th>
		             <th>TH</th>
		             <th>ST</th>
		             <th>TC</th>
		             <th>TH</th>
		             <th>ST</th>
	                </tr>
	                
	              
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->nombre_f}}</td>
					<td>{{$reg->nombre_c}}</td>
					<td>{{$reg->tc_c}}</td>
					<td>{{$reg->th_c}}</td>
					<td>{{$reg->st_c}}</td>
					<td>{{$reg->tc_a}}</td>
					<td>{{$reg->th_a}}</td>
					<td>{{$reg->st_a}}</td>
					<td>{{$reg->tc_as}}</td>
					<td>{{$reg->th_as}}</td>
					<td>{{$reg->st_as}}</td>
					<td>{{$reg->tc_asi}}</td>
					<td>{{$reg->th_asi}}</td>
					<td>{{$reg->st_asi}}</td>
					<td>{{$reg->total}}</td>
					<td>{{$reg->porcentaje}}</td>
					<td>
						
						
						<a href="" data-target="#modal-delete-{{$reg->idf1_4}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('JefaturaDePersonal.form_001_4.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f1_4XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection