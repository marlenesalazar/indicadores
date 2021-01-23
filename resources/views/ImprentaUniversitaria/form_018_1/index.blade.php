@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_018_1/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('ImprentaUniversitaria.form_018_1.search')
	</div>
</div>

<div class="row">
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
 <div class="table-responsive">
 <table class="table table-striped table-bordered
table-condensed table-hover"> 
<thead>
 <th>id</th> 
 <th>Titulo</th>
 <th>Autor</th> 
 <th>Cantidad</th> 
 <th>Año</th> 
 <th>Carrera</th>
 <th>Gestion</th> 
 <th>Opciones</th> 
</thead> 
@foreach($registro as $reg) 
<tr>
 <td>{{$reg->id}}</td> 
 <td>{{$reg->titulo}}</td> 
 <td>{{$reg->autor}}</td>
 <td>{{$reg->cantidad}}</td> 
 <td>{{$reg->año}}</td>
 <td>{{$reg->carrera}}</td>
 <td>{{$reg->gestion}}</td> 
 <td>
  <a href="{{URL::action('F18_1Controller@edit',$reg->id)}}"><button class="btn btn-info">Editar</button></a> 
  <a href="" data-target="#modal-delete-{{$reg->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 
</td> 
</tr> 
@include('ImprentaUniversitaria.form_018_1.modal')
@endforeach 
</table>
			
</div>	
{{$registro->render()}}
	</div>
</div>
@endsection