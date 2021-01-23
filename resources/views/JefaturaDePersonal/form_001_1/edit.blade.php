@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Editar registro <a href="{{route('BienestarUniversitario.form_004_2.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div> 
		@endif
		
		
		{!!Form::model($registro,['method'=>'PATCH','route'=>['BienestarUniversitario.form_004_2.update',$registro->idf4_2]])!!}
        {{Form::token()}}
       <!-- ['method'=>'PATCH','route'=>['ImprentaUniversitaria.form_018_1.update',$form_018_1->id]]-->

<div class="row">
    <div class="panel panel-footer">
        <div class="panel-body">
        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label>FACULTADES</label>
                    <select name="pid_f" class="form-control selectpicker" value="{{$facultad,$registro->Facultade->pid_f}}"  data-live-search="true">
                        @foreach($facultad as $fac)
                        <option value="{{$fac->id_f}}">{{$fac->nombre_f}}</option> 
                        @endforeach
                    </select>
                </div>
            </div>
          
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">
                    <label for="hombres">HOMBRES</label>
                    <input type="number" name="phombres" class="form-control" value="{{$registro->phombres}}" placeholder="cantidad">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">
                    <label for="mujeres">MUJERES</label>
                    <input type="number" name="pmujeres" class="form-control" value="{{$registro->pmujeres}}" placeholder="cantidad">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">
                    <label for="total">TOTAL</label>
                    <input type="number" name="ptotal" class="form-control" value="{{$registro->ptotal}}" placeholder="total">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">
                    <label for="porcentaje">PORCENTAJE</label>
                    <input type="number" name="pporcentaje" class="form-control" value="{{$registro->pporcentaje}}" placeholder="porcentaje">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">
                    <label for="gestion">GESTION</label>
                    <input type="text" name="pgestion"  class="form-control" value="{{$registro->pgestion}}" placeholder="2/2019">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="guardar">
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Guardar</button>
                    
                </div>
            </div>

        </div>
    </div>
</div>
        {!!Form::close()!!}
	</div>
</div>
@endsection