@extends('plantillaweb')

@section('home_web')
    <h2>Edicion de Datos {{ $client->id }}</h2>
    <form action="{{route('clients.update', $client)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label>Modificar Cedula</label>
            <input type="number" class="form-control" name="Cedula" placeholder="Escriba su cedula"
                value="{{ $client->Cedula }}">
        </div>
        <div class="mb-3">
            <label>Modificar Nombre</label>
            <input type="text" class="form-control" name="Nombre" placeholder="Escriba su nombre completo"
                value="{{ $client->Nombre }}">
        </div>
        <div class="mb-3">
            <label>Modificar Celular</label>
            <input type="number" class="form-control" name="Celular" placeholder="Escriba su nombre completo"
                value="{{ $client->Celular }}">
        </div>
        <div class="mb-3">
            <label>Modificar Correo</label>
            <input type="text" class="form-control" name="Correo" placeholder="Escriba su nombre completo"
                value="{{ $client->Correo }}">
        </div>
        <button type="submit" class="btn btn-outline-dark">Guardar</button>
    </form>
@endsection
