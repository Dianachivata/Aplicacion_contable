@extends('dashboard.master')
@section('titulo','Nuevo Registro')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Agregar Registro</h1>
    <form action="{{route('person.store')}}" method="post">
        @csrf 
        <div class="form-group row">
            <label for="Type" class="col-sm-2 col-form-label">Seleccione una opcion</label>
            <div class="col-sm-10">
                <select class="form-control" name="Type" id="Type">
                    <option value="Empresa">Empresa</option>
                    <option value="Persona Natural">Persona Natural</option>
                    <option value="Proveedor">Proveedor</option>
                    <option value="Empleado">Empleado</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="First_Name" class="col-sm-2 col-form-label">Nombres</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="First_Name" id="First_Name" placeholder="Ingrese el nombre">
            </div>
        </div>
        <div class="form-group row">
            <label for="Last_Name" class="col-sm-2 col-form-label">Apellidos</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Last_Name" id="Last_Name" placeholder="Ingrese apellidos">
            </div>
        </div>
        <div class="form-group row">
            <label for="Document_Type" class="col-sm-2 col-form-label">Tipo de documento</label>
            <div class="col-sm-10">
                <select class="form-control" name="Document_Type" id="Document_Type">
                    <option value="">Seleccione el tipo de documento</option>
                    <option value="CC">C.C.</option>
                    <option value="TI">T.I.</option>
                    <option value="Pasaporte">Pasaporte</option>
                    <option value="Nit">Nit</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="Document_Number" class="col-sm-2 col-form-label">Numero de documento</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Document_Number" id="Document_Number" placeholder="Ingrese numero de documento">
            </div>
        </div>
        <div class="form-group row">
            <label for="Adress" class="col-sm-2 col-form-label">Direccion de residencia</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Adress" id="Adress" placeholder="Ingrese direccion de residencia">
            </div>
        </div>
        <div class="form-group row">
            <label for="Phone" class="col-sm-2 col-form-label">Numero de telefono</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Phone" id="Phone" placeholder="Ingrese numero de telefono">
            </div>
        </div>
        <div class="form-group row">
            <label for="Email" class="col-sm-2 col-form-label">Correo electronico</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Email" id="Email" placeholder="Ingrese numero de documento">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Registrar</button>
                <a href="{{url('dashboard/person')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection