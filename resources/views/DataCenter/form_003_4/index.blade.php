@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_003_4/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('DataCenter.form_003_4.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">CURSOS PREUNIVERSITARIO POR TIPO DE COLEGIO,SEGÚN CARRERAS Y PROCEDENCIA</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th rowspan="2">FACULTADES</th>
		              <th rowspan="2">CARRERAS</th>
		              <th colspan="2">CAPITAL</th>
		              <th colspan="2">PROVINCIA</th>
		              <th colspan="2">INTER CAP.</th>
		              <th colspan="2">INTER PROV.</th>
		              <th colspan="2">EXT.</th>
		              <th rowspan="2">TOTAL</th>
		              <th rowspan="2">OPCIONES</th>
	                </tr>
	                <tr>
		             <th>FIS</th>
		             <th>PART</th>
		             <th>FIS</th>
		             <th>PART</th>
		             <th>FIS</th>
		             <th>PART</th>
		             <th>FIS</th>
		             <th>PART</th>
		             <th>FIS</th>
		             <th>PART</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->nombre_f}}</td>
					<td>{{$reg->nombre_c}}</td>
					<td>{{$reg->fis_c}}</td>
					<td>{{$reg->part_c}}</td>
					<td>{{$reg->fis_p}}</td>
					<td>{{$reg->part_p}}</td>
					<td>{{$reg->fis_i}}</td>
					<td>{{$reg->part_i}}</td>
					<td>{{$reg->fis_in}}</td>
					<td>{{$reg->part_in}}</td>
					<td>{{$reg->fis_e}}</td>
					<td>{{$reg->part_e}}</td>
					<td>{{$reg->total}}</td>
					<td>
						<a href="" data-target="#modal-delete-{{$reg->idf3_4}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('DataCenter.form_003_4.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f3_4XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection