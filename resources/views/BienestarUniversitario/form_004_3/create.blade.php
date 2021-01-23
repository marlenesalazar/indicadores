@extends ('layout.Admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('BienestarUniversitario.form_004_3.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'BienestarUniversitario/form_004_3','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
<div class="row">
    <div class="panel panel-footer">
        <div class="panel-body">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label>FACULTADES</label>
                    <select name="pid_f" class="form-control selectpicker" id="pid_f" data-live-search="true">
                        @foreach($facultad as $fac)
                        <option value="{{$fac->id_f}}">{{$fac->nombre_f}}</option> <!--facultad-->
                        @endforeach
                    </select>
                </div>
            </div>
<br><label>COMPLETA</label><br>           
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_c">M</label>
        <input type="number" name="pm_c" id="pm_c" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_c">F</label>
        <input type="number" name="pf_c" id="pf_c" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="t_c">T</label>
        <input type="number" name="pt_c" id="pt_c" class="form-control" placeholder="cantidad">
    </div>
</div>
<br><label>PARCIAL</label><br>           
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
        <label for="t_p">T</label>
        <input type="number" name="pt_p" id="pt_p" class="form-control" placeholder="cantidad">
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
        <h4 align="center">BENEFICIARIOS CON BECA ALIMENTACIÓN, SEGÚN TIPO DE BECA POR SEXO Y FACULTAD</h4>
        <thead style="background-color: #A9D0F5">
            <tr>
                <th rowspan="3">OPCIONES</th>
                <th rowspan="3">FACULTADES</th>
                <th colspan="6">TIPO DE BECA</th>
                <th rowspan="3">TOTAL</th>
                <th rowspan="3">PORCENTAJE</th>
                <th rowspan="3">GESTION</th>
            </tr>
            <tr>
                <th colspan="3">COMPLETA</th>
                <th colspan="3">PARCIAL</th>
            </tr>     
            <tr>
                <th>M</th>
                <th>F</th>
                <th>T</th>
                <th>M</th>
                <th>F</th>
                <th>T</th>
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
    var cont=0;;
    $("#guardar").show();
    

    function agregar(){
        id_f=$("#pid_f").val();
        nombre_f=$("#pid_f option:selected").text();
        m_c=$("#pm_c").val();
        f_c=$("#pf_c").val();
        t_c=$("#pt_c").val();
        m_p=$("#pm_p").val();
        f_p=$("#pf_p").val();
        t_p=$("#pt_p").val();
        total=$("#ptotal").val();
        porcentaje=$("#pporcentaje").val();
        gestion=$("#pgestion").val();
        if (id_f!="" && m_c!="" && f_c!="" && t_c!="" && m_p!="" && f_p!="" && t_p!="" && total!="" && porcentaje!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hidden" name="id_f[]" value="'+id_f+'">'+nombre_f+'</td><td><input type="number" name="m_c[]" value="'+m_c+'"></td><td><input type="number" name="f_c[]" value="'+f_c+'"></td><td><input type="number" name="t_c[]" value="'+t_c+'"></td><td><input type="number" name="m_p[]" value="'+m_p+'"></td><td><input type="number" name="f_p[]" value="'+f_p+'"></td><td><input type="number" name="t_p[]" value="'+t_p+'"></td><td><input type="number" name="total[]" value="'+total+'"></td><td><input type="number" name="porcentaje[]" value="'+porcentaje+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
        
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
        $("#pm_c").val("");
        $("#pf_c").val("");
        $("#pt_c").val("");
        $("#pm_p").val("");
        $("#pf_p").val("");
        $("#pt_p").val("");
        $("#ptotal").val("");
        $("#pporcentaje").val("");
    }
    
</script>
@endpush
@endsection