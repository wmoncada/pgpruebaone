@extends('layout.app2')

@section('content')
<h2>Lista</h2>

<div class="row justify-content-center">
    <div class="col-md-8">
        <table class="table ">
            <thead>
                <th>Nombre</th>
                <th>Simbolo</th>
                <th>Valor de cambio</th>
                <th>Pais</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach ($monedas as $moneda)
                <tr>
                    <td>{{ $moneda->nombre }}</td>
                    <td>{{ $moneda->simbolo }}</td>
                    <td>{{ $moneda->valor_cambio }}</td>
                    <td>{{ $moneda->pais }}</td>
                    <td>
                        <a href="{{ route('conversion.edit', $moneda->id_moneda) }}" >
                            Editar
                        </a>
                        |
                        <a href="{{ route('conversion.log', $moneda->id_moneda) }}">
                            Historial
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
