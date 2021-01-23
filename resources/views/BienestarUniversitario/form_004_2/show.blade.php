@extends ('layout.Admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
			<label for="gestion"> Gestion</label>
			<p>{{$registro->gestion}}</p>
		</div>
	</div>
</div>
<div class="row">
	<div class="panel panel-primary">
		<div class="panel-body">
		  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	      <table id="detalle" class="table table-striped table-bordered table-condensed table-hover">
		       <h4 align="center">PROFECIONALES TITULADOS SEGUN FACULTADES</h4>
		       <thead style="background-color: #A9D0F5">
			   <tr>
		        <th rowspan="2">FACULTADES</th>
		        <th colspan="2">SEXO</th>
		        <th rowspan="2">TOTAL</th>
		        <th rowspan="2">%</th>
	           </tr>
	           <tr>
		        <th>HOMBRES</th>
		        <th>MUJERES</th>
	           </tr>
		       </thead>
		       <tfoot>
			    <th></th>
			    <th></th>
			    <th></th>
			    <th></th>
			    <th><h6 id="totales">{{$registro->totales}}</h6></th>
			    <!--<th><h6 id="totales">{{$registro->totales}}</h6>></th> -->
		       </tfoot>
		    <tbody>
			   @foreach($detalle as $det)
			   <tr>
			   	<th>{{$det->nombre_f}}</th> <!-- <th>{{$det->facultad}}</th> -->
			    <th>{{$det->hombres</th>
			    <th>{{$det->mujeres}}</th>
			    <th>{{$det->total}}</th>
			    <th>{{$det->porcentaje}}</th>
			   </tr>
			   @endforeach
		    </tbody>
	      </table>
          </div>
		</div>
		
	</div>
</div>
@endsection