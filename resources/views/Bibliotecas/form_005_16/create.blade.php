@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('Bibliotecas.form_005_16.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'Bibliotecas/form_005_16','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}

<div class="row">
    <div class="panel panel-footer">
        <div class="panel-body">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label>USUARIO</label>
                    <select name="pusuario" class="form-control selectpicker" id="pusuario" data-live-search="true">
                        <option value="ESTUDIANTES">ESTUDIANTES</option>
                        <option value="DOCENTES">DOCENTES</option>
                    </select>
                </div>
            </div>
<br><label>MASCULINO</label><br>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="obras_m">OBRAS</label>
        <input type="number" name="pobras_m" id="pobras_m" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="lectores_m">LECTORES</label>
        <input type="number" name="plectores_m" id="plectores_m" class="form-control" placeholder="cantidad">
    </div>
</div>
<br><label>FEMENINO</label><br>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="obras_f">OBRAS</label>
        <input type="number" name="pobras_f" id="pobras_f" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="lectores_f">LECTORES</label>
        <input type="number" name="plectores_f" id="plectores_f" class="form-control" placeholder="cantidad">
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
        <h4 align="center">OBRAS CONSULTADAS SEGUN USIARIO TECNICA</h4>
        <thead style="background-color: #A9D0F5">
            <tr>
               <th rowspan="4">OPCIONES</th>
               <th rowspan="4">USUARIO</th>
               <th colspan="4">TECNICA</th>
               <th rowspan="4">TOTAL</th>
               <th rowspan="4">GESTION</th>
            <tr>
            <tr>
               <th colspan="2">MASCULINO</th>
               <th colspan="2">FEMENINO</th>
            </tr>
            <tr>
               <th>OBRAS</th>
               <th>LECTORES</th>
               <th>OBRAS</th>
               <th>LECTORES</th>
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
        usuario=$("#pusuario").val();
        obras_m=$("#pobras_m").val();
        lectores_m=$("#plectores_m").val();
        obras_f=$("#pobras_f").val();
        lectores_f=$("#plectores_f").val();
        total=$("#ptotal").val();
        gestion=$("#pgestion").val();
        if (usuario!="" && obras_m!="" && lectores_m!="" && obras_f!="" && lectores_f!="" && total!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hiden" name="usuario[]" value="'+usuario+'"></td><td><input type="number" name="obras_m[]" value="'+obras_m+'"></td><td><input type="number" name="lectores_m[]" value="'+lectores_m+'"></td><td><input type="number" name="obras_f[]" value="'+obras_f+'"></td><td><input type="number" name="lectores_f[]" value="'+lectores_f+'"></td><td><input type="number" name="total[]" value="'+total+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
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
        $("#pobras_m").val("");
        $("#plectores_m").val("");
        $("#pobras_f").val("");
        $("#plectores_f").val("");
        $("#ptotal").val("");
    }

</script>
@endpush
@endsection