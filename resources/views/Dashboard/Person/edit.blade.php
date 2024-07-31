@extends('dashboard.master')
@section('titulo','Nuevo registro')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Modificar Registro</h1>
    <form action="{{url('dashboard/person/'.$person->id)}}" method="post">
        @csrf 
        @method('PUT')
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
                <input type="text" class="form-control" name="First_Name" id="First_Name" value="{{$person->First_Name}}"placeholder="Nombre">
            </div>
        </div>
        <div class="form-group row">
            <label for="Last_Name" class="col-sm-2 col-form-label">Apellidos</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Last_Name" id="Last_Name" value="{{$person->Last_Name}}" placeholder="Apellido">
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
                <input type="text" class="form-control" name="Document_Number" id="Document_Number" value="{{$person->Document_Number}}" placeholder="Numero de documento">
            </div>
        </div>
        <div class="form-group row">
            <label for="Adress" class="col-sm-2 col-form-label">Direccion de residencia</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="Adress" id="Adress"> "{{$person->Adress}}"</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="Phone" class="col-sm-2 col-form-label">Numero de telefono</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Phone" id="Phone" value="{{$person->Phone}}" placeholder="Numero de telefono">
            </div>
        </div>
        <div class="form-group row">
            <label for="Email" class="col-sm-2 col-form-label">Correo electronico</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Email" id="Email" value="{{$person->Email}}" placeholder="Correo electyronico">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{url('dashboard/person')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection