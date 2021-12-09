@extends('plantillaweb')

@section('home_web')
<div>
    <tr>
        <th>
            <input type="button" onclick="history.back()" name="volver atrás" value="Productos"  class="btn btn-warning btn-sm">
        </th>
    </tr>

</div>
<h2>Formulario de Registro - Productos</h2>
<form action="{{route('products.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" class="form-control" name="Nombre" placeholder="Escriba el nombre del producto">
    </div>
    <div class="mb-3">
        <label>Precio</label>
        <input type="number" class="form-control" name="Precio" placeholder="Escriba el precio del producto">
    </div>
    <button type="submit" class="btn btn-outline-dark">Enviar</button>
</form>
@endsection
