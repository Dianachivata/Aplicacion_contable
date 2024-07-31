@extends('dashboard.master')
@section('titulo','Orden de compra')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>Orden de compra</h1>
    <br>
    <a href="{{url('dashboard/purchase_order/create')}}"class="btn btn-primary btn-sm">Nueva Orden de compra</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad disponible</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Usuario</th>
                <th>FechaCreacion</th>
                <th>FechaActualizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($purchase_order as $purchase_order)
            <tr>
                <td scope="row">{{$purchase_order->id}}</td>
                <td>{{$purchase_order->Code}}</td>
                <td>{{$purchase_order->Name}}</td>
                <td>{{$purchase_order->Sale_Price}}</td>
                <td>{{$purchase_order->Stock}}</td>
                <td>{{$purchase_order->Description}}</td>
                <td>{{$purchase_order->State ?_('activo'):_('inactivo')}}</td>
                <td>{{$purchase_order->UserId}}</td>
                <td>{{$purchase_order->created_at}}</td>
                <td>{{$purchase_order->updated_at}}</td>
                <td>
                    <a href="{{url('dashboard/purchase_order/'.$purchase_order->id.'/edit')}}" class="bi bi-pencil"></a>
                </td>
                <td>
                    <form action="{{url('dashboard/purchase_order/'.$purchase_order->id)}}" method="post">
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