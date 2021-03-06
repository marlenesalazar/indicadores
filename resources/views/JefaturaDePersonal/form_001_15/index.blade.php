@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_001_15/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('JefaturaDePersonal.form_001_15.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">PERSONAL ADMINISTRATIVO SEGUN NIVEL ACADEMICO Y PROFESION</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th rowspan="2">PROFESION</th>
		              <th colspan="11">NIVEL ACADEMICO</th>
		              <th rowspan="2">TOTAL</th>
		              <th rowspan="2">PORCENTAJE</th>
		              <th rowspan="2">OPCIONES</th>
	                </tr>
	                <tr>
	                 <th>MSC.</th>
		             <th>ESP.</th>
		             <th>DIP.</th>
		             <th>LIC.</th>
		             <th>EGR.</th>
		             <th>TS.</th>
		             <th>PROF.</th>
		             <th>TM.</th>
		             <th>ESTUDIANTE</th>
		             <th>EMP. PUBLICO</th>
		             <th>OBRERO</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->nombre_p}}</td>
					<td>{{$reg->msc}}</td>
					<td>{{$reg->esp}}</td>
					<td>{{$reg->dip}}</td>
					<td>{{$reg->lic}}</td>
					<td>{{$reg->egr}}</td>
					<td>{{$reg->ts}}</td>
					<td>{{$reg->prof}}</td>
					<td>{{$reg->tm}}</td>
					<td>{{$reg->es}}</td>
					<td>{{$reg->emp}}</td>
					<td>{{$reg->obr}}</td>
					<td>{{$reg->total}}</td>
					<td>{{$reg->porcentaje}}</td>
					<td>
						<a href="" data-target="#modal-delete-{{$reg->idf1_15}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('JefaturaDePersonal.form_001_15.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f1_15XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection