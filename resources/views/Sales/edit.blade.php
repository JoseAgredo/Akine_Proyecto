@extends('plantillaweb')

@section('home_web')
    <h2>Edicion de Datos {{ $sale->id }}</h2>
    <form action="{{route('sales.update', $sale)}}" name="sales" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label>Modificar Comprador</label>
            <select name="Comprador" class="form-control">
                @foreach ($clients as $client)
                    <option value="{{$client->id}}">{{$client->Nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Modificar Producto</label>
            <select name="Producto" class="form-control">
                @foreach ($products as $product)
                    <option value="{{$product->id}}">{{$product->Nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Modificar Fecha</label>
            <input type="date" class="form-control" name="Fecha" value="{{$sale->Fecha}}">
        </div>
        <div class="mb-3">
            <label>Cantidad</label>
            <input type="number" class="form-control" name="Cantidad" value="{{$sale->Cantidad}}" onkeyup="PrecioT()">
        </div>
        <div class="mb-3">
            <label>Precio</label>
            <input type="number" class="form-control" name="Precio" value="{{$sale->Precio}}" onkeyup="PrecioT()">
        </div>
        <div class="mb-3">
            <label>Total</label>
            <input type="number" class="form-control" name="Total" value="{{$sale->Total}}" readonly>
        </div>

        <button type="submit" class="btn btn-outline-dark">Guardar</button>
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
