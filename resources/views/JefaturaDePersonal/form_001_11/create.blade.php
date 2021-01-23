@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('JefaturaDePersonal.form_001_11.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'JefaturaDePersonal/form_001_11','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}



<div class="row">
    <div class="panel panel-footer">
        <div class="panel-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>PROFESION</label>
                    <select name="pid_p" class="form-control selectpicker" id="pid_p" data-live-search="true">
                        @foreach($profecion as $p)
                        <option value="{{$p->id_p}}">{{$p->nombre_p}}</option> 
                        @endforeach
                    </select>
                </div>
            </div>
<br>
<label>PERMANENTES</label> 
<br>         
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_p">M</label>
        <input type="number" name="pm_p" id="pm_p" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_p">F</label>
        <input type="number" name="pf_p" id="pf_p" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_p">ST</label>
        <input type="number" name="pst_p" id="pst_p" class="form-control" placeholder="cantidad">
    </div>
</div>
<br>
<label>EVENTUALES</label> 
<br>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_e">M</label>
        <input type="number" name="pm_e" id="pm_e" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_e">F</label>
        <input type="number" name="pf_e" id="pf_e" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_e">ST</label>
        <input type="number" name="pst_e" id="pst_e" class="form-control" placeholder="cantidad">
    </div>
</div>
<br>
<label>JORNALEROS</label> 
<br>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_j">M</label>
        <input type="number" name="pm_j" id="pm_j" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_j">F</label>
        <input type="number" name="pf_j" id="pf_j" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_j">ST</label>
        <input type="number" name="pst_j" id="pst_j" class="form-control" placeholder="cantidad">
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
        <h4 align="center">PERSONAL ADMINISTRATIVO SEGUN FORMACION ALCANSADA Y TIPO DE CONTRATO</h4>
        <thead style="background-color: #A9D0F5">
            <tr>
               <th rowspan="2">OPCIONES</th>
               <th rowspan="2">PROFESION</th>
               <th colspan="3">PERMANENTES</th>
               <th colspan="3">EVENTUALES</th>
               <th colspan="3">JORNALEROS</th>
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
        id_p=$("#pid_p").val();
        nombre_p=$("#pid_p option:selected").text();
        m_p=$("#pm_p").val();
        f_p=$("#pf_p").val();
        st_p=$("#pst_p").val();
        m_e=$("#pm_e").val();
        f_e=$("#pf_e").val();
        st_e=$("#pst_e").val();
        m_j=$("#pm_j").val();
        f_j=$("#pf_j").val();
        st_j=$("#pst_j").val();
        total=$("#ptotal").val();
        porcentaje=$("#pporcentaje").val();
        gestion=$("#pgestion").val();
        if (id_p!="" && m_p!="" && f_p!="" && st_p!="" && m_e!="" && f_e!="" && st_e!="" && m_j!="" && f_j!="" && st_j!="" && total!="" && porcentaje!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hidden" name="id_p[]" value="'+id_p+'">'+nombre_p+'</td><td><input type="number" name="m_p[]" value="'+m_p+'"></td><td><input type="number" name="f_p[]" value="'+f_p+'"></td><td><input type="number" name="st_p[]" value="'+st_p+'"></td><td><input type="number" name="m_e[]" value="'+m_e+'"></td><td><input type="number" name="f_e[]" value="'+f_e+'"></td><td><input type="number" name="st_e[]" value="'+st_e+'"></td><td><input type="number" name="m_j[]" value="'+m_j+'"></td><td><input type="number" name="f_j[]" value="'+f_j+'"></td><td><input type="number" name="st_j[]" value="'+st_j+'"></td><td><input type="number" name="total[]" value="'+total+'"></td><td><input type="number" name="porcentaje[]" value="'+porcentaje+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
        
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
        $("#pm_p").val("");
        $("#pf_p").val("");
        $("#pst_p").val("");
        $("#pm_e").val("");
        $("#pf_e").val("");
        $("#pst_e").val("");
        $("#pm_j").val("");
        $("#pf_j").val("");
        $("#pst_j").val("");
        $("#ptotal").val("");
        $("#pporcentaje").val("");
    }
    

</script>
@endpush
@endsection