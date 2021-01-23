@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('JefaturaDePersonal.form_001_13.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'JefaturaDePersonal/form_001_13','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}


<!--class="form-control selectpicker" id="pcontrato" data-live-search="true"-->
<div class="row">
    <div class="panel panel-footer">
        <div class="panel-body">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label>ACTIVIDAD</label>
                    <select name="pactividad" class="form-control selectpicker" id="pactividad" data-live-search="true">
                        <option value="ACTIVIDAD CENTRAL">ACTIVIDAD CENTRAL</option>
                        <option value="DIRECCION ADM. Y FINANCIERA">DIRECCION ADM. Y FINANCIERA</option>
                        <option value="ACTIVIDAD COMUN">ACTIVIDAD COMUN</option>
                        <option value="ACTIVIDAD ESPECIFICA">ACTIVIDAD ESPECIFICA</option>
                    </select>
                </div>
            </div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="msc">MSC</label>
        <input type="number" name="pmsc" id="pmsc" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="esp">ESP</label>
        <input type="number" name="pesp" id="pesp" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="dip">DIP</label>
        <input type="number" name="pdip" id="pdip" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="lic">LIC</label>
        <input type="number" name="plic" id="plic" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="egr">EGR</label>
        <input type="number" name="pegr" id="pegr" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="ts">TS</label>
        <input type="number" name="pts" id="pts" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="prof">PROF</label>
        <input type="prof" name="pprof" id="pprof" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="tm">TM</label>
        <input type="number" name="ptm" id="ptm" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="es">ESTUDIANTE</label>
        <input type="number" name="pes" id="pes" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="emp">EMP. PUBLICO</label>
        <input type="number" name="pemp" id="pemp" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="obr">OBRERO</label>
        <input type="number" name="pobr" id="pobr" class="form-control" placeholder="cantidad">
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
        <h4 align="center">PERSONAL ADMINISTRATIVO SEGUN NIVEL ACADEMICO Y ACTIVIDAD QUE REALIZAN</h4>
        <thead style="background-color: #A9D0F5">
            <tr>
               <th rowspan="3">OPCIONES</th>
               <th rowspan="2">ACTIVIDAD</th>
               <th colspan="11">NIVEL ACADEMICO</th>
               <th rowspan="2">TOTAL</th>
               <th rowspan="2">GESTIONL</th>
            </tr>
            <tr>
                <th>MSC.</th>
                <th>ESP.</th>
                <th>DIP.</th>
                <th>LIC.</th>
                <th>EGR.</th>
                <th>TS.</th>
                <th>PROF.</th>
                <th>TM.</th>
                <th>ESTUDIANTE</th>
                <th>EMP. PUBLICO</th>
                <th>OBRERO</th>            
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
        actividad=$("#pactividad").val();
        msc=$("#pmsc").val();
        esp=$("#pesp").val();
        dip=$("#pdip").val();
        lic=$("#plic").val();
        egr=$("#pegr").val();
        ts=$("#pts").val();
        prof=$("#pprof").val();
        tm=$("#ptm").val();
        es=$("#pes").val();
        emp=$("#pemp").val();
        obr=$("#pobr").val();
        total=$("#ptotal").val();
        gestion=$("#pgestion").val();
        if (actividad!="" && msc!="" && esp!="" && dip!="" && lic!="" && egr!="" && ts!="" && prof!="" && tm!="" && es!="" && emp!="" && obr!="" && total!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hiden" name="actividad[]" value="'+actividad+'"></td><td><input type="number" name="msc[]" value="'+msc+'"></td><td><input type="number" name="esp[]" value="'+esp+'"></td><td><input type="number" name="dip[]" value="'+dip+'"></td><td><input type="number" name="lic[]" value="'+lic+'"></td><td><input type="number" name="egr[]" value="'+egr+'"></td><td><input type="number" name="ts[]" value="'+ts+'"></td><td><input type="number" name="prof[]" value="'+prof+'"></td><td><input type="number" name="tm[]" value="'+tm+'"></td><td><input type="number" name="es[]" value="'+es+'"></td><td><input type="number" name="emp[]" value="'+emp+'"></td><td><input type="number" name="obr[]" value="'+obr+'"></td><td><input type="number" name="total[]" value="'+total+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
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
        $("#pmsc").val("");
        $("#pesp").val("");
        $("#pdip").val("");
        $("#plic").val("");
        $("#pegr").val("");
        $("#pts").val("");
        $("#pprof").val("");
        $("#ptm").val("");
        $("#pes").val("");
        $("#pemp").val("");
        $("#pobr").val("");
        $("#ptotal").val("");
    }

</script>
@endpush
@endsection