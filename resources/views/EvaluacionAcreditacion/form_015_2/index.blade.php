@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado <a href="form_015_2/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('EvaluacionAcreditacion.form_015_2.search')
	</div>
</div>

<div class="row">
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
        <table class="table table-striped table-bordered
table-condensed table-hover text-center"> 
            <h5 class="text-center">INDICE DE CARRERAS EVALUADAS (ICE)</h5>
            <thead style="background-color: #A9D0F5">
                <th>AÑO</th>
                <th>CARRERAS AUTOEVALUADAS</th> 
                <th>CARRERAS Y/O PROGRAMAS</th>
                <th>INDICADOR</th>
                <th>OPCIONES</th> 
            </thead> 
@foreach($registro as $reg) 
            <tr>
                <td>{{$reg->año}}</td> 
                <td>{{$reg->c_autoevaluadas}}</td>
                <td>{{$reg->carreras}}</td> 
                <td>{{$reg->indicador}}</td>
 <td>
  <a href="{{URL::action('F15_2Controller@edit',$reg->idf15_2)}}"><button class="btn btn-info">Editar</button></a> 
  <a href="" data-target="#modal-delete-{{$reg->idf15_2}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> 
</td> 
</tr> 
@include('EvaluacionAcreditacion.form_015_2.modal')
@endforeach 
</table>
	<div class="btn-group col-4" role="group" aria-label="Basic example">
		<a href="/f15_2XLS" class="btn btn-secondary">Exportar</a>
	</div>	
</div>	
{{$registro->render()}}
	</div>
</div>
@endsection