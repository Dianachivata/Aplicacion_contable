@extends('dashboard.master')
@section('titulo','Facturas')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>Facturas</h1>
    <br>
    <a href="{{url('dashboard/bill/create')}}"class="btn btn-primary btn-sm">Nueva factura</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>No. Recibo</th>
                <th>Fecha</th>
                <th>Articulo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Impuesto</th>
                <th>Total</th>
                <th>Orden de compra</th>
                <th>FechaCreacion</th>
                <th>FechaActualizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bill as $bill)
            <tr>
                <td scope="row">{{$bill->id}}</td>
                <td>{{$bill->Receipt_number}}</td>
                <td>{{$bill->Date}}</td>
                <td>{{$bill->Article}}</td>
                <td>{{$bill->Quantity}}</td>
                <td>{{$bill->Price}}</td>
                <td>{{$bill->Tax}}</td>
                <td>{{$bill->Total}}</td>
                <td>{{$bill->ReceiptId}}</td>
                <td>{{$bill->created_at}}</td>
                <td>{{$bill->updated_at}}</td>
                <td>
                    <a href="{{url('dashboard/bill/'.$bill->id.'/edit')}}" class="bi bi-pencil"></a>
                </td>
                <td>
                    <form action="{{url('dashboard/bill/'.$bill->id)}}" method="post">
                    @method("DELETE")
                    @csrf 
                    <button class="bi bi-eraser-fill" type="submit" ></button>
                    </form>
                </td>
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection