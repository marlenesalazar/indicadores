@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_009_2/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('Infraestructura.form_009_2.search')
	</div>
</div>

<div class="row">
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
        <table class="table table-striped table-bordered
table-condensed table-hover text-center"> 
            <h5 class="text-center">OBRAS CONCLUIDAS</h5>
            <thead style="background-color: #A9D0F5">
                <th>OBRAS CONCLUIDAS</th>
                <th>SUP/CANT</th> 
                <th>COSTO EN Bs</th>
                <th>GESTION</th> 
                <th>OPCIONES</th> 
            </thead> 
@foreach($registro as $reg) 
            <tr>
                <td>{{$reg->obras}}</td> 
                <td>{{$reg->sup}}</td>
                <td>{{$reg->costo}}</td> 
                <td>{{$reg->gestion}}</td> 
 <td>
  <a href="{{URL::action('F9_2Controller@edit',$reg->idf9_2)}}"><button class="btn btn-info">Editar</button></a> 
  <a href="" data-target="#modal-delete-{{$reg->idf9_2}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 
</td> 
</tr> 
@include('Infraestructura.form_009_2.modal')
@endforeach 
</table>
	<div class="btn-group col-4" role="group" aria-label="Basic example">
		<a href="/f9_2XLS" class="btn btn-secondary">Exportar</a>
	</div>	
</div>	
{{$registro->render()}}
	</div>
</div>
@endsection