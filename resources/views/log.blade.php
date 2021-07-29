@extends('layout.app2')

@section('content')

<table class="table">
    <thead>
        <th>Fecha Cambio</th>
        <th>Nombre</th>
        <th>Simbolo</th>
        <th>Pais</th>
        <th>Valor Cambio</th>
    </thead>
    <tbody>
        @foreach ($logs as $log)
        <tr>
            <td>{{ $log->created_at }}</td>
            <td>{{ $log->nombre }}</td>
            <td>{!! $log->simbolo !!}</td>
            <td>{{ $log->pais }}</td>
            <td>{{ $log->valor_cambio  }}</td>
        </tr>
        @endforeach
    <tbody>
</table>



@endsection
