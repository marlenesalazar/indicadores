@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_006_3/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('Postgrado.form_006_3.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">MATRICULA POSTGRADO POR NIVEL DE FORMACION Y SEXO, SEGUN UNIDADES ACADEMICAS</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th rowspan="2">UNIDAD ACADEMICA OFERTANTE</th>
		              <th colspan="3">DOCTORADO</th>
		              <th colspan="3">MAESTRIA</th>
		              <th colspan="3">DIP. O ESP.</th>
		              <th rowspan="2">TOTAL</th>
		              <th rowspan="2">OPCIONES</th>
	                </tr>
	                <tr>
	                	<th>M</th>
	                	<th>F</th>
	                	<th>T</th>
	                	<th>M</th>
	                	<th>F</th>
	                	<th>T</th>
	                	<th>M</th>
	                	<th>F</th>
	                	<th>T</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->unidad}}</td>
					<td>{{$reg->m_d}}</td>
					<td>{{$reg->f_d}}</td>
					<td>{{$reg->t_d}}</td>
					<td>{{$reg->m_m}}</td>
					<td>{{$reg->f_m}}</td>
					<td>{{$reg->t_m}}</td>
					<td>{{$reg->m_dip}}</td>
					<td>{{$reg->f_dip}}</td>
					<td>{{$reg->t_dip}}</td>
					<td>{{$reg->total}}</td>
					<td>
						<a href="" data-target="#modal-delete-{{$reg->idf6_3}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('Postgrado.form_006_3.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f6_3XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection