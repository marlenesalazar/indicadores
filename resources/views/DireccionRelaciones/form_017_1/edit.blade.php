@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Editar registro: {{$registro->año}} <a href="{{Route('DireccionRelaciones.form_017_1.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div> 
		@endif
		{!!Form::model($registro,['method'=>'PATCH','route'=>['DireccionRelaciones.form_017_1.update',$registro->idf17_1]])!!}
        {{Form::token()}}

		<div class="form-group">
			<label for="año">AÑO</label>
			<input type="number" name="año" class="form-control" value="{{$registro->año}}"placeholder="2020..">
		</div>
		<div class="form-group">
			<label for="n_convenios">N° DE CONVENIOS INTERNACIONALES</label>
			<input type="number" name="n_convenios" class="form-control" value="{{$registro->n_convenios}}">		
		</div>
	    <div class="form-group">
		    <label for="indice">INDICE</label>
		    <input type="text" name="indice" class="form-control" value="{{$registro->indice}}">
	    </div>
		<div class="form-group">
		    <label for="gestion">GESTION</label>
		    <input type="text" name="gestion" class="form-control" value="{{$registro->gestion}}">
	    </div>
		<div class="form-group">
	         <button class="btb btn-primary" type="submit">Guardar</button>
	    </div>
        {!!Form::close()!!}
	</div>
</div>
@endsection