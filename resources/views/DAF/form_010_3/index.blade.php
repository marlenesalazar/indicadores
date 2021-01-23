@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_010_3/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('DAF.form_010_3.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover text-center"  >
				<h5 class="text-center">EGRESOS</h5>
				<thead style="background-color: #A9D0F5">
					<tr>
					  <th>FTE-ORG</th>
		              <th>DESCRIPCION</th>
		              <th>10000</th>
		              <th>20000</th>
		              <th>30000</th>
		              <th>40000</th>
		              <th>50000</th>
		              <th>60000</th>
		              <th>70000</th>
		              <th>80000</th>
		              <th>90000</th>
		              <th>TOTAL</th>
		              <th>OPCIONES</th>
	                </tr>
				</thead>
				@foreach($registro as $reg)
				<tr>
					<td>{{$reg->fte}}</td>
					<td>{{$reg->descripcion}}</td>
					<td>{{$reg->valor1}}</td>
					<td>{{$reg->valor2}}</td>
					<td>{{$reg->valor3}}</td>
					<td>{{$reg->valor4}}</td>
					<td>{{$reg->valor5}}</td>
					<td>{{$reg->valor6}}</td>
					<td>{{$reg->valor7}}</td>
					<td>{{$reg->valor8}}</td>
					<td>{{$reg->valor9}}</td>
					<td>{{$reg->total}}</td>
					<td>
						<a href="" data-target="#modal-delete-{{$reg->idf10_3}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 					
					</td>
				</tr>
				@include('DAF.form_010_3.modal')
				@endforeach
			</table>
			<div class="btn-group col-4" role="group" aria-label="Basic example">
				<a href="/f10_3XLS" class="btn btn-secondary">Exportar</a>
			</div>
			
		</div>
		{{$registro->render()}}
	</div>
</div>
@endsection