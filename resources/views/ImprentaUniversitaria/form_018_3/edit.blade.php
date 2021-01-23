@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Editar registro: {{$registro->año}} <a href="{{Route('ImprentaUniversitaria.form_018_3.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div> 
		@endif
		{!!Form::model($registro,['method'=>'PATCH','route'=>['ImprentaUniversitaria.form_018_3.update',$registro->idf18_3]])!!}
        {{Form::token()}}

		<div class="form-group">
			<label for="año">AÑO</label>
			<input type="number" name="año" class="form-control" value="{{$registro->año}}"placeholder="2020..">
		</div>
		<div class="form-group">
			<label for="t_publicados">TEXTOS PUBLICADOS</label>
			<input type="number" name="t_publicados" class="form-control" value="{{$registro->t_publicados}}">		
		</div>
	    <div class="form-group">
		    <label for="incremento">INCREMENTO</label>
		    <input type="text" name="incremento" class="form-control" value="{{$registro->incremento}}">
	    </div>
		<div class="form-group">
	         <button class="btb btn-primary" type="submit">Guardar</button>
	    </div>
        {!!Form::close()!!}
	</div>
</div>
@endsection