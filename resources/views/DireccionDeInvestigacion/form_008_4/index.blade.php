@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_008_4/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('DireccionDeInvestigacion.form_008_4.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">PROYECTOS DE INVESTIGACION EJECUTADOS CON EMPRESAS PRIVADAS</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th>FACULTADES</th>
		              <th>CARRERAS</th>
		              <th>NOMBRE DEL PROYECTO (SEGUN OBJETIVO)</th>
		              <th>EJE TEMATICO</th>
		              <th>UNIDAD PROPONENTE</th>
		              <th>INVESTIGADOR PRINCIPAL</th>
		              <th>ENTIDAD FINANCIERA</th>
		              <th>TIEMPO DE EJECUCION</th>
		              <th>OPCIONES</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->nombre_f}}</td>
					<td>{{$reg->nombre_c}}</td>
					<td>{{$reg->proyecto}}</td>
					<td>{{$reg->e_tematico}}</td>
					<td>{{$reg->u_proponente}}</td>
					<td>{{$reg->investigador}}</td>
					<td>{{$reg->e_financiera}}</td>
					<td>{{$reg->t_ejecucion}}</td>
					<td>
						
						
						<a href="" data-target="#modal-delete-{{$reg->idf8_4}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('DireccionDeInvestigacion.form_008_4.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f8_4XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection