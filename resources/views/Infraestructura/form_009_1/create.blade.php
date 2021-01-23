@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Nuevo registro <a href="{{route('Infraestructura.form_009_1.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
		{!!Form::open(array('url'=>'Infraestructura/form_009_1','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
		<div class="form-group">
			<label for="obras">OBRAS DE MANTENIMIENTO</label>
			<input type="text" name="obras" class="form-control" placeholder="Obras..">
		</div>
		<div class="form-group">
			<label for="sup">SUP/CANT</label>
			<input type="text" name="sup" class="form-control" placeholder="Sup/cant..">
		</div>
		<div class="form-group">
		    <label for="costo">COSTO EN Bs</label>
		    <input type="text" name="costo" class="form-control" placeholder="Costo..">
	    </div>
	    <div class="form-group">
			<label for="gestion">GESTION</label>
			<input type="text" name="gestion" class="form-control" placeholder="Gestion..">
		</div>
		<div class="form-group">
	         <button class="btb btn-primary" type="submin">Guardar</button>
	    </div>
        {!!Form::close()!!}
	</div>
</div>
@endsection