@extends('dashboard.master')
@section('titulo','Nueva Orden de compra')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Modificar Orden de compra </h1>
    <form action="{{url('dashboard/purchase_order/'.$purchase_order->id)}}" method="post">
        @csrf 
        @method('PUT')
        <div class="form-group row">
            <label for="Code" class="col-sm-2 col-form-label">Codigo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Code" id="Code" value="{{$purchase_order->Code}}"placeholder="Codigo">
            </div>
        </div>
        <div class="form-group row">
            <label for="Name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Name" id="Name" value="{{$purchase_order->Name}}" placeholder="Ingrese el nombre">
            </div>
        </div>
        <div class="form-group row">
            <label for="Sale_Price" class="col-sm-2 col-form-label">Precio</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Sale_Price" id="Sale_Price" value="{{$purchase_order->Sale_Price}}" placeholder="Ingrese el precio">
            </div>
        </div>
        <div class="form-group row">
            <label for="Stock" class="col-sm-2 col-form-label">Cantidad disponible</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Stock" id="Stock" value="{{$purchase_order->Stock}}" placeholder="Ingrese la cantidad disponible">
            </div>
        </div>
        <div class="form-group row">
            <label for="Description">Descripcion</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="Description" id="Description" value="{{$purchase_order->Description}} "placeholder="Descripcion"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="State">Estado</label>
            <div class="col-sm-10">
                <select class="form-control" name="State" id="State">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="person" class="col-sm-2 col-form-label">Usuario</label>
            <div class="col-sm-10">
                <select name="person" id="person" class="form-select" required>
                    <option value="">Seleccionar usuario</option>
                    @foreach ($person  as $person)
                    <option value="{{$person->id}}">{{$person->name}}</option>   
                    @endforeach 
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{url('dashboard/purchase_order')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection