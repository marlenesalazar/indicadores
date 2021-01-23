@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Nuevo registro <a href="{{route('EvaluacionAcreditacion.form_015_3.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
		{!!Form::open(array('url'=>'EvaluacionAcreditacion/form_015_3','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
		<div class="form-group">
			<label for="año">AÑO</label>
			<input type="number" name="año" class="form-control" placeholder="2020..">
		</div>
		<div class="form-group">
			<label for="c_evaluacion">CARRERAS CON EVALUACION DOCENTE</label>
			<input type="number" name="c_evaluacion" class="form-control" >
		</div>
		<div class="form-group">
		    <label for="carreras">CARRERAS Y/O PROGRAMAS</label>
		    <input type="number" name="carreras" class="form-control">
	    </div>
	    <div class="form-group">
		    <label for="indicador">INDICADOR</label>
		    <input type="text" name="indicador" class="form-control">
	    </div>
	    <div class="form-group">
	         <button class="btb btn-primary" type="submit">Guardar</button>
	    </div>
        {!!Form::close()!!}
	</div>
</div>
@endsection