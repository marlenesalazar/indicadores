@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Editar registro: {{$registro->año}} <a href="{{Route('DAF.form_010_7.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div> 
		@endif
		
		
		{!!Form::model($registro,['method'=>'PATCH','route'=>['DAF.form_010_7.update',$registro->idf10_7]])!!}
        {{Form::token()}}

		<div class="form-group">
			<label for="año">AÑO</label>
			<input type="number" name="año" class="form-control" value="{{$registro->año}}"placeholder="2020..">
		</div>
		<div class="form-group">
			<label for="e_oficina">EQUIPO DE OFICINA Y MUEBLES</label>
			<input type="text" name="e_oficina" class="form-control" value="{{$registro->e_oficina}}">
		</div>
		<div class="form-group">
		    <label for="p_ejecutado">PREESUPUESTO EJECUTADO</label>
		    <input type="text" name="p_ejecutado" class="form-control" value="{{$registro->p_ejecutado}}">
	    </div>
	    <div class="form-group">
		    <label for="indicador">INDICADOR</label>
		    <input type="text" name="indicador" class="form-control" value="{{$registro->indicador}}">
	    </div>
	    <div class="form-group">
			<label for="gestion">GESTION</label>
			<input type="text" name="gestion" class="form-control" value="{{$registro->gestion}}" placeholder="2/2020..">
		</div>
		<div class="form-group">
	         <button class="btb btn-primary" type="submit">Guardar</button>
	    </div>
        {!!Form::close()!!}
	</div>
</div>
@endsection