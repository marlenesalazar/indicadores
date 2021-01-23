@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('Bibliotecas.form_005_2.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'Bibliotecas/form_005_2','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}

<div class="row">
    <div class="panel panel-footer">
        <div class="panel-body">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label>BIBLIOTECAS</label>
                    <select name="pbiblioteca" class="form-control selectpicker" id="pbiblioteca" data-live-search="true">
                        <option value="BIBLIOTECA CENTRAL">BIBLIOTECA CENTRAL</option>
                        <option value="BIBLIOTECA CC. SS. Y HH.">BIBLIOTECA CC. SS. Y HH.</option>
                        <option value="BIBLIOTECA DERECHO">BIBLIOTECA DERECHO</option>
                        <option value="BIBLIOTECA CC. EE. FF. Y AA.">BIBLIOTECA CC. EE. FF. Y AA.</option>
                        <option value="BIBLIOTECA GEOLOGIA">BIBLIOTECA GEOLOGIA</option>
                        <option value="BIBLIOTECA AGRONOMIA">BIBLIOTECA AGRONOMIA</option>
                        <option value="BIBLIOTECA ARTES">BIBLIOTECA ARTES</option>
                        <option value="BIBLIOTECA MEDICINA">MEDICINA</option>
                    </select>
                </div>
            </div>

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="l_nacionales">LIBROS NACIONALES</label>
        <input type="number" name="pl_nacionales" id="pl_nacionales" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="l_extranjero">LIBROS EXTRANJEROS</label>
        <input type="number" name="pl_extranjero" id="pl_extranjero" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="tesis">TESIS</label>
        <input type="number" name="ptesis" id="ptesis" class="form-control" placeholder="total">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="total">TOTAL</label>
        <input type="number" name="ptotal" id="ptotal" class="form-control" placeholder="total">
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
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
        <h4 align="center">POTENCIAL DEL ACERVO BIBLIOGRAFICO SEGUN BIBLIOTECAS ESPECIALIZADAS</h4>
        <thead style="background-color: #A9D0F5">
            <tr>
               <th>OPCIONES</th>
               <th>BIBLIOTECAS</th>
               <th>LIBROS NACIONALES</th>
               <th>LIBROS EXTRANJEROS</th>
               <th>TESIS</th>
               <th>TOTAL</th>
               <th>PORCENTAJE</th>
               <th>GESTION</th>
            <tr>
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
        biblioteca=$("#pbiblioteca").val();
        l_nacionales=$("#pl_nacionales").val();
        l_extranjero=$("#pl_extranjero").val();
        tesis=$("#ptesis").val();
        total=$("#ptotal").val();
        porcentaje=$("#pporcentaje").val();
        gestion=$("#pgestion").val();
        if (biblioteca!="" && l_nacionales!="" && l_extranjero!="" && total!="" && tesis!="" && porcentaje!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hiden" name="biblioteca[]" value="'+biblioteca+'"></td><td><input type="number" name="l_nacionales[]" value="'+l_nacionales+'"></td><td><input type="number" name="l_extranjero[]" value="'+l_extranjero+'"></td><td><input type="number" name="tesis[]" value="'+tesis+'"></td><td><input type="number" name="total[]" value="'+total+'"></td><td><input type="number" name="porcentaje[]" value="'+porcentaje+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
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
        $("#pl_nacionales").val("");
        $("#pl_extranjero").val("");
        $("#ptotal").val("");
        $("#ptesis").val("");
        $("#pporcentaje").val("");
    }

</script>
@endpush
@endsection