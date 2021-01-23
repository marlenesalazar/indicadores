@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('DAF.form_010_2.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'DAF/form_010_2','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
<div class="row">
    <div class="panel panel-footer">
        <div class="panel-body">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class="form-group">
                    <label>FTE-ORG</label>
                    <select name="pfte" class="form-control selectpicker" id="pfte" data-live-search="true">
                        <option value="20-230">20-230</option>
                        <option value="41-111">41-111</option>
                        <option value="41-113">41-113</option>
                        <option value="41-119">41-119</option>
                        <option value="44-559">44-559</option>
                        <option value="44-720">44-720</option>
                        <option value="80-543">80-543</option>
                        <option value="92-230">92-230</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label>DESCRIPCION</label>
                    <select name="pdescripcion" class="form-control selectpicker" id="pdescripcion" data-live-search="true">
                        <option value="Recursos especificos - otros recursos especificos">Recursos especificos - otros recursos especificos</option>
                        <option value="Transferencia T.G.N. - Tesoro General de la Nacion">Transferencia T.G.N. - Tesoro General de la Nacion</option>
                        <option value="Transferencia T.G.N. - Tesoro General de la Nacion - Coparticipacion">Transferencia T.G.N. - Tesoro General de la Nacion - Coparticipacion</option>
                        <option value="Transferencia T.G.N. - Impuesto Directo a los Hidrocarburos">Transferencia T.G.N. - Impuesto Directo a los Hidrocarburos</option>
                        <option value="Transferencias Donación Externa - Italia">Transferencias Donación Externa - Italia</option>
                        <option value="Transferencias de Donación Extranjero Basket Funding">Transferencias de Donación Extranjero Basket Funding</option>
                        <option value="Donacion Externa - Belgica">Donacion Externa - Belgica</option>
                        <option value="Prestamos Recursos Especificos - Otros Recursos Especificos">Prestamos Recursos Especificos - Otros Recursos Especificos</option>
                    </select>
                </div>
            </div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="presupuestos">PRESUPUESTOS VIG.</label>
        <input type="number" name="ppresupuestos" id="ppresupuestos" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="ejecucion">EJECUCION</label>
        <input type="number" name="pejecucion" id="pejecucion" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="percibido">PERCIBIDO</label>
        <input type="number" name="ppercibido" id="ppercibido" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="form-group">
        <label for="porcentaje">PORCENTAJE DE EJECUCION</label>
        <input type="number" name="pporcentaje" id="pporcentaje" class="form-control" placeholder="cantidad">
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
        <h4 align="center"></h4>
        <thead style="background-color: #A9D0F5">
            <tr>
               <th>OPCIONES</th>
               <th>FTE-ORG</th>
               <th>DESCRIPCION</th>
               <th>PRESUPUESTOS VIG.</th>
               <th>EJECUCION</th>
               <th>PERCIBIDO</th>
               <th>PORCENTAJE DE EJECUCION</th>
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
        fte=$("#pfte").val();
        descripcion=$("#pdescripcion").val();
        presupuestos=$("#ppresupuestos").val();
        ejecucion=$("#pejecucion").val();
        percibido=$("#ppercibido").val();
        porcentaje=$("#pporcentaje").val();
        gestion=$("#pgestion").val();
        if (fte!="" && descripcion!="" && presupuestos!="" && ejecucion!="" && percibido!="" && porcentaje!="" && gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hiden" name="fte[]" value="'+fte+'"></td><td><input type="hiden" name="descripcion[]" value="'+descripcion+'"></td><td><input type="number" name="presupuestos[]" value="'+presupuestos+'"></td><td><input type="number" name="ejecucion[]" value="'+ejecucion+'"></td><td><input type="number" name="percibido[]" value="'+percibido+'"></td><td><input type="number" name=porcentaje[]" value="'+porcentaje+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
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
        $("#ppresupuestos").val("");
        $("#pejecucion").val("");
        $("#ppercibido").val("");
        $("#pporcentaje").val("");
    }

</script>
@endpush
@endsection