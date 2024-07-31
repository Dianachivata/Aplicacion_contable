@extends('dashboard.master')
@section('titulo','Estados financieros')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>Estados financieros</h1>
    <br>
    <a href="{{url('dashboard/financial_statement/create')}}"class="btn btn-primary btn-sm">Nuevo estado financiero</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Fecha</th>
                <th>Ingresos</th>
                <th>Gastos</th>
                <th>Utilidades</th>
                <th>Orden de compra</th>
                <th>Descripcion</th>
                <th>FechaCreacion</th>
                <th>FechaActualizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($financial_statement as $financial_statement)
            <tr>
                <td scope="row">{{$financial_statement->id}}</td>
                <td>{{$financial_statement->Date}}</td>
                <td>{{$financial_statement->Incomes}}</td>
                <td>{{$financial_statement->Expenses}}</td>
                <td>{{$financial_statement->Utilities}}</td>
                <td>{{$financial_statement->ReceiptId}}</td>
                <td>{{$financial_statement->Description}}</td>
                <td>{{$financial_statement->created_at}}</td>
                <td>{{$financial_statement->updated_at}}</td>
                <td>
                    <a href="{{url('dashboard/financial_statement/'.$financial_statement->id.'/edit')}}" class="bi bi-pencil"></a>
                </td>
                <td>
                    <form action="{{url('dashboard/financial_statement/'.$financial_statement->id)}}" method="post">
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