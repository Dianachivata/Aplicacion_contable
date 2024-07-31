@extends('dashboard.master')
@section('titulo','Resultado Encuesta')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1 class="mb-4">Agregar Resultado Encuesta</h1>
    <form action="{{route('survey_result.store')}}" method="post">
        @csrf 
        <div class="form-group row">
            <label for="DateofResponse" class="col-sm-2 col-form-label">Fecha de respuesta</label>
            <div class="col-sm-10">
                <input type="datetime-local"class="form-control" name="DateofResponse" id="DateofResponse">
            </div>
        </div>
        <div class="form-group row">
            <label for="respuesta1" class="col-sm-2 col-form-label">Respuesta 1</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="respuesta1" id="respuesta1"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="respuesta2" class="col-sm-2 col-form-label">Respuesta 2</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="respuesta2" id="respuesta2"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="respuesta3" class="col-sm-2 col-form-label">Respuesta 3</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="respuesta3" id="respuesta3"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="survey" class="col-sm-2 col-form-label">Nombre de la encuesta</label>
            <div class="col-sm-10">
                <select name="survey" id="survey" class="form-select" required>
                    <option value="">Seleccionar Encuesta</option>
                    @foreach ($survey  as $survey)
                    <option value="{{$survey->id}}">{{$survey->name}}</option>   
                    @endforeach 
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Registrar</button>
                <a href="{{url('dashboard/survey_result')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection