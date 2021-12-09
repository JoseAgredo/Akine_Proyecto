@extends('plantillaweb')

@section('home_web')
<div>
    <tr>
        <th>
            <input type="button" onclick="history.back()" name="volver atrás" value="Clientes"  class="btn btn-warning btn-sm">
        </th>
    </tr>

</div>
<h2>Formulario de Registro - Clientes</h2>
<form action="{{route('clients.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nombre Completo</label>
        <input type="text" class="form-control" name="Nombre" placeholder="Escriba su nombre completo">
    </div>
    <div class="mb-3">
        <label>Cedula</label>
        <input type="number" class="form-control" name="Cedula" placeholder="Escriba su cedula">
    </div>
    <div class="mb-3">
        <label>Celular</label>
        <input type="number" class="form-control" name="Celular" placeholder="Escriba su numero de celular">
    </div>
    <div class="mb-3">
        <label>Correo</label>
        <input type="email" class="form-control" name="Correo" placeholder="Escriba su correo">
    </div>
    <button type="submit" class="btn btn-outline-dark">Enviar</button>
</form>
@endsection
