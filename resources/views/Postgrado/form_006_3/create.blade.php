@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('Postgrado.form_006_3.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'Postgrado/form_006_3','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}

<div class="row">
    <div class="panel panel-footer">
        <div class="panel-body">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label for="unidad">UNIDAD ACADEMICA OFERTANTE</label>
        <input type="text" name="punidad" id="punidad" class="form-control" >
    </div>
</div>
<label>DOCTORADO</label><br>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_d">M</label>
        <input type="number" name="pm_d" id="pm_d" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_d">F</label>
        <input type="number" name="pf_d" id="pf_d" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="t_d">T</label>
        <input type="number" name="pt_d" id="pt_d" class="form-control" placeholder="cantidad">
    </div>
</div>
<br><label>MAESTRIA</label><br>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="m_m">M</label>
        <input type="number" name="pm_m" id="pm_m" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="f_m">F</label>
        <input type="number" name="pf_m" id="pf_m" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="t_m">T</label>
        <input type="number" name="pt_m" id="pt_m" class="form-control" placeholder="cantidad">
    </div>
</div>
<br><label>DIP. O ESP.</label><br>
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
        <label for="t_dip">T</label>
        <input type="number" name="pt_dip" id="pt_dip" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
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
        <h4 align="center">MATRICULA POSTGRADO POR NIVEL DE FORMACION Y SEXO, SEGUN UNIDADES ACADEMICAS</h4>
        <thead style="background-color: #A9D0F5">
            <tr>
               <th rowspan="3">OPCIONES</th>
               <th rowspan="3">UNIDAD ACADEMICA OFERTANTE</th>
               <th colspan="3">DOCTORADO</th>
               <th colspan="3">MAESTRIA</th>
               <th colspan="3">DIP. O ESP.</th>
               <th rowspan="3">TOTAL</th>
               <th rowspan="3">GESTION</th>
            <tr>
            <tr>
               <th>M</th>
               <th>F</th>
               <th>T</th>
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
    var cont=0;
    $("#guardar").show();
    

    function agregar(){
        unidad=$("#punidad").val();
        m_d=$("#pm_d").val();
        f_d=$("#pf_d").val();
        t_d=$("#pt_d").val();
        m_m=$("#pm_m").val();
        f_m=$("#pf_m").val();
        t_m=$("#pt_m").val();
        m_dip=$("#pm_dip").val();
        f_dip=$("#pf_dip").val();
        t_dip=$("#pt_dip").val();
        total=$("#ptotal").val();
        gestion=$("#pgestion").val();
        if (unidad!="" && m_d!="" && f_d!="" && t_d!="" && m_m!="" && f_m!="" && t_m!="" && m_dip!="" && f_dip!="" && t_dip!="" && total!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="text" name="unidad[]" value="'+unidad+'"></td><td><input type="number" name="m_d[]" value="'+m_d+'"></td><td><input type="number" name="f_d[]" value="'+f_d+'"></td><td><input type="number" name="t_d[]" value="'+t_d+'"></td><td><input type="number" name="m_m[]" value="'+m_m+'"></td><td><input type="number" name="f_m[]" value="'+f_m+'"></td><td><input type="number" name="t_m[]" value="'+t_m+'"></td><td><input type="number" name="m_dip[]" value="'+m_dip+'"></td><td><input type="number" name="f_dip[]" value="'+f_dip+'"></td><td><input type="number" name="t_dip[]" value="'+t_dip+'"></td><td><input type="number" name="total[]" value="'+total+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
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
        $("#punidad").val("");
        $("#pm_d").val("");
        $("#pf_d").val("");
        $("#pt_d").val("");
        $("#pm_m").val("");
        $("#pf_m").val("");
        $("#pt_m").val("");
        $("#pm_dip").val("");
        $("#pf_dip").val("");
        $("#pt_dip").val("");
        $("#ptotal").val("");
    }

</script>
@endpush
@endsection