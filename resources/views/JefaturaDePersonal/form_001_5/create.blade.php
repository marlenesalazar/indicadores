@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('JefaturaDePersonal.form_001_5.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'JefaturaDePersonal/form_001_5','method'=>'POST','autocomplete'=>'off'))!!}
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
<label>DOCTOR</label> 
<br>         
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_doc">M</label>
        <input type="number" name="pm_doc" id="pm_doc" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_doc">F</label>
        <input type="number" name="pf_doc" id="pf_doc" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_doc">ST</label>
        <input type="number" name="pst_doc" id="pst_doc" class="form-control" placeholder="cantidad">
    </div>
</div>
<br>
<label>MASTER</label> 
<br>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_mas">M</label>
        <input type="number" name="pm_mas" id="pm_mas" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_mas">F</label>
        <input type="number" name="pf_mas" id="pf_mas" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_mas">ST</label>
        <input type="number" name="pst_mas" id="pst_mas" class="form-control" placeholder="cantidad">
    </div>
</div>
<br>
<label>ESPEC.</label> 
<br>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_es">M</label>
        <input type="number" name="pm_es" id="pm_es" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_es">F</label>
        <input type="number" name="pf_es" id="pf_es" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_es">ST</label>
        <input type="number" name="pst_es" id="pst_es" class="form-control" placeholder="cantidad">
    </div>
</div>
<br>
<label>DIP.</label> 
<br>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_dip">M</label>
        <input type="number" name="pm_dip" id="pm_dip" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_dip">F</label>
        <input type="number" name="pf_dip" id="pf_dip" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_dip">ST</label>
        <input type="number" name="pst_dip" id="pst_dip" class="form-control" placeholder="cantidad">
    </div>
</div>
<br>
<label>LIC.</label> 
<br>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_lic">M</label>
        <input type="number" name="pm_lic" id="pm_lic" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_lic">F</label>
        <input type="number" name="pf_lic" id="pf_lic" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_lic">ST</label>
        <input type="number" name="pst_lic" id="pst_lic" class="form-control" placeholder="cantidad">
    </div>
</div>
<br>
<label>TEC. SUP.</label> 
<br>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_tec">M</label>
        <input type="number" name="pm_tec" id="pm_tec" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_tec">F</label>
        <input type="number" name="pf_tec" id="pf_tec" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_tec">ST</label>
        <input type="number" name="pst_tec" id="pst_tec" class="form-control" placeholder="cantidad">
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
               <th colspan="3">DOCTOR</th>
               <th colspan="3">MASTER</th>
               <th colspan="3">ESPC.</th>
               <th colspan="3">DIP.</th>
               <th colspan="3">LIC.</th>
               <th colspan="3">TEC. SUP.</th>
               <th rowspan="2">TOTAL</th>
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
                <th>ST</th>
                <th>M</th>
                <th>F</th>
                <th>ST</th>
                <th>M</th>
                <th>F</th>
                <th>ST</th>
                <th>M</th>
                <th>F</th>
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
        m_doc=$("#pm_doc").val();
        f_doc=$("#pf_doc").val();
        st_doc=$("#pst_doc").val();
        m_mas=$("#pm_mas").val();
        f_mas=$("#pf_mas").val();
        st_mas=$("#pst_mas").val();
        m_es=$("#pm_es").val();
        f_es=$("#pf_es").val();
        st_es=$("#pst_es").val();
        m_dip=$("#pm_dip").val();
        f_dip=$("#pf_dip").val();
        st_dip=$("#pst_dip").val();
        m_lic=$("#pm_lic").val();
        f_lic=$("#pf_lic").val();
        st_lic=$("#pst_lic").val();
        m_tec=$("#pm_tec").val();
        f_tec=$("#pf_tec").val();
        st_tec=$("#pst_tec").val();
        total=$("#ptotal").val();
        porcentaje=$("#pporcentaje").val();
        gestion=$("#pgestion").val();
        if (id_c!="" && m_doc!="" && f_doc!="" && st_doc!="" && m_mas!="" && f_mas!="" && st_mas!="" && m_es!="" && f_es!="" && st_es!="" && m_dip!="" && f_dip!="" && st_dip!="" && m_lic!="" && f_lic!="" && st_lic!="" && m_tec!="" && f_tec!="" && st_tec!="" && total!="" && porcentaje!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hidden" name="id_c[]" value="'+id_c+'">'+nombre_c+'</td><td><input type="number" name="m_doc[]" value="'+m_doc+'"></td><td><input type="number" name="f_doc[]" value="'+f_doc+'"></td><td><input type="number" name="st_doc[]" value="'+st_doc+'"></td><td><input type="number" name="m_mas[]" value="'+m_mas+'"></td><td><input type="number" name="f_mas[]" value="'+f_mas+'"></td><td><input type="number" name="st_mas[]" value="'+st_mas+'"></td><td><input type="number" name="m_es[]" value="'+m_es+'"></td><td><input type="number" name="f_es[]" value="'+f_es+'"></td><td><input type="number" name="st_es[]" value="'+st_es+'"></td><td><input type="number" name="m_dip[]" value="'+m_dip+'"></td><td><input type="number" name="f_dip[]" value="'+f_dip+'"></td><td><input type="number" name="st_dip[]" value="'+st_dip+'"></td><td><input type="number" name="m_lic[]" value="'+m_lic+'"></td><td><input type="number" name="f_lic[]" value="'+f_lic+'"></td><td><input type="number" name="st_lic[]" value="'+st_lic+'"></td><td><input type="number" name="m_tec[]" value="'+m_tec+'"></td><td><input type="number" name="f_tec[]" value="'+f_tec+'"></td><td><input type="number" name="st_tec[]" value="'+st_tec+'"></td><td><input type="number" name="total[]" value="'+total+'"></td><td><input type="number" name="porcentaje[]" value="'+porcentaje+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
        
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
        $("#pm_doc").val("");
        $("#pf_doc").val("");
        $("#pst_doc").val("");
        $("#pm_mas").val("");
        $("#pf_mas").val("");
        $("#pst_mas").val("");
        $("#pm_es").val("");
        $("#pf_es").val("");
        $("#pst_es").val("");
        $("#pm_dip").val("");
        $("#pf_dip").val("");
        $("#pst_dip").val("");
        $("#pm_lic").val("");
        $("#pf_lic").val("");
        $("#pst_lic").val("");
        $("#pm_tec").val("");
        $("#pf_tec").val("");
        $("#pst_tec").val("");
        $("#ptotal").val("");
        $("#pporcentaje").val("");
    }
    

</script>
@endpush
@endsection