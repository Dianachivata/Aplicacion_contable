@extends('dashboard.master')
@section('titulo','Nuevo Estado financiero')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Estados financieros</h1>
    <form action="{{route('financial_statement.store')}}" method="post">
        @csrf 
        <div class="form-group row">
            <label for="Date" class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" name="Date" id="Date">
            </div>
        </div>
        <div class="form-group row">
            <label for="Incomes" class="col-sm-2 col-form-label">Ingresos</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Incomes" id="Incomes" placeholder="Ingresos">
            </div>
        </div>
        <div class="form-group row">
            <label for="Expenses" class="col-sm-2 col-form-label">Gastos</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Expenses" id="Expenses" placeholder="Ingrese los gastos">
            </div>
        </div>
        <div class="form-group row">
            <label for="Utilities" class="col-sm-2 col-form-label">Utilidades</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Utilities" id="Utilities" placeholder="Utilidades">
            </div>
        </div>
        <div class="form-group row">
            <label for="purchase_order" class="col-sm-2 col-form-label">Orden de compra</label>
            <div class="col-sm-10">
                <select name="purchase_order" id="purchase_order" class="form-select" required>
                    <option value="">Seleccionar Orden de compra</option>
                    @foreach ($purchase_order  as $purchase_order)
                    <option value="{{$purchase_order->id}}">{{$purchase_order->name}}</option>   
                    @endforeach 
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="Description">Descripcion</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="Description" id="Description"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Registrar</button>
                <a href="{{url('dashboard/financial_statement')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection