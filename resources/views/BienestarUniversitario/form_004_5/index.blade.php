@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_004_5/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('BienestarUniversitario.form_004_5.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">BENEFICIAROS CON BECA ALIMENTACION POR TIPO DE BECA, SEGUN SEXO Y CARRERAS</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th rowspan="3">FACULTADES</th>
					  <th rowspan="3">CARRERAS</th>
		              <th colspan="6">TIPO DE BECA</th>
		              <th rowspan="3">TOTAL</th>
		              <th rowspan="3">PORCENTAJE</th>
		              <th rowspan="3">OPCIONES</th>
	                </tr>
	                <tr>
		             <th colspan="3">COMPLETA</th>
		             <th colspan="3">PARCIAL</th>
	                </tr>
	                <tr>
	                	<th>M</th>
	                	<th>F</th>
	                	<th>ST</th>
	                	<th>M</th>
	                	<th>F</th>
	                	<th>ST</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->nombre_f}}</td>
					<td>{{$reg->nombre_c}}</td>
					<td>{{$reg->m_c}}</td>
					<td>{{$reg->f_c}}</td>
					<td>{{$reg->t_c}}</td>
					<td>{{$reg->m_p}}</td>
					<td>{{$reg->f_p}}</td>
					<td>{{$reg->t_p}}</td>
					<td>{{$reg->total}}</td>
					<td>{{$reg->porcentaje}}</td>
					<td>
						<a href="" data-target="#modal-delete-{{$reg->idf4_5}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('BienestarUniversitario.form_004_5.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f4_5XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection