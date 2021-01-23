@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('titulos.form_002_2.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'titulos/form_002_2','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}

<div class="row">
    <div class="panel panel-footer">
        <div class="panel-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>FACULTADES</label>
                    <select name="pid_f" class="form-control selectpicker" id="pid_f" data-live-search="true">
                        @foreach($facultad as $fa)
                        <option value="{{$fa->id_f}}">{{$fa->nombre_f}}</option> 
                        @endforeach
                    </select>
                </div>
            </div>
<br>
<label>LICENCIATURA</label>
<br>            
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_l">M</label>
        <input type="number" name="pm_l" id="pm_l" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_l">F</label>
        <input type="number" name="pf_l" id="pf_l" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_l">ST</label>
        <input type="number" name="pst_l" id="pst_l" class="form-control" placeholder="cantidad">
    </div>
</div>
<br>
<label>TEC. SUPERIOR</label>
<br>            
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_t">M</label>
        <input type="number" name="pm_t" id="pm_t" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_t">F</label>
        <input type="number" name="pf_t" id="pf_t" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="st_t">ST</label>
        <input type="number" name="pst_t" id="pst_t" class="form-control" placeholder="cantidad">
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
        <h4 align="center">PROFESIONALES TITULADOS POR NIVEL ACADEMICO SEGUN FACULTADES</h4>
        <thead style="background-color: #A9D0F5">
            <tr>
               <th rowspan="3">OPCIONES</th>
               <th rowspan="3">FACULTAD</th>
               <th colspan="6">SEXO</th>
               <th rowspan="3">TOTAL</th>
               <th rowspan="3">GESTION</th>
            </tr>
            <tr>
                <th colspan="3">LICENCIATURA</th>
                <th colspan="3">TEC. SUPERIOR</th>
            </tr>
            <tr>
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
        id_f=$("#pid_f").val();
        nombre_f=$("#pid_f option:selected").text();
        m_l=$("#pm_l").val();
        f_l=$("#pf_l").val();
        st_l=$("#pst_l").val();
        m_t=$("#pm_t").val();
        f_t=$("#pf_t").val();
        st_t=$("#pst_t").val();
        total=$("#ptotal").val();
        gestion=$("#pgestion").val();
        if (id_f!="" && m_l!="" && f_l!="" && st_l!="" && m_t!="" && f_t!="" && st_t!="" && total!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hidden" name="id_f[]" value="'+id_f+'">'+nombre_f+'</td><td><input type="number" name="m_l[]" value="'+m_l+'"></td><td><input type="number" name="f_l[]" value="'+f_l+'"></td><td><input type="number" name="st_l[]" value="'+st_l+'"></td><td><input type="number" name="m_t[]" value="'+m_t+'"></td><td><input type="number" name="f_t[]" value="'+f_t+'"></td><td><input type="number" name="st_t[]" value="'+st_t+'"></td><td><input type="number" name="total[]" value="'+total+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
        
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
        $("#pm_l").val("");
        $("#pf_l").val("");
        $("#pst_l").val("");
        $("#pm_t").val("");
        $("#pf_t").val("");
        $("#pst_t").val("");
        $("#ptotal").val("");
    }
    

</script>
@endpush
@endsection