@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Nuevo registro</h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
		{!!Form::open(array('url'=>'ImprentaUniversitaria/form_018_1','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
		<div class="form-group">
			<label for="titulo">Titulo</label>
			<input type="text" name="titulo" class="form-control" placeholder="Titulo..">
		</div>
		<div class="form-group">
			<label for="autor">Autor</label>
			<input type="text" name="autor" class="form-control" placeholder="Autor..">
		</div>
		<div class="form-group">
		    <label for="cantidad">Cantidad</label>
		    <input type="number" name="cantidad" class="form-control" placeholder="Cantidad..">
	    </div>
		<div class="form-group">
			<label for="año">Año</label>
			<input type="text" name="año" class="form-control" placeholder="Año..">
		</div>
	    <div class="form-group">
			<label for="carrera">Carrera</label>
			<input type="text" name="carrera" class="form-control" placeholder="Carrera..">
		</div>
	    <div class="form-group">
			<label for="gestion">Gestion</label>
			<input type="text" name="gestion" class="form-control" placeholder="Gestion..">
		</div>
		<div class="form-group">
	         <button class="btb btn-primary" type="submin">Guardar</button>
	         <button class="btn btn-danger" type="reset">Cancelar</button>
	    </div>
        {!!Form::close()!!}
	</div>
</div>
@endsection