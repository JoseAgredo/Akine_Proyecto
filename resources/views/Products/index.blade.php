@extends('plantillaweb')

@section('home_web')
<div>
    <tr>
        <th>
            <button onclick="location.href='clients'" class="btn btn-warning btn-sm">
                Clientes
            </button>
        </th>
        <th>
            <button onclick="location.href='products/create'" class="btn btn-warning btn-sm">
                Nuevo Producto
            </button>
        </th>
        <th>
            <button onclick="location.href='sales'" class="btn btn-warning btn-sm">
                Ventas
            </button>
        </th>
    </tr>

</div>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->Nombre }}</td>
                    <td>{{ $product->Precio }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}">
                            <button type="button" class="btn btn-outline-dark btn-sm">Editar</button>
                        </a>
                    </td>
                    <td>
                        <form method="POST" action="{{route('products.destroy', $product)}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm">
                            Eliminar
                        </button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
