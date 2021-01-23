@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('Extension.form_012_7.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'Extension/form_012_7','method'=>'POST','autocomplete'=>'off'))!!}
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
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="n_evento">NOMBRE DEL EVENTO (FERIA)</label>
        <input type="text" name="pn_evento" id="pn_evento" class="form-control">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="n_participantes">N° DE PARTICIPANTES_NOMBRES</label>
        <input type="text" name="pn_participantes" id="pn_participantes" class="form-control">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="e_tematico">EJE TEMATICO</label>
        <input type="text" name="pe_tematico" id="pe_tematico" class="form-control" >
    </div>
</div>

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="resultados">RESULTADOS (NOMBRES DE GANADORES)</label>
        <input type="text" name="presultados" id="presultados" class="form-control">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
        <h4 align="center">PROYECTOS DE EXTENSION QUE PARTICIPAN EN FERIAS</h4>
        <thead style="background-color: #A9D0F5">
            <tr>
               <th>OPCIONES</th>
               <th>CARRERAS</th>
               <th>NOMBRE DEL EVENTO (FERIA)</th>
               <th>N° DE PARTICIPANTES_NOMBRES</th>
               <th>EJE TEMATICO</th>
               <th>RESULTADOS (NOMBRES DE GANADORES)</th>
               <th>GESTION</th>
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
        n_evento=$("#pn_evento").val();
        n_participantes=$("#pn_participantes").val();
        e_tematico=$("#pe_tematico").val();
        resultados=$("#presultados").val();
        gestion=$("#pgestion").val();
        if (id_c!="" && n_evento!="" && n_participantes!="" && e_tematico!="" && resultados!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hidden" name="id_c[]" value="'+id_c+'">'+nombre_c+'</td><td><input type="text" name="n_evento[]" value="'+n_evento+'"></td><td><input type="text" name="n_participantes[]" value="'+n_participantes+'"></td><td><input type="text" name="e_tematico[]" value="'+e_tematico+'"></td><td><input type="text" name="resultados[]" value="'+resultados+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
        
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
        $("pn_evento").val("");
        $("#pn_participantes").val("");
        $("#pe_tematico").val("");
        $("#presultados").val("");
    }
    

</script>
@endpush
@endsection