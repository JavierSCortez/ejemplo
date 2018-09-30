@extends('layouts.tema')

@section('contenido')
<div class="row">
        <div class="col-md-12">
         <form action="{{action('AlumnoController@store')}}" method="POST">
          {{csrf_field()}}
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form>
                  <div class="form-group">
                    <label for="nombre">Alumno</label>
                    <input name="nombre" class="form-control" type="text" placeholder="Escribe el nombre del alumno">
                    <small class="form-text text-muted"> Nombre completo.</small>
                  </div>
                  <div class="form-group">
                    <label for="codigo">Codigo</label>
                    <input name="codigo" class="form-control" type="number">
                  </div>
                  <div class="form-group">
                    <label for="carrera">Carrera</label>
                    <input name="carrera" class="form-control" type="text" placeholder="Ingenieria en ...">
                  </div>
                  
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit">Aceptar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
