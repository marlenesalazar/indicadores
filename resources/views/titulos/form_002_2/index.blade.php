@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_002_2/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('titulos.form_002_2.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">PROFESIONALES TITULADOS POR NIVEL ACADEMICO SEGUN FACULTADES</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th rowspan="3">FACULTADES</th>
		              <th colspan="6">SEXO</th>
		              <th rowspan="3">TOTAL</th>
		              <th rowspan="3">OPCIONES</th>
	                </tr>
	                <tr>
		             <th colspan="3">LICENCIATURA</th>
		             <th colspan="3">TEC. SUPERIOR</th>
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
					<td>{{$reg->m_l}}</td>
					<td>{{$reg->f_l}}</td>
					<td>{{$reg->st_l}}</td>
					<td>{{$reg->m_t}}</td>
					<td>{{$reg->f_t}}</td>
					<td>{{$reg->st_t}}</td>
					<td>{{$reg->total}}</td>
					<td>
						
						
						<a href="" data-target="#modal-delete-{{$reg->idf2_2}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('titulos.form_002_2.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f2_2XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection