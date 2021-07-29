@extends('layout.app2')

@section('content')
<h2>Lista</h2>

<form action="{{ route('conversion.store') }}" method="POST">
    <input type="hidden" name="id_moneda" value="{{ old('id_moneda', $moneda->id_moneda) }}">
    <div class="row">
        <div class="col">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre" id="nombre" value="{{ old('nombre', $moneda->nombre)  }}">
        </div>
        <div class="col">
            <label for="simbolo">Simbolo</label>
            <input class="form-control" type="text" name="simbolo" id="simbolo" value="{{ old('simbolo', $moneda->simbolo)  }}">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="valor_cambio">Valor Cambio</label>
            <input class="form-control" type="number" name="valor_cambio" id="valor_cambio" value="{{ old('valor_cambio', $moneda->valor_cambio) }}">
        </div>
        <div class="col">
            <label for="pais">Pais</label>
            <input  class="form-control" type="text" name="pais" id="pais" value="{{ old('pais', $moneda->pais) }}">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @csrf
            <input type="submit" value="Actualizar Datos" class="btn btn-primary">
        </div>
    </div>
</form>
@endsection
