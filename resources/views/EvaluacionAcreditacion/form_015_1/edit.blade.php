@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Editar registro: {{$registro->año}} <a href="{{Route('EvaluacionAcreditacion.form_015_1.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div> 
		@endif
		{!!Form::model($registro,['method'=>'PATCH','route'=>['EvaluacionAcreditacion.form_015_1.update',$registro->idf15_1]])!!}
        {{Form::token()}}

		<div class="form-group">
			<label for="año">AÑO</label>
			<input type="number" name="año" class="form-control" value="{{$registro->año}}"placeholder="2020..">
		</div>
		<div class="form-group">
			<label for="c_acreditadas">CARRERAS ACREDITADAS</label>
			<input type="number" name="c_acreditadas" class="form-control" value="{{$registro->c_acreditadas}}">		
		</div>
		<div class="form-group">
		    <label for="carreras">CARRERAS Y/O PROGRAMAS</label>
		    <input type="number" name="carreras" class="form-control" value="{{$registro->carreras}}">
	    </div>
	    <div class="form-group">
		    <label for="indicador">INDICADOR</label>
		    <input type="text" name="indicador" class="form-control" value="{{$registro->indicador}}">
	    </div>
		<div class="form-group">
	         <button class="btb btn-primary" type="submit">Guardar</button>
	    </div>
        {!!Form::close()!!}
	</div>
</div>
@endsection