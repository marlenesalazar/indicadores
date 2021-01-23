@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Nuevo registro <a href="{{route('DireccionRelaciones.form_017_1.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
		{!!Form::open(array('url'=>'DireccionRelaciones/form_017_1','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
		<div class="form-group">
			<label for="año">AÑO</label>
			<input type="number" name="año" class="form-control" placeholder="2020..">
		</div>
		<div class="form-group">
			<label for="n_convenios">N° DE CONVENIOS INTERNACIONALES</label>
			<input type="number" name="n_convenios" class="form-control" >
		</div>
	    <div class="form-group">
		    <label for="indice">INDICE</label>
		    <input type="text" name="indice" class="form-control">
	    </div>
		<div class="form-group">
		    <label for="gestion">GESTION</label>
		    <input type="text" name="gestion" class="form-control">
	    </div>
	    <div class="form-group">
	         <button class="btb btn-primary" type="submit">Guardar</button>
	    </div>
        {!!Form::close()!!}
	</div>
</div>
@endsection