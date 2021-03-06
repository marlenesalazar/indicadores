@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_001_6/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('JefaturaDePersonal.form_001_6.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">PERSONAL DOCENTE POR CATEGORIA Y DEDICACION SEGUN CARRERAS</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th rowspan="2">FACULTAD</th>
		              <th rowspan="2">CARRERAS</th>
		              <th colspan="3">AUXILIARES</th>
		              <th colspan="3">INVESTIGADORES</th>
		              <th colspan="3">TOTAL</th>
		              <th rowspan="2">PORCENTAJE</th>
		              <th rowspan="2">OPCIONES</th>
	                </tr>
	                <tr>
		             <th>M</th>
		             <th>F</th>
		             <th>ST</th>
		             <th>M</th>
		             <th>F</th>
		             <th>ST</th>
		             <th>M</th>
		             <th>F</th>
		             <th>TOTAL</th>
	                </tr>
	                
	              
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->nombre_f}}</td>
					<td>{{$reg->nombre_c}}</td>
					<td>{{$reg->m_aux}}</td>
					<td>{{$reg->f_aux}}</td>
					<td>{{$reg->st_aux}}</td>
					<td>{{$reg->m_inv}}</td>
					<td>{{$reg->f_inv}}</td>
					<td>{{$reg->st_inv}}</td>
					<td>{{$reg->m_to}}</td>
					<td>{{$reg->f_to}}</td>
					<td>{{$reg->total_to}}</td>
					<td>{{$reg->porcentaje}}</td>
					<td>
						
						
						<a href="" data-target="#modal-delete-{{$reg->idf1_6}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('JefaturaDePersonal.form_001_6.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f1_6XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection