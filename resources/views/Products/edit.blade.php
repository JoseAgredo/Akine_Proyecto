@extends('plantillaweb')

@section('home_web')
    <h2>Edicion de Datos {{ $product->id }}</h2>
    <form action="{{route('products.update', $product)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label>Modificar Nombre</label>
            <input type="text" class="form-control" name="Nombre" placeholder="Escriba el nombre del producto"
                value="{{ $product->Nombre }}">
        </div>
        <div class="mb-3">
            <label>Modificar Precio</label>
            <input type="number" class="form-control" name="Precio" placeholder="Escriba el precio"
                value="{{ $product->Precio }}">
        </div>
        <button type="submit" class="btn btn-outline-dark">Guardar</button>
    </form>
@endsection
