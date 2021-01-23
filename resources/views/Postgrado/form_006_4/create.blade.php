@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('Postgrado.form_006_4.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'Postgrado/form_006_4','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}

<div class="row">
    <div class="panel panel-footer">
        <div class="panel-body">
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label>NIVEL</label>
            <select name="pnivel" class="form-control selectpicker" id="pnivel" data-live-search="true">
                <option value="DOCTORADO">DOCTORADO</option>
                <option value="MAESTRIA">MAESTRIA</option>
                <option value="DIP. O ESP.">DIP. O ESP.</option>
            </select>
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="num">N°</label>
        <input type="number" name="pnum" id="pnum" class="form-control" >
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="curso">CURSO O PROGRAMA</label>
        <input type="text" name="pcurso" id="pcurso" class="form-control" >
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="unidad">UNIDAD ACADEMICA OFERTANTE</label>
        <input type="text" name="punidad" id="punidad" class="form-control">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="inicio">INICIO</label>
        <input type="text" name="pinicio" id="pinicio" class="form-control">
    </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="form-group">
        <label for="fin">CONCLUSION</label>
        <input type="text" name="pfin" id="pfin" class="form-control">
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
        <h4 align="center">PROGRAMAS POSTGRADO</h4>
        <thead style="background-color: #A9D0F5">
            <tr>
               <th rowspan="2">OPCIONES</th>
               <th rowspan="2">NIVEL</th>
               <th rowspan="2">N°</th>
               <th rowspan="2">CURSO O PROGRAMA</th>
               <th rowspan="2">UNIDAD ACADEMICA OFERTANTE</th>
               <th colspan="2">FECHA DE:</th>
               <th rowspan="2">GESTION</th>
            </tr>
            <tr>
                <th>INICIO</th>
                <th>COCLUSION</th>
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
        nivel=$("#pnivel").val();
        num=$("#pnum").val();
        curso=$("#pcurso").val();
        unidad=$("#punidad").val();
        incio=$("#pinicio").val();
        fin=$("#pfin").val();
        gestion=$("#pgestion").val();
        if (nivel!="" && num!="" && curso!="" && unidad!="" && inicio!="" && fin!="" && gestion!="" ){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hiden" name="nivel[]" value="'+nivel+'"></td><td><input type="number" name="num[]" value="'+num+'"></td><td><input type="text" name="curso[]" value="'+curso+'"></td><td><input type="text" name="unidad[]" value="'+unidad+'"></td><td><input type="text" name="inicio[]" value="'+inicio+'"></td><td><input type="text" name="fin[]" value="'+fin+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
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
        $("#pnum").val("");
        $("#pcurso").val("");
        $("#punidad").val("");
        $("#pinicio").val("");
        $("#pfin").val("");
    }

</script>
@endpush
@endsection