@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_001_1/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('JefaturaDePersonal.form_001_1.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">PERSONAL DOCENTE POR CATEGORIA, DEDICACION SEGUN CARGA HORARIA Y SEXO</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th rowspan="3">ID</th>
		              <th rowspan="3">CATEGORIAS</th>
		              <th colspan="8">SEXO</th>
		              <th rowspan="2" colspan="4">TOTAL</th>
		              <th rowspan="3">OPCIONES</th>
	                </tr>
	                <tr>
	                 <th colspan="4">MUJERES</th>
		             <th colspan="4">HOMBRES</th>
	                </tr>
	                <tr>
	                 <th>EXC</th>
		             <th>TC</th>
		             <th>TH</th>
		             <th>TOTAL</th>
		             <th>EXC</th>
		             <th>TC</th>
		             <th>TH</th>
		             <th>TOTAL</th>
		             <th>EXC</th>
		             <th>TC</th>
		             <th>TH</th>
		             <th>TOTAL</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->idf1_1}}</td>
					<td>{{$reg->nombre_c}}</td>
					<td>{{$reg->exc_m}}</td>
					<td>{{$reg->tc_m}}</td>
					<td>{{$reg->th_m}}</td>
					<td>{{$reg->total_m}}</td>
					<td>{{$reg->exc_h}}</td>
					<td>{{$reg->tc_h}}</td>
					<td>{{$reg->th_h}}</td>
					<td>{{$reg->total_h}}</td>
					<td>{{$reg->exc_t}}</td>
					<td>{{$reg->tc_t}}</td>
					<td>{{$reg->th_t}}</td>
					<td>{{$reg->total_t}}</td>
					<!--<td>{{$reg->gestion}}</td>-->
					<td>
						<a href="" data-target="#modal-delete-{{$reg->idf1_1}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('JefaturaDePersonal.form_001_1.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f1_1XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection