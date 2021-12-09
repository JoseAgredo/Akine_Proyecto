@extends('plantillaweb')

@section('home_web')
<div>
    <tr>
        <th>
            <input type="button" onclick="history.back()" name="volver atrás" value="Ventas"  class="btn btn-warning btn-sm">
        </th>
    </tr>

</div>
    <h2>Formulario de Ventas</h2>
    <form action="{{ route('sales.store') }}" name="sales" method="POST">
        @csrf
        <div class="mb-3">
            <select name="Comprador" class="form-control">
                @foreach ($clients as $client)
                    <option value="{{$client->id}}">{{$client->Nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <select name="Producto" class="form-control">
                @foreach ($products as $product)
                    <option value="{{$product->id}}">{{$product->Nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Fecha de Registro</label>
            <input type="date" class="form-control" name="Fecha">
        </div>
        <div class="mb-3">
            <label>Cantidad</label>
            <input type="number" class="form-control" name="Cantidad" placeholder="Cantidad comprada" onkeyup="PrecioT()">
        </div>
        <div class="mb-3">
            <label>Precio</label>
            <input type="number" class="form-control" name="Precio" placeholder="Precio unitario" onkeyup="PrecioT()">
        </div>
        <div class="mb-3">
            <label>Precio Total</label>
            <input type="number" class="form-control" name="Total" readonly>
        </div>
        <button type="submit" class="btn btn-outline-dark">Enviar</button>
    </form>
@endsection
<script>
    function PrecioT(){
        var cantidadT = document.sales.Cantidad.value;
        var precioU = document.sales.Precio.value;

        try{
            document.sales.Total.value = (cantidadT * precioU)
        } catch (e){

        }
    }
</script>
