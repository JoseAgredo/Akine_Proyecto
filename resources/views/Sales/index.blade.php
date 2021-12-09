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
            <button onclick="location.href='products'" class="btn btn-warning btn-sm">
                Productos
            </button>
        </th>
        <th>
            <button onclick="location.href='sales/create'" class="btn btn-warning btn-sm">
                Nueva Venta
            </button>
        </th>
    </tr>

</div>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Comprador</th>
                <th scope="col">Producto</th>
                <th scope="col">Fecha</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
                <tr>
                    <th scope="row">{{ $sale->id }}</th>
                    <td>{{ $sale->Comprador }}</td>
                    <td>{{ $sale->Producto }}</td>
                    <td>{{ $sale->Fecha }}</td>
                    <td>{{ $sale->Cantidad }}</td>
                    <td>{{ $sale->Precio }}</td>
                    <td>{{ $sale->Total }}</td>

                    <td>
                        <a href="{{ route('sales.edit', $sale) }}">
                            <button type="button" class="btn btn-outline-dark btn-sm">Editar</button>
                        </a>
                    </td>
                    <td>
                        <form method="POST" action="{{route('sales.destroy', $sale)}}">
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
