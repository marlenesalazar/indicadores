<table border="1" align="center">
	
				<thead>
					<tr>
						<th colspan="6">BECA ALIMENTACION POR GENERO SEGUN FACULTADES</th>
					</tr>
					<tr>
					 <!-- <th rowspan="2">ID</th>-->
		              <th rowspan="2">FACULTADES</th>
		              <th colspan="2">SEXO</th>
		              <th rowspan="2">TOTAL</th>
		              <th rowspan="2">PORCENTAJE</th>
		              <!--<th rowspan="2">GESTION</th>-->
		             
	                </tr>
	                <tr>
		             <th>HOMBRES</th>
		             <th>MUJERES</th>
	                </tr>
				</thead>
				@foreach($exports as $reg)
				<tr>
					<!--<td>{{$reg->idf4_2}}</td>-->
					<td>{{$reg->nombre_f}}</td>
					<td>{{$reg->hombres}}</td>
					<td>{{$reg->mujeres}}</td>
					<td>{{$reg->total}}</td>
					<td>{{$reg->porcentaje}}</td>
				</tr>
				<!--@include('BienestarUniversitario.form_004_2.modal')-->
				@endforeach
			</table>