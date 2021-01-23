@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('DataCenter.form_003_4.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'DataCenter/form_003_4','method'=>'POST','autocomplete'=>'off'))!!}
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
<br><label>CAPITAL</label> <br>      
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="fis_c">FIS</label>
        <input type="number" name="pfis_c" id="pfis_c" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="part_c">PART</label>
        <input type="number" name="ppart_c" id="ppart_c" class="form-control" placeholder="cantidad">
    </div>
</div>
<br><label>PROVINCIA</label> <br>           
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="fis_p">FIS</label>
        <input type="number" name="pfis_p" id="pfis_p" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="part_p">PART</label>
        <input type="number" name="ppart_p" id="ppart_p" class="form-control" placeholder="cantidad">
    </div>
</div>
<br><label>INTER CAP.</label> <br>           
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="fis_i">FIS</label>
        <input type="number" name="pfis_i" id="pfis_i" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="part_i">PART</label>
        <input type="number" name="ppart_i" id="ppart_i" class="form-control" placeholder="cantidad">
    </div>
</div>
<br><label>INTER PROV.</label><br>            
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="fis_in">FIS</label>
        <input type="number" name="pfis_in" id="pfis_in" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="part_in">PART</label>
        <input type="number" name="ppart_in" id="ppart_in" class="form-control" placeholder="cantidad">
    </div>
</div>
<br><label>EXTERIOR</label><br>            
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="fis_e">FIS</label>
        <input type="number" name="pfis_e" id="pfis_e" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="form-group">
        <label for="part_e">PART</label>
        <input type="number" name="ppart_e" id="ppart_e" class="form-control" placeholder="cantidad">
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
        <h4 align="center">CURSOS PREUNIVERSITARIO POR TIPO DE COLEGIO,SEGÚN CARRERAS Y PROCEDENCIA</h4>
        <thead style="background-color: #A9D0F5">
            <tr>
                <th rowspan="2">OPCIONES</th>
                <th rowspan="2">CARRERAS</th>
                <th colspan="2">CAPITAL</th>
                <th colspan="2">PROVINCIA</th>
                <th colspan="2">INTER CAP.</th>
                <th colspan="2">INTER PROV.</th>
                <th colspan="2">EXT.</th>
                <th rowspan="2">TOTAL</th>
                <th rowspan="2">GESTION</th>
            </tr>
            <tr>
                <th>FIS</th>
                <th>PART</th>
                <th>FIS</th>
                <th>PART</th>
                <th>FIS</th>
                <th>PART</th>
                <th>FIS</th>
                <th>PART</th>
                <th>FIS</th>
                <th>PART</th>
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
        fis_c=$("#pfis_c").val();
        part_c=$("#ppart_c").val();
        fis_p=$("#pfis_p").val();
        part_p=$("#ppart_p").val();
        fis_i=$("#pfis_i").val();
        part_i=$("#ppart_i").val();
        fis_in=$("#pfis_in").val();
        part_in=$("#ppart_in").val();
        fis_e=$("#pfis_e").val();
        part_e=$("#ppart_e").val();
        total=$("#ptotal").val();
        gestion=$("#pgestion").val();
        if (id_c!="" && fis_c!="" && part_c!="" && fis_p!="" && part_p!="" && fis_i!="" && part_i!="" && fis_in!="" && part_in!="" && fis_e!="" && part_e!=""&& total!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hidden" name="id_c[]" value="'+id_c+'">'+nombre_c+'</td><td><input type="number" name="fis_c[]" value="'+fis_c+'"></td><td><input type="number" name="part_c[]" value="'+part_c+'"></td><td><input type="number" name="fis_p[]" value="'+fis_p+'"></td><td><input type="number" name="part_p[]" value="'+part_p+'"></td><td><input type="number" name="fis_i[]" value="'+fis_i+'"></td><td><input type="number" name="part_i[]" value="'+part_i+'"></td><td><input type="number" name="fis_in[]" value="'+fis_in+'"></td><td><input type="number" name="part_in[]" value="'+part_in+'"></td><td><input type="number" name="fis_e[]" value="'+fis_e+'"></td><td><input type="number" name="part_e[]" value="'+part_e+'"></td><td><input type="number" name="total[]" value="'+total+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
        
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
        $("#pfis_c").val("");
        $("#ppart_c").val("");
        $("#pfis_p").val("");
        $("#ppart_p").val("");
        $("#pfis_i").val("");
        $("#ppart_i").val("");
        $("#pfis_in").val("");
        $("#ppart_in").val("");
        $("#pfis_e").val("");
        $("#ppart_e").val("");
        $("#ptotal").val("");

        
    }
    

</script>
@endpush
@endsection