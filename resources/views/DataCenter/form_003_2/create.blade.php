@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('DataCenter.form_003_2.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
    </div>
</div>
{!!Form::open(array('url'=>'DataCenter/form_003_2','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
<div class="row">
    <div class="panel panel-footer">
        <div class="panel-body">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label>CARRERAS</label>
                    <select name="pid_c" class="form-control selectpicker" id="pid_c" data-live-search="true">
                        @foreach($carrera as $c)
                        <option value="{{$c->id_c}}">{{$c->nombre_c}}</option> 
                        @endforeach
                    </select>
                </div>
            </div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="mujeres">MUJERES</label>
        <input type="number" name="pmujeres" id="pmujeres" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="hombres">HOMBRES</label>
        <input type="number" name="phombres" id="phombres" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="total">TOTAL</label>
        <input type="number" name="ptotal" id="ptotal" class="form-control" placeholder="total">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="porcentaje">PORCENTAJE</label>
        <input type="number" name="pporcentaje" id="pporcentaje" class="form-control" placeholder="porcentaje">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="gestion">GESTION</label>
        <input type="text" name="pgestion" id="pgestion" class="form-control" placeholder="2/2019">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
    <table id="detalle" class="table table-striped table-bordered table-condensed table-hover text-center">
        <h4 align="center">MATRICULA CURSOS PREUNIVERSITARIOS POR SEXO, SEGÚN CARRERAS</h4>
        <thead style="background-color: #A9D0F5">
            <tr>
               <th rowspan="2">OPCIONES</th>
               <th rowspan="2">CARRERAS</th>
               <th colspan="2">SEXO</th>
               <th rowspan="2">TOTAL</th>
               <th rowspan="2">PORCENTAJE</th>
               <th rowspan="2">GESTION</th>
            </tr>
            <tr>
               <th>MUJERES</th>
               <th>HOMBRES</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="guardar">
    <div class="form-group">
        <button class="btn btn-success" type="submit">Guardar</button>

    </div>
</div>
</div>
 {!!Form::close()!!}
@push ('scripts')
<script >
    $(document).ready(function (){
        $('#bt_add').click(function(){
            agregar();
        });
    });
    var cont=0;
   
    $("#guardar").show();
    

    function agregar(){
        id_c=$("#pid_c").val();
        nombre_c=$("#pid_c option:selected").text();
        mujeres=$("#pmujeres").val();
        hombres=$("#phombres").val();
        total=$("#ptotal").val();
        porcentaje=$("#pporcentaje").val();
        gestion=$("#pgestion").val();
        if (id_c!="" && mujeres!="" && hombres!="" && total!="" && porcentaje!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hidden" name="id_c[]" value="'+id_c+'">'+nombre_c+'</td><td><input type="number" name="mujeres[]" value="'+mujeres+'"></td><td><input type="number" name="hombres[]" value="'+hombres+'"></td><td><input type="number" name="total[]" value="'+total+'"></td><td><input type="number" name="porcentaje[]" value="'+porcentaje+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
        
         cont++;
         limpiar();
         $('#detalle').append(fila); 
        }
        else{
        alert("error al ingresar el detalle del registro, revise los datos");
        }
        $('body').on('click','.remove',function(){
            $(this).parent().parent().remove();
            });
    }
    function limpiar(){
        $("#pmujeres").val("");
        $("#phombres").val("");
        $("#ptotal").val("");
        $("#pporcentaje").val("");
    }
    

</script>
@endpush
@endsection