@extends('dashboard.master')
@section('titulo','Resultado de encuestas')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>Resultado Encuesta</h1>
    <br>
    <a href="{{url('dashboard/survey_result/create')}}"class="btn btn-primary btn-sm">Nueva encuesta</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Fecha del resultado</th>
                <th>Respuesta 1</th>
                <th>Respuesta 2</th>
                <th>Respuesta 3</th>
                <th>Nombre de la encuesta</th>
                <th>FechaCreacion</th>
                <th>FechaActualizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($survey_result as $survey_result)
            <tr>
                <td scope="row">{{$survey_result->id}}</td>
                <td>{{$survey_result->DateofResponse}}</td>
                <td>{{$survey_result->respuesta1}}</td>
                <td>{{$survey_result->respuesta2}}</td>
                <td>{{$survey_result->respuesta3}}</td>
                <td>{{$survey_result->SurveyId}}</td>
                <td>{{$survey_result->created_at}}</td>
                <td>{{$survey_result->updated_at}}</td>
                <td>
                    <a href="{{url('dashboard/survey_result/'.$survey_result->id.'/edit')}}" class="bi bi-pencil"></a>
                </td>
                <td>
                    <form action="{{url('dashboard/survey_result/'.$survey_result->id)}}" method="post">
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