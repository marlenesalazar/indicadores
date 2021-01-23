@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('JefaturaDePersonal.form_001_1.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'JefaturaDePersonal/form_001_1','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}



<div class="row">
    <div class="panel panel-footer">
        <div class="panel-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>CATEGORIAS</label>
                    <select name="pid_ca" class="form-control selectpicker" id="pid_ca" data-live-search="true">
                        @foreach($categoria as $ca)
                        <option value="{{$ca->id_ca}}">{{$ca->nombre_c}}</option> <!--facultad-->
                        @endforeach
                    </select>
                </div>
            </div>
<br>            
<label>MUJERES</label>
<br>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="exc_m">EXC</label>
        <input type="number" name="pexc_m" id="pexc_m" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="tc_m">TC</label>
        <input type="number" name="ptc_m" id="ptc_m" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="th_m">TH</label>
        <input type="number" name="pth_m" id="pth_m" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="total_m">TOTAL</label>
        <input type="number" name="ptotal_m" id="ptotal_m" class="form-control" placeholder="total">
    </div>
</div>
<br>
 <label>HOMBRES</label>
 <br>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="exc_h">EXC</label>
        <input type="number" name="pexc_h" id="pexc_h" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="tc_h">TC</label>
        <input type="number" name="ptc_h" id="ptc_h" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="th_h">TH</label>
        <input type="number" name="pth_h" id="pth_h" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="total_h">TOTAL</label>
        <input type="number" name="ptotal_h" id="ptotal_h" class="form-control" placeholder="total">
    </div>
</div>
<br>
 <label>TOTAL</label>
 <br>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="exc_t">EXC</label>
        <input type="number" name="pexc_t" id="pexc_t" class="form-control" placeholder="total">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="tc_t">TC</label>
        <input type="number" name="ptc_t" id="ptc_t" class="form-control" placeholder="total">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="th_t">TH</label>
        <input type="number" name="pth_t" id="pth_t" class="form-control" placeholder="total">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="total_t">TOTAL</label>
        <input type="number" name="ptotal_t" id="ptotal_t" class="form-control" placeholder="total">
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
        <h4 align="center">PERSONAL DOCENTE POR CATEGORIA, DEDICACION SEGUN CARGA HORARIA Y SEXO</h4>
        <thead style="background-color: #A9D0F5">
            <tr>
               <th rowspan="3">OPCIONES</th>
               <th rowspan="3">CATEGORIAS</th>
               <th colspan="8">SEXO</th>
               <th rowspan="2" colspan="4">TOTAL</th>
               <th rowspan="3">GESTION</th>
            </tr>
            <tr>
                 <th colspan="4">MUJERES</th>
                 <th colspan="4">HOMBRES</th>
             </tr>
             <tr>
                     <th>EXC</th>
                     <th>TC</th>
                     <th>TH</th>
                     <th>TOTAL</th>
                     <th>EXC</th>
                     <th>TC</th>
                     <th>TH</th>
                     <th>TOTAL</th>
                     <th>EXC</th>
                     <th>TC</th>
                     <th>TH</th>
                     <th>TOTAL</th>
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
        id_ca=$("#pid_ca").val();
        nombre_c=$("#pid_ca option:selected").text();
        exc_m=$("#pexc_m").val();
        tc_m=$("#ptc_m").val();
        th_m=$("#pth_m").val();
        total_m=$("#ptotal_m").val();
        exc_h=$("#pexc_h").val();
        tc_h=$("#ptc_h").val();
        th_h=$("#pth_h").val();
        total_h=$("#ptotal_h").val();
        exc_t=$("#pexc_t").val();
        tc_t=$("#ptc_t").val();
        th_t=$("#pth_t").val();
        total_t=$("#ptotal_t").val();
        gestion=$("#pgestion").val();
        if (id_ca!="" && exc_m!="" && tc_m!="" && th_m!="" && total_m!="" && exc_h!="" && tc_h!="" && th_h!="" && total_h!="" && exc_t!="" && tc_t!="" && th_t!="" && total_t!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hidden" name="id_ca[]" value="'+id_ca+'">'+nombre_c+'</td><td><input type="number" name="exc_m[]" value="'+exc_m+'"></td><td><input type="number" name="tc_m[]" value="'+tc_m+'"></td><td><input type="number" name="th_m[]" value="'+th_m+'"></td><td><input type="number" name="total_m[]" value="'+total_m+'"></td><td><input type="number" name="exc_h[]" value="'+exc_h+'"></td><td><input type="number" name="tc_h[]" value="'+tc_h+'"></td><td><input type="number" name="th_h[]" value="'+th_h+'"></td><td><input type="number" name="total_h[]" value="'+total_h+'"></td><td><input type="number" name="exc_t[]" value="'+exc_t+'"></td><td><input type="number" name="tc_t[]" value="'+tc_t+'"></td><td><input type="number" name="th_t[]" value="'+th_t+'"></td><td><input type="number" name="total_t[]" value="'+total_t+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
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
        $("#pexc_m").val("");
        $("#ptc_m").val("");
        $("#pth_m").val("");
        $("#ptotal_m").val("");
        $("#pexc_h").val("");
        $("#ptc_h").val("");
        $("#pth_h").val("");
        $("#ptotal_h").val("");
        $("#pexc_t").val("");
        $("#ptc_t").val("");
        $("#pth_t").val("");
        $("#ptotal_t").val("");
    }

</script>
@endpush
@endsection