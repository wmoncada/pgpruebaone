@extends('layout.app2')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<form id = "frm-conversion" action="javascript:void(0);">
    <div class="row">
        <div class="col">
            <label for="pais">Pais</label>
            <select name="pais" id="pais" class="form-select">
                @foreach ($monedas as $moneda)
                <option value="{{ $moneda->id_moneda }}"> {{ $moneda->pais }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="cuota">Valor Cuota</label>
            <div class="input-group">
                <div class="input-group-text">$</div>
                <input type="number" id = "cuota" class="form-control">
            </div>
        </div>
        <div class="col">
            <label for="cambio">Cambio</label>
            <div class="input-group">
                <div class="input-group-text" id="simbolo-1">$</div>
                <input type="number" id = "cambio" class="form-control" readonly>
            </div>
        </div>
        <div class="col">
            <label for="result">Cuota</label>
            <div class="input-group">
            <div class="input-group-text" id="simbolo-2">$</div>
                <input type="number" id = "result" class="form-control" readonly>
            </div>
        </div>
    </div>
</form>



<script>
    $(document).ready(function(){
        // alert("ok");

        let txtCuota = $("#cuota");
        let txtCambio = $("#cambio");
        let txtSimbolo = $("div[id^='simbolo']");
        let txtResult = $("#result");
        let cmbPais = $("#pais");



        let getValMoneda = function(){

            $.ajax({
                url:  "conversiones/" + $("#pais").val(),
                method: "GET"
            }).done(function(response) {
                let data = JSON.parse(response)

                txtSimbolo.html(data[0]["simbolo"]);
                txtCambio.val(Math.round(data[0].valor_cambio * 100) / 100)

                if(  txtCuota.val().trim().length > 0)
                {
                    let cuota = parseFloat(txtCuota.val())
                    let cambio = parseFloat(txtCambio.val());
                    let result =  cuota * cambio

                    console.log(result)

                    result = Math.round(result * 100) / 100;

                    txtResult.val(result)
                }
            });
        }

        getValMoneda();

        cmbPais.on("change",function(){
            getValMoneda();
        });

        txtCuota.
            on("change",function(){
                getValMoneda();
            })
            .on("keyup", function() {
                getValMoneda();
            });

    });
</script>
@endsection
