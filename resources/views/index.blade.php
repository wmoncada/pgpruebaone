@extends('layout.app')

@section('content')
<h5>Registra tus datos</h5>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            - {{ $error }} <br>
        @endforeach
    </div>
@endif

<form action="{{ route('prospecto.store') }}" method="POST">
    <div class="row">
        <div class="col">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Juan Carlos" required>
        </div>
        <div class="col">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Perez Prado" required>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="idsexo">Sexo</label>
            <select name="idsexo" id="idsexo" class="form-control">
                @foreach ($sexos as $sexo)
                <option value="{{ $sexo->id }}"> {{ $sexo->nombre }} </option>
                @endforeach
            </select>
        </div>

        <div class="col">
            <label for="fechanacimiento">Fecha Nacimiento</label>
            <input type="date" name="fechanacimiento" id="fechanacimiento" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="correo">e-mail</label>
            <input type="email" name="correo" id="correo" class="form-control" required>
        </div>
        <div class="col">
            <label for="telefono">Telefono</label>
            <input type="text" name="telefono" id="telefono"  class="form-control">
        </div>
        <div class="col">
            <label for="idtipopersona">Tipo</label>
            <select name="idtipopersona" id="idtipopersona" class="form-control">
                @foreach ($tiposPersona as $tipos)
                <option value="{{ $tipos->id }}"> {{ $tipos->nombre }} </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="nombrecomercial">Nombre Comercial</label>
            <input type="text" name="nombrecomercial" id="nombrecomercial"  class="form-control">
        </div>
        <div class="col">
            <label for="website">Sitio Web</label>
            <input type="url" name="website" id="website"  class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" id="mensaje" class="form-control" cols="30" rows="5"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <hr>
            @csrf
            <input type="submit" value="Registrar" class="btn btn-primary">
        </div>
    </div>
</form>
@endsection
