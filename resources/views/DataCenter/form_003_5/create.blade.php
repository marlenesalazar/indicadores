@extends ('layout.Admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo registro <a href="{{route('DataCenter.form_003_5.index')}}"><button class="btn btn-danger">Cancelar</button></a></h3>

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
{!!Form::open(array('url'=>'DataCenter/form_003_5','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}

<div class="row">
    <div class="panel panel-footer">
        <div class="panel-body">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="form-group">
                    <label>EDAD</label>
                    <select name="pedad" class="form-control selectpicker" id="pedad" data-live-search="true">
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                        <option value="49">49</option>
                        <option value="50">50</option>
                        <option value="51">51</option>
                        <option value="52">52</option>
                        <option value="53">53</option>
                        <option value="54">54</option>
                        <option value="55">55</option>
                        <option value="56">56</option>
                        <option value="57">57</option>
                        <option value="58">58</option>
                        <option value="59">59</option>
                        <option value="60">60</option>
                        <option value="61">61</option>
                        <option value="62">62</option>
                        <option value="63">63</option>
                        <option value="64">64</option>
                        <option value="65">65</option>
                    </select>
                </div>
            </div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="artes">ARTES</label>
        <input type="number" name="partes" id="partes" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="cc_aa">CC. AA. Y PP.</label>
        <input type="number" name="pcc_aa" id="pcc_aa" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="cc_ee">CC. EE. FF. Y AA.</label>
        <input type="number" name="pcc_ee" id="pcc_ee" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="c_puras">CIENCIAS PURAS</label>
        <input type="number" name="pc_puras" id="pc_puras" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="cc_ss">CC. SS. Y HH.</label>
        <input type="number" name="pcc_ss" id="pcc_ss" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="derecho">DERECHO</label>
        <input type="number" name="pderecho" id="pderecho" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="ing">INGENIERIA</label>
        <input type="number" name="ping" id="ping" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="ing_geo">ING. GEOLOGICA</label>
        <input type="number" name="ping_geo" id="ping_geo" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="ing_min">ING. MINERA</label>
        <input type="number" name="ping_min" id="ping_min" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="tecnologica">TECNOLOGICA</label>
        <input type="number" name="ptecnologica" id="ptecnologica" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="c_salud">CIENCIAS DE LA SALUD</label>
        <input type="number" name="pc_salud" id="pc_salud" class="form-control" placeholder="cantidad">
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="medicina">MEDICINA</label>
        <input type="number" name="pmedicina" id="pmedicina" class="form-control" placeholder="cantidad">
    </div>
</div>

<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    <div class="form-group">
        <label for="p_uncia">PROGRAMA UNCIA</label>
        <input type="number" name="pp_uncia" id="pp_uncia" class="form-control" placeholder="cantidad">
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
        <input type="number" name="pporcentaje" id="pporcentaje" class="form-control" placeholder="total">
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
        <h4 align="center">MATRICULA PREUNIVERSITARIO, SEGÚN COMPOSICIÓN DE EDAD, POR FACULTAD</h4>
        <thead style="background-color: #A9D0F5">
            <tr>
               <th rowspan="3">OPCIONES</th>
               <th rowspan="2">EDAD</th>
               <th colspan="13">FACULTADES</th>
               <th rowspan="2">TOTAL</th>
               <th rowspan="2">PORCENTAJE</th>
               <th rowspan="2">GESTION</th>
            </tr>
            <tr>
                <th>ARTES</th>
                <th>CC. AA. Y PP</th>
                <th>CC. EE. FF. Y AA</th>
                <th>CIENCIAS PURAS.</th>
                <th>CC. SS. Y HH.</th>
                <th>DERECHO</th>
                <th>INGENIERIA</th>
                <th>ING. GEOLOGICA</th>
                <th>ING. MINERA</th>
                <th>TECNOLOGICA</th>
                <th>CIENCIAS DE LA SALUD</th>
                <th>MEDICINA</th>
                <th>PROGRAMA UNCIA</th>            
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
        edad=$("#pedad").val();
        artes=$("#partes").val();
        cc_aa=$("#pcc_aa").val();
        cc_ee=$("#pcc_ee").val();
        c_puras=$("#pc_puras").val();
        cc_ss=$("#pcc_ss").val();
        derecho=$("#pderecho").val();
        ing=$("#ping").val();
        ing_geo=$("#ping_geo").val();
        ing_min=$("#ping_min").val();
        tecnologica=$("#ptecnologica").val();
        c_salud=$("#pc_salud").val();
        medicina=$("#pmedicina").val();
        p_uncia=$("#pp_uncia").val();
        total=$("#ptotal").val();
        porcentaje=$("#pporcentaje").val();
        gestion=$("#pgestion").val();
        if (edad!="" && artes!="" && cc_aa!="" && cc_ee!="" && c_puras!="" && cc_ss!="" && derecho!="" && ing!="" && ing_geo!="" && ing_min!="" && tecnologica!="" && c_salud!="" && medicina!="" && p_uncia!="" && total!="" && porcentaje!=""&& gestion!=""){
         var fila='<tr class="selected id="fila'+cont+'><td><a href="#" class="btn btn-danger remove"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></a></td><td><input type="hiden" name="edad[]" value="'+edad+'"></td><td><input type="number" name="artes[]" value="'+artes+'"></td><td><input type="number" name="cc_aa[]" value="'+cc_aa+'"></td><td><input type="number" name="cc_ee[]" value="'+cc_ee+'"></td><td><input type="number" name="c_puras[]" value="'+c_puras+'"></td><td><input type="number" name="cc_ss[]" value="'+cc_ss+'"></td><td><input type="number" name="derecho[]" value="'+derecho+'"></td><td><input type="number" name="ing[]" value="'+ing+'"></td><td><input type="number" name="ing_geo[]" value="'+ing_geo+'"></td><td><input type="number" name="ing_min[]" value="'+ing_min+'"></td><td><input type="number" name="tecnologica[]" value="'+tecnologica+'"></td><td><input type="number" name="c_salud[]" value="'+c_salud+'"></td><td><input type="number" name="medicina[]" value="'+medicina+'"></td><td><input type="number" name="p_uncia[]" value="'+p_uncia+'"></td><td><input type="number" name="total[]" value="'+total+'"></td><td><input type="number" name="porcentaje[]" value="'+porcentaje+'"></td><td><input type="text" name="gestion[]" value="'+gestion+'"></td></tr>';
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
        $("#partes").val("");
        $("#pcc_aa").val("");
        $("#pcc_ee").val("");
        $("#pc_puras").val("");
        $("#pcc_ss").val("");
        $("#pderecho").val("");
        $("#ping").val("");
        $("#ping_geo").val("");
        $("#ping_min").val("");
        $("#ptecnologica").val("");
        $("#pc_salud").val("");
        $("#pmedicina").val("");
        $("#pp_uncia").val("");
        $("#ptotal").val("");
        $("#pporcentaje").val("");
    }

</script>
@endpush
@endsection