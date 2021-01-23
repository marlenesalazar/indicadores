@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_003_3/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('DataCenter.form_003_3.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">MATRICULA CURSOS PREUNIVERSITARIO POR CARRERAS, SEGÚN LUGAR DEPARTAMENTAL DE NACIMIENTO</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th rowspan="2">FACULTADES</th>
		              <th rowspan="2">CARRERAS</th>
		              <th colspan="9">DEPARTAMENTO</th>
		              <th rowspan="2">EXTERIOR</th>
		              <th rowspan="2">TOTAL</th>
		              <th rowspan="2">OPCIONES</th>
	                </tr>
	                <tr>
		             <th>BENI</th>
		             <th>PANDO</th>
		             <th>CHUQ</th>
		             <th>CBBA</th>
		             <th>LA PAZ</th>
		             <th>ORURO</th>
		             <th>STA. CRUZ</th>
		             <th>POTOSI</th>
		             <th>TARIJA</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->nombre_f}}</td>
					<td>{{$reg->nombre_c}}</td>
					<td>{{$reg->beni}}</td>
					<td>{{$reg->pando}}</td>
					<td>{{$reg->chuq}}</td>
					<td>{{$reg->cbba}}</td>
					<td>{{$reg->lapaz}}</td>
					<td>{{$reg->oruro}}</td>
					<td>{{$reg->stacruz}}</td>
					<td>{{$reg->potosi}}</td>
					<td>{{$reg->tarija}}</td>
					<td>{{$reg->exterior}}</td>
					<td>{{$reg->total}}</td>
					<td>
						<a href="" data-target="#modal-delete-{{$reg->idf3_3}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('DataCenter.form_003_3.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f3_3XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection