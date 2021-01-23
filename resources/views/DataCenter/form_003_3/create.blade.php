@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('DataCenter.form_003_3.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'DataCenter/form_003_3','method'=>'POST','autocomplete'=>'off'))!!}
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
        <label for="beni">BENI</label>
        <input type="number" name="pbeni" id="pbeni" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="pando">PANDO</label>
        <input type="number" name="ppando" id="ppando" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="chuq">CHUQUISACA</label>
        <input type="number" name="pchuq" id="pchuq" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="cbba">COCHABAMBA</label>
        <input type="number" name="pcbba" id="pcbba" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="lapaz">LA PAZ</label>
        <input type="number" name="plapaz" id="plapaz" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="oruro">ORURO</label>
        <input type="number" name="poruro" id="poruro" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="stacruz">SANTA CRUZ</label>
        <input type="number" name="pstacruz" id="pstacruz" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="potosi">POTOSI</label>
        <input type="number" name="ppotosi" id="ppotosi" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="tarija">TARIJA</label>
        <input type="number" name="ptarija" id="ptarija" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="exterior">EXTERIOR</label>
        <input type="number" name="pexterior" id="pexterior" class="form-control" placeholder="cantidad">
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
        <h4 align="center">MATRICULA CURSOS PREUNIVERSITARIO POR CARRERAS, SEGÚN LUGAR DEPARTAMENTAL DE NACIMIENTO</h4>
        <thead style="background-color: #A9D0F5">
            <tr>
               <th rowspan="2">OPCIONES</th>
               <th rowspan="2">CARRERAS</th>
               <th colspan="9">DEPARTAMENTO</th>
               <th rowspan="2">EXTERIOR</th>
               <th rowspan="2">TOTAL</th>
               <th rowspan="2">GESTION</th>
            </tr>
            <tr>
                <th>BENI</th>
                <th>PANDO</th>
                <th>CHUQ</th>
                <th>CBBA</th>
                <th>LA PAZ</th>
                <th>ORURO</th>
                <th>STA. CRUZ</th>
                <th>POTOSI</th>
                <th>TARIJA</th>
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
        beni=$("#pbeni").val();
        pando=$("#ppando").val();
        chuq=$("#pchuq").val();
        cbba=$("#pcbba").val();
        lapaz=$("#plapaz").val();
        oruro=$("#poruro").val();
        stacruz=$("#pstacruz").val();
        potosi=$("#ppotosi").val();
        tarija=$("#ptarija").val();
        exterior=$("#pexterior").val();
        total=$("#ptotal").val();
        gestion=$("#pgestion").val();
        if (id_c!="" && beni!="" && pando!="" && chuq!="" && cbba!="" && lapaz!="" && oruro!="" && stacruz!="" && potosi!="" && tarija!="" && exterior!="" && total!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hidden" name="id_c[]" value="'+id_c+'">'+nombre_c+'</td><td><input type="number" name="beni[]" value="'+beni+'"></td><td><input type="number" name="pando[]" value="'+pando+'"></td><td><input type="number" name="chuq[]" value="'+chuq+'"></td><td><input type="number" name="cbba[]" value="'+cbba+'"></td><td><input type="number" name="lapaz[]" value="'+lapaz+'"></td><td><input type="number" name="oruro[]" value="'+oruro+'"></td><td><input type="number" name="stacruz[]" value="'+stacruz+'"></td><td><input type="number" name="potosi[]" value="'+potosi+'"></td><td><input type="number" name="tarija[]" value="'+tarija+'"></td><td><input type="number" name="exterior[]" value="'+exterior+'"></td><td><input type="number" name="total[]" value="'+total+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
        
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
        $("#pbeni").val("");
        $("#ppando").val("");
        $("#pchuq").val("");
        $("#pcbba").val("");
        $("#plapaz").val("");
        $("#poruro").val("");
        $("#pstacruz").val("");
        $("#ppotosi").val("");
        $("#ptarija").val("");
        $("#pexterior").val("");
        $("#ptotal").val("");
        
    }
    

</script>
@endpush
@endsection