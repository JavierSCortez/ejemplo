@extends('layouts.tema')

@section('contenido')
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Materias de {{ $user->nombre }}</h1>
        <p>Subtítulo</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fa fa-home fa-lg">/</i></li>
        <li class="breadcrumb-item"><a href="{{route('materia.index')}}">Materias</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-shadow mb-4">
            <div class="card-header border-0">
                <div class="custom-title-wrap bar-primary">
                    <div class="custom-title">Listado Materias</div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Materia</th>
                        <th>Sección</th>
                        <th>CRN</th>
                        <th>Salón</th>
                        <th>Usuario</th>
                    </thead>
                    <tbody>
                        @foreach($user->materias as $materia)
                            <tr>
                                <td> <a class="btn btn-sm btn-info" href="{{route('materia.show', $materia->id)}}">{{ $materia->id }}</a></td>
                                <td>{{ $materia->materia }}</td>
                                <td>{{ $materia->seccion }}</td>
                                <td>{{ $materia->crn }}</td>
                                <td>{{ $materia->salon }}</td>
                                <td>{{ !empty($materia->user) ? $materia->user->nombre : '' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
