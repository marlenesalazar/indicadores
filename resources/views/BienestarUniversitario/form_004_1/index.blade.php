@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_004_1/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('BienestarUniversitario.form_004_1.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">RESUMEN TOTAL DE BECA ALIMENTACION E INTERNADO UNIVERSITARIO</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th rowspan="2">BECA</th>
		              <th colspan="2">TIPO DE BECA</th>
		              <th rowspan="2">TOTAL</th>
		              <th rowspan="2">OPCIONES</th>
	                </tr>
	                <tr>
	                 <th>COMPLETA</th>
		             <th>PARCIAL</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->beca}}</td>
					<td>{{$reg->completa}}</td>
					<td>{{$reg->parcial}}</td>
					<td>{{$reg->total}}</td>
					<td>
						<a href="" data-target="#modal-delete-{{$reg->idf4_1}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('BienestarUniversitario.form_004_1.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f4_1XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection