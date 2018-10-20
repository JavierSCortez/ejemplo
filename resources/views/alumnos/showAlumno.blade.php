@extends('layouts.tema') @section('contenido')
<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> Alumnos</h1>
    <p>Subtítulo</p>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Alumnos</a></li>
  </ul>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="card card-shadow mb-4">
      <div class="card-header border-0">
        <div class="custom-title-wrap bar-primary">
          <div class="custom-title">Alumno</div>
        </div>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <th>Nombre</th>
            <th>Codigo</th>
            <th>Carrera</th>
          </thead>
          <tbody>
            <tr>
              <td>{{ $alumno->nombre }}</td>
              <td>{{ $alumno->codigo }}</td>
              <td>{{ $alumno->carrera }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card card-shadow mb-4">
      <div class="card-body">
        {!! Form::open(['route' => ['alumno.materia.store', $alumno->id]]) !!} {!! Form::label('materias', 'Materias') !!}
        <select name="materias" class="form-control">
          @foreach($materias as $materia)
            <option value="{{ $materia->id }}">{{ $materia->materia }}</option>
          @endforeach
        </select>
          {!! Form::submit('Aceptar', ['class' => 'btn btn-sm btn-success']) !!}
        {!! Form::close() !!}
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card card-shadow mb-4">
            <div class="card-header border-0">
              <div class="custom-title-wrap bar-primary">
                <div class="custom-title">Materias que cursa</div>
              </div>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <!--<th>ID</th>-->
                  <th>Materia</th>
                  <th>Sección</th>
                  <th>CRN</th>
                  <th>Salón</th>
                  <th>Acción</th>
                </thead>
                <tbody>
                  @foreach($alumno->materias as $materia)
                  <tr>
                    <!--<td> <a class="btn btn-sm btn-info" href="{{route('materia.show', $materia->id)}}">{{ $materia->id }}</a></td>-->
                    <td>{{ $materia->materia }}</td>
                    <td>{{ $materia->seccion }}</td>
                    <td>{{ $materia->crn }}</td>
                    <td>{{ $materia->salon }}</td>
                    <!--<td>{{ !empty($materia->user) ? $materia->user->nombre : '' }}</td>-->
                  
                    <td>
                      <form action="{{ route('alumno.materia.destroy', [$alumno->id, $materia->id]) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">
                          Eliminar
                        </button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection