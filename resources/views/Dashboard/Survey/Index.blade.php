@extends('dashboard.master')
@section('titulo','Encuestas')
@include('layouts/navigation')
@section('contenido')
<div class="container py-4">
    <h1>Encuesta</h1>
    <br>
    <a href="{{url('dashboard/survey/create')}}"class="btn btn-primary btn-sm">Nueva encuesta</a>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>FechaCreacion</th>
                <th>FechaActualizacion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($survey as $survey)
            <tr>
                <td scope="row">{{$survey->id}}</td>
                <td>{{$survey->Title}}</td>
                <td>{{$survey->Description}}</td>
                <td>{{$survey->State ?_('activo'):_('inactivo')}}</td>
                <td>{{$survey->created_at}}</td>
                <td>{{$survey->updated_at}}</td>
                <td>
                    <a href="{{url('dashboard/survey/'.$survey->id.'/edit')}}" class="bi bi-pencil"></a>
                </td>
                <td>
                    <form action="{{url('dashboard/survey/'.$survey->id)}}" method="post">
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