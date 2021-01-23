@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_001_5/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('JefaturaDePersonal.form_001_5.search')
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
		              <th colspan="3">DOCTOR</th>
		              <th colspan="3">MASTER</th>
		              <th colspan="3">ESPC.</th>
		              <th colspan="3">DIP.</th>
		              <th colspan="3">LIC.</th>
		              <th colspan="3">TEC. SUP.</th>
		              <th rowspan="2">TOTAL</th>
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
		             <th>ST</th>
		             <th>M</th>
		             <th>F</th>
		             <th>ST</th>
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
					<td>{{$reg->m_doc}}</td>
					<td>{{$reg->f_doc}}</td>
					<td>{{$reg->st_doc}}</td>
					<td>{{$reg->m_mas}}</td>
					<td>{{$reg->f_mas}}</td>
					<td>{{$reg->st_mas}}</td>
					<td>{{$reg->m_es}}</td>
					<td>{{$reg->f_es}}</td>
					<td>{{$reg->st_es}}</td>
					<td>{{$reg->m_dip}}</td>
					<td>{{$reg->f_dip}}</td>
					<td>{{$reg->st_dip}}</td>
					<td>{{$reg->m_lic}}</td>
					<td>{{$reg->f_lic}}</td>
					<td>{{$reg->st_lic}}</td>
					<td>{{$reg->m_tec}}</td>
					<td>{{$reg->f_tec}}</td>
					<td>{{$reg->st_tec}}</td>
					<td>{{$reg->total}}</td>
					<td>{{$reg->porcentaje}}</td>
					<td>
						
						
					<a href="" data-target="#modal-delete-{{$reg->idf1_5}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('JefaturaDePersonal.form_001_5.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f1_5XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection