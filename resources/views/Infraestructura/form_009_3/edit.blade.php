@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Editar registro: {{$registro->obras}} <a href="{{Route('Infraestructura.form_009_3.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div> 
		@endif
		
		
		{!!Form::model($registro,['method'=>'PATCH','route'=>['Infraestructura.form_009_3.update',$registro->idf9_3]])!!}
        {{Form::token()}}

		<div class="form-group">
			<label for="obras">OBRAS EN EJECUCION</label>
			<input type="text" name="obras" class="form-control" value="{{$registro->obras}}"placeholder="Obras..">
		</div>
		<div class="form-group">
			<label for="sup">SUP/CANT</label>
			<input type="text" name="sup" class="form-control" value="{{$registro->sup}}" placeholder="Sup/cant..">
		</div>
		<div class="form-group">
		    <label for="costo">COSTO EN Bs</label>
		    <input type="number" name="costo" class="form-control" value="{{$registro->costo}}" placeholder="Costo en bs..">
	    </div>
	    <div class="form-group">
			<label for="gestion">GESTION</label>
			<input type="text" name="gestion" class="form-control" value="{{$registro->gestion}}" placeholder="2/2020..">
		</div>
		<div class="form-group">
	         <button class="btb btn-primary" type="submin">Guardar</button>
	    </div>
        {!!Form::close()!!}
	</div>
</div>
@endsection