@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_012_3/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('Extension.form_012_3.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">PROYECTOS DE EXTENSION CON COOPERACION INTERNACIONAL</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th>FACULTADES</th>
		              <th>CARRERAS</th>
		              <th>NOMBRE DEL PROYECTO (SEGUN OBJETIVO)</th>
		              <th>EJE TEMATICO</th>
		              <th>EXTENSIONISTA PRINCIPAL</th>
		              <th>ENTIDAD FINANCIERA</th>
		              <th>TIEMPO DE EJECUCION</th>
		              <th>OPCIONES</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->nombre_f}}</td>
					<td>{{$reg->nombre_c}}</td>
					<td>{{$reg->n_proyecto}}</td>
					<td>{{$reg->e_tematico}}</td>
					<td>{{$reg->e_principal}}</td>
					<td>{{$reg->e_financiera}}</td>
					<td>{{$reg->t_ejecucion}}</td>
					<td>
						
						
						<a href="" data-target="#modal-delete-{{$reg->idf12_3}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('Extension.form_012_3.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f12_3XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection