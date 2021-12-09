@extends('plantillaweb')

@section('home_web')
<div>
    <tr>
        <th>
            <button onclick="location.href='clients/create'" class="btn btn-warning btn-sm">
                Nuevo Cliente
            </button>
        </th>
        <th>
            <button onclick="location.href='products'" class="btn btn-warning btn-sm">
                Productos
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
                <th scope="col">Cedula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Celular</th>
                <th scope="col">Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td>{{ $client->Cedula }}</td>
                    <td>{{ $client->Nombre }}</td>
                    <td>{{ $client->Celular }}</td>
                    <td>{{ $client->Correo }}</td>
                    <td>
                        <a href="{{ route('clients.edit', $client) }}">
                            <button type="button" class="btn btn-outline-dark btn-sm">Editar</button>
                        </a>
                    </td>
                    <td>
                        <form method="POST" action="{{route('clients.destroy', $client)}}">
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
    {{$clients->links()}}
@endsection
