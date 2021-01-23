@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Editar registro: {{$form_018_1->titulo}}</h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div> 
		@endif
		
		
		{!!Form::model($form_018_1,['method'=>'PATCH','route'=>['ImprentaUniversitaria.form_018_1.update',$form_018_1->id]])!!}
        {{Form::token()}}
       <!-- ['method'=>'PATCH','route'=>['ImprentaUniversitaria.form_018_1.update',$form_018_1->id]]-->

		<div class="form-group">
			<label for="titulo">Titulo</label>
			<input type="text" name="titulo" class="form-control" value="{{$form_018_1->titulo}}"placeholder="Titulo..">
		</div>
		<div class="form-group">
			<label for="autor">Autor</label>
			<input type="text" name="autor" class="form-control" value="{{$form_018_1->autor}}" placeholder="Autor..">
		</div>
		<div class="form-group">
		    <label for="cantidad">Cantidad</label>
		    <input type="number" name="cantidad" class="form-control" value="{{$form_018_1->cantidad}}" placeholder="Cantidad..">
	    </div>
	    <div class="form-group">
			<label for="año">Año</label>
			<input type="text" name="año" class="form-control" value="{{$form_018_1->año}}" placeholder="Año..">
		</div>
	    <div class="form-group">
			<label for="carrera">Carrera</label>
			<input type="text" name="carrera" class="form-control" value="{{$form_018_1->carrera}}" placeholder="Carrera..">
		</div>
	    <div class="form-group">
			<label for="gestion">Gestion</label>
			<input type="text" name="gestion" class="form-control" value="{{$form_018_1->gestion}}" placeholder="Gestion..">
		</div>
		<div class="form-group">
	         <button class="btb btn-primary" type="submin">Guardar</button>
	         <a href="{{Route('ImprentaUniversitaria.form_018_1.index')}}"><button class="btn btn-danger">Cancelar</button></a>
	    </div>
        {!!Form::close()!!}
	</div>
</div>
@endsection