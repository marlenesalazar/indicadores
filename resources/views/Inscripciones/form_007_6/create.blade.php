@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('Inscripciones.form_007_6.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'Inscripciones/form_007_6','method'=>'POST','autocomplete'=>'off'))!!}
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
        <label for="artes">FAC. ARTES</label>
        <input type="number" name="partes" id="partes" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="agronomia">FAC. AGRONOMIA</label>
        <input type="number" name="pagronomia" id="pagronomia" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="cc_ee">FAC. CC.EE.FF. Y AA.</label>
        <input type="number" name="pcc_ee" id="pcc_ee" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="c_puras">FAC. CIENCIAS PURAS</label>
        <input type="number" name="pc_puras" id="pc_puras" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="cc_ss">FAC. DE CC.SS. Y HH.</label>
        <input type="number" name="pcc_ss" id="pcc_ss" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="derecho">FAC. DERECHO</label>
        <input type="number" name="pderecho" id="pderecho" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="ingenieria">FAC. INGENIERIA</label>
        <input type="number" name="pingenieria" id="pingenieria" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="geologica">FAC. ING. GEOLOGICA</label>
        <input type="number" name="pgeologica" id="pgeologica" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="minera">FAC. ING. MINERA</label>
        <input type="number" name="pminera" id="pminera" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="tecnologica">FAC. TECNOLOGICA</label>
        <input type="number" name="ptecnologica" id="ptecnologica" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="salud">FAC. CC. DE LA SALUD</label>
        <input type="number" name="psalud" id="psalud" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="medicina">FAC. DE MEDICINA</label>
        <input type="number" name="pmedicina" id="pmedicina" class="form-control" placeholder="cantidad">
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
        <h4 align="center">CARRERAS PARALELAS POR SEXO SEGUN CARRERAS</h4>
        <thead style="background-color: #A9D0F5">
            <tr>
               <th rowspan="2">OPCIONES</th>
               <th rowspan="2">CARRERAS</th>
               <th colspan="12">CARRERA PARALELA</th>
               <th rowspan="2">GESTION</th>
            </tr>
            <tr>
                <th>ARTES</th>
                <th>FAC. AGRONOMIA</th>
                <th>FAC. CC.EE.FF. Y AA.</th>
                <th>FAC. CIENCIAS PURAS</th>
                <th>FAC. DE CC.SS. Y HH.</th>
                <th>FAC. DERECHO</th>
                <th>FAC. INGENIERIA</th>
                <th>FAC. ING. GEOLOGICA</th>
                <th>FAC. ING. MINERA</th> 
                <th>FAC. TECNOLOGICA</th>
                <th>FAC. CC. DE LA SALUD</th>
                    <th>FAC. DE MEDICINA</th>
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
        artes=$("#partes").val();
        agronomia=$("#pagronomia").val();
        cc_ee=$("#pcc_ee").val();
        c_puras=$("#pc_puras").val();
        cc_ss=$("#pcc_ss").val();
        derecho=$("#pderecho").val();
        ingenieria=$("#pingenieria").val();
        geologica=$("#pgeologica").val();
        minera=$("#pminera").val();
        tecnologica=$("#ptecnologica").val();
        salud=$("#psalud").val();
        medicina=$("#pmedicina").val();
        gestion=$("#pgestion").val();
        if (id_c!="" && artes!="" && agronomia!="" && cc_ee!="" && c_puras!="" && cc_ss!="" && derecho!="" && ingenieria!="" && geologica!="" && minera!="" && tecnologica!="" && salud!="" && medicina!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hidden" name="id_c[]" value="'+id_c+'">'+nombre_c+'</td><td><input type="number" name="artes[]" value="'+artes+'"></td><td><input type="number" name="agronomia[]" value="'+agronomia+'"></td><td><input type="number" name="cc_ee[]" value="'+cc_ee+'"></td><td><input type="number" name="c_puras[]" value="'+c_puras+'"></td><td><input type="number" name="cc_ss[]" value="'+cc_ss+'"></td><td><input type="number" name="derecho[]" value="'+derecho+'"></td><td><input type="number" name="ingenieria[]" value="'+ingenieria+'"></td><td><input type="number" name="geologica[]" value="'+geologica+'"></td><td><input type="number" name="minera[]" value="'+minera+'"></td><td><input type="number" name="tecnologica[]" value="'+tecnologica+'"></td><td><input type="number" name="salud[]" value="'+salud+'"></td><td><input type="number" name="medicina[]" value="'+medicina+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
        
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
        $("#partes").val("");
        $("#pagronomia").val("");
        $("#pcc_ee").val("");
        $("#pc_puras").val("");
        $("#pcc_ss").val("");
        $("#pderecho").val("");
        $("#pingenieria").val("");
        $("#pgeologica").val("");
        $("#pminera").val("");
        $("#ptecnologica").val("");
        $("#psalud").val("");
        $("#pmedicina").val("");
    }
    

</script>
@endpush
@endsection