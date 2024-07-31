@extends('dashboard.master')
@section('titulo','Nueva Encuesta')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Agregar Encuesta</h1>
    <form action="{{route('survey.store')}}" method="post">
        @csrf 
        <div class="form-group row">
            <label for="Title" class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Title" id="Title" placeholder="Ingrese el titulo">
            </div>
        </div>
        <div class="form-group row">
            <label for="Description" class="col-sm-2 col-form-label">Descripcion</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="Description" id="Description"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="State" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
               <select class="form-control" name="State" id="State">
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
                </select>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
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