@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('JefaturaDePersonal.form_001_6.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'JefaturaDePersonal/form_001_6','method'=>'POST','autocomplete'=>'off'))!!}
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
<label>AUXILIARES</label> 
<br>         
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_aux">M</label>
        <input type="number" name="pm_aux" id="pm_aux" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_aux">F</label>
        <input type="number" name="pf_aux" id="pf_aux" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_aux">ST</label>
        <input type="number" name="pst_aux" id="pst_aux" class="form-control" placeholder="cantidad">
    </div>
</div>
<br>
<label>INVESTIGADORES</label> 
<br>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_inv">M</label>
        <input type="number" name="pm_inv" id="pm_inv" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_inv">F</label>
        <input type="number" name="pf_inv" id="pf_inv" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_inv">ST</label>
        <input type="number" name="pst_inv" id="pst_inv" class="form-control" placeholder="cantidad">
    </div>
</div>
<br>
<label>TOTAL</label> 
<br>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_to">M</label>
        <input type="number" name="pm_to" id="pm_to" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_to">F</label>
        <input type="number" name="pf_to" id="pf_to" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="total_to">TOTAL</label>
        <input type="number" name="ptotal_to" id="ptotal_to" class="form-control" placeholder="cantidad">
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
               <th colspan="3">AUXILIARES</th>
               <th colspan="3">INVESTIGADORES</th>
               <th colspan="3">TOTAL</th>
               <th rowspan="2">PORCENTAJE</th>
               <th rowspan="2">GESTION</th>
            </tr>
            <tr>
                <th>M</th>
                <th>F</th>
                <th>ST</th>
                <th>M</th>
                <th>F</th>
                <th>ST</th>
                <th>M</th>
                <th>F</th>
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
        id_c=$("#pid_c").val();
        nombre_c=$("#pid_c option:selected").text();
        m_aux=$("#pm_aux").val();
        f_aux=$("#pf_aux").val();
        st_aux=$("#pst_aux").val();
        m_inv=$("#pm_inv").val();
        f_inv=$("#pf_inv").val();
        st_inv=$("#pst_inv").val();
        m_to=$("#pm_to").val();
        f_to=$("#pf_to").val();
        total_to=$("#ptotal_to").val();
        porcentaje=$("#pporcentaje").val();
        gestion=$("#pgestion").val();
        if (id_c!="" && m_aux!="" && f_aux!="" && st_aux!="" && m_inv!="" && f_inv!="" && st_inv!="" && m_to!="" && f_to!="" && total_to!="" && porcentaje!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hidden" name="id_c[]" value="'+id_c+'">'+nombre_c+'</td><td><input type="number" name="m_aux[]" value="'+m_aux+'"></td><td><input type="number" name="f_aux[]" value="'+f_aux+'"></td><td><input type="number" name="st_aux[]" value="'+st_aux+'"></td><td><input type="number" name="m_inv[]" value="'+m_inv+'"></td><td><input type="number" name="f_inv[]" value="'+f_inv+'"></td><td><input type="number" name="st_inv[]" value="'+st_inv+'"></td><td><input type="number" name="m_to[]" value="'+m_to+'"></td><td><input type="number" name="f_to[]" value="'+f_to+'"></td><td><input type="number" name="total_to[]" value="'+total_to+'"></td><td><input type="number" name="porcentaje[]" value="'+porcentaje+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
        
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
        $("#pm_aux").val("");
        $("#pf_aux").val("");
        $("#pst_aux").val("");
        $("#pm_inv").val("");
        $("#pf_inv").val("");
        $("#pst_inv").val("");
        $("#pm_to").val("");
        $("#pf_to").val("");
        $("#ptotal_to").val("");
        $("#pporcentaje").val("");
    }
    

</script>
@endpush
@endsection