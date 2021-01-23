@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('JefaturaDePersonal.form_001_4.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'JefaturaDePersonal/form_001_4','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}



<div class="row">
    <div class="panel panel-footer">
        <div class="panel-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>CARRERAS</label>
                    <select name="pid_c" class="form-control selectpicker" id="pid_c" data-live-search="true">
                        @foreach($carrera as $c)
                        <option value="{{$c->id_c}}">{{$c->nombre_c}}</option> 
                        @endforeach
                    </select>
                </div>
            </div>
<br>
<label>CATEDRATICO</label> 
<br>         
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="tc_c">TC</label>
        <input type="number" name="ptc_c" id="ptc_c" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="th_c">TH</label>
        <input type="number" name="pth_c" id="pth_c" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_c">ST</label>
        <input type="number" name="pst_c" id="pst_c" class="form-control" placeholder="cantidad">
    </div>
</div>
<br>
<label>ADJUNTO</label> 
<br>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="tc_a">TC</label>
        <input type="number" name="ptc_a" id="ptc_a" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="th_a">TH</label>
        <input type="number" name="pth_a" id="pth_a" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_a">ST</label>
        <input type="number" name="pst_a" id="pst_a" class="form-control" placeholder="cantidad">
    </div>
</div>
<br>
<label>ASISTENTE</label> 
<br>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="tc_as">TC</label>
        <input type="number" name="ptc_as" id="ptc_as" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="th_as">TH</label>
        <input type="number" name="pth_as" id="pth_as" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_as">ST</label>
        <input type="number" name="pst_as" id="pst_as" class="form-control" placeholder="cantidad">
    </div>
</div>
<br>
<label>ASISTENTE A.I.</label> 
<br>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="tc_asi">TC</label>
        <input type="number" name="ptc_asi" id="ptc_asi" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="th_asi">TH</label>
        <input type="number" name="pth_asi" id="pth_asi" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_asi">ST</label>
        <input type="number" name="pst_asi" id="pst_asi" class="form-control" placeholder="cantidad">
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
        <h4 align="center">PERSONAL DOCENTE POR CATEGORIA Y DEDICACION, SEGUN CARRERAS</h4>
        <thead style="background-color: #A9D0F5">
            <tr>
               <th rowspan="2">OPCIONES</th>
               <th rowspan="2">CARRERAS</th>
               <th colspan="3">CATEDRATICO</th>
               <th colspan="3">ADJUNTO</th>
               <th colspan="3">ASISTENTE</th>
               <th colspan="3">ASISTENTE A.I.</th>
               <th rowspan="2">TOTAL</th>
               <th rowspan="2">PORCENTAJE</th>
               <th rowspan="2">GESTION</th>
            </tr>
            <tr>
                <th>TC</th>
                <th>TH</th>
                <th>ST</th>
                <th>TC</th>
                <th>TH</th>
                <th>ST</th>
                <th>TC</th>
                <th>TH</th>
                <th>ST</th>
                <th>TC</th>
                <th>TH</th>
                <th>ST</th>
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
        tc_c=$("#ptc_c").val();
        th_c=$("#pth_c").val();
        st_c=$("#pst_c").val();
        tc_a=$("#ptc_a").val();
        th_a=$("#pth_a").val();
        st_a=$("#pst_a").val();
        tc_as=$("#ptc_as").val();
        th_as=$("#pth_as").val();
        st_as=$("#pst_as").val();
        tc_asi=$("#ptc_asi").val();
        th_asi=$("#pth_asi").val();
        st_asi=$("#pst_asi").val();
        total=$("#ptotal").val();
        porcentaje=$("#pporcentaje").val();
        gestion=$("#pgestion").val();
        if (id_c!="" && tc_c!="" && th_c!="" && st_c!="" && tc_a!="" && th_a!="" && st_a!="" && tc_as!="" && th_as!="" && st_as!="" && tc_asi!="" && th_asi!="" && st_asi!="" && total!="" && porcentaje!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hidden" name="id_c[]" value="'+id_c+'">'+nombre_c+'</td><td><input type="number" name="tc_c[]" value="'+tc_c+'"></td><td><input type="number" name="th_c[]" value="'+th_c+'"></td><td><input type="number" name="st_c[]" value="'+st_c+'"></td><td><input type="number" name="tc_a[]" value="'+tc_a+'"></td><td><input type="number" name="th_a[]" value="'+th_a+'"></td><td><input type="number" name="st_a[]" value="'+st_a+'"></td><td><input type="number" name="tc_as[]" value="'+tc_as+'"></td><td><input type="number" name="th_as[]" value="'+th_as+'"></td><td><input type="number" name="st_as[]" value="'+st_as+'"></td><td><input type="number" name="tc_asi[]" value="'+tc_asi+'"></td><td><input type="number" name="th_asi[]" value="'+th_asi+'"></td><td><input type="number" name="st_asi[]" value="'+st_asi+'"></td><td><input type="number" name="total[]" value="'+total+'"></td><td><input type="number" name="porcentaje[]" value="'+porcentaje+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
        
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
        $("#ptc_c").val("");
        $("#pth_c").val("");
        $("#pst_c").val("");
        $("#ptc_a").val("");
        $("#pth_a").val("");
        $("#pst_a").val("");
        $("#ptc_as").val("");
        $("#pth_as").val("");
        $("#pst_as").val("");
        $("#ptc_asi").val("");
        $("#pth_asi").val("");
        $("#pst_asi").val("");
        $("#ptotal").val("");
        $("#pporcentaje").val("");
    }
    

</script>
@endpush
@endsection