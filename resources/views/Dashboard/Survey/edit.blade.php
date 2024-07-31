@extends('dashboard.master')
@section('titulo','Nueva Encuesta')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Modificar Encuesta</h1>
    <form action="{{url('dashboard/survey/'.$survey->id)}}" method="post">
        @csrf 
        @method('PUT')
        <div class="form-group row">
            <label for="Title" class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Title" id="Title" value="{{$survey->Title}}"placeholder="Titulo">
            </div>
        </div>
        <div class="form-group row">
            <label for="Description" class="col-sm-2 col-form-label">Descripcion</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="Description" id="Description" value="{{$survey->Description}}"placeholder="Descripcion"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="State" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
                <select class="form-control" name="State" id="State">
                    <option value="1"{{$survey->state == 1 ? 'selected':''}}> activo</option>
                    <option value="1"{{$survey->state == 0 ? 'selected':''}}> inactivo </option>
                </select>    
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <a href="{{url('dashboard/survey')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection