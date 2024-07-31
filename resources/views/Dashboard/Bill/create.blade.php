@extends('dashboard.master')
@section('titulo','Nueva Factura')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Agregar Factura</h1>
    <form action="{{route('bill.store')}}" method="post">
        @csrf 
        <div class="form-group row">
            <label for="Receipt_number" class="col-sm-2 col-form-label">No. Recibo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Receipt_number" id="Receipt_number" placeholder="Ingrese el Numero del recibo">
            </div>
        </div>
        <div class="form-group row">
            <label for="Date" class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-10">
                <input type="datetime-local" class="form-control" name="Date" id="Date">
            </div>
        </div>
        <div class="form-group row">
            <label for="Article" class="col-sm-2 col-form-label">Articulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Article" id="Article" placeholder="Ingrese el nombre del Articulo">
            </div>
        </div>
        <div class="form-group row">
            <label for="Quantity" class="col-sm-2 col-form-label">Cantidad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Quantity" id="Quantity" placeholder="Ingrese la cantidad">
            </div>
        </div>
        <div class="form-group row">
            <label for="Price" class="col-sm-2 col-form-label">Precio</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Price" id="Price" placeholder="Ingrese el precio">
            </div>
        </div>
        <div class="form-group row">
            <label for="Tax" class="col-sm-2 col-form-label">Impuesto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Tax" id="Tax" placeholder="Ingrese el impuesto">
            </div>
        </div>
        <div class="form-group row">
            <label for="Total" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Total" id="Total" placeholder="Ingrese el total">
            </div>
        </div>
        <div class="form-group row">
            <label for="ReceiptId" class="col-sm-2 col-form-label">Orden de compra</label>
            <div class="col-sm-10">
                <select name="ReceiptId" id="ReceiptId" class="form-select" required>
                    <option value="">Seleccionar orden de comptra</option>
                    @foreach ($purchase_order  as $purchase_order)
                    <option value="{{$ReceiptId->id}}">{{$ReceiptId->name}}</option>   
                    @endforeach 
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Registrar</button>
                <a href="{{url('dashboard/bill')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection