@extends('layouts.tema')

@section('contenido')
<div class="row">
        <div class="col-md-12">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          @if(isset($materia))
              {!! Form::model($materia, ['route' => ['materia.update', $materia->id], 'method' => 'PATCH']) !!}
              <!-- <form action="{{route('materia.update', $materia->id)}}" method="POST">
              <input type="hidden" name="_methos" value="PATCH"> -->
          @else
                {!! Form::open(['route' => 'materia.store']) !!}
                <!-- <form action="{{route('materia.store')}}" method="POST"> -->
          @endif
         <!-- <form action="{{action('MateriaController@store')}}" method="POST"> -->
          {{-- csrf_field() --}}
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form>
                  <div class="form-group">
                    <label for="materia">Materia</label>
                    {!! Form::text('materia', null, ['class' => 'form-control', 'placeholder' => 'Escribe el nombre de la materia']) !!}
                    <!-- <input name="materia" value="{{isset($materia) ? $materia->materia : ''}}"  class="form-control" type="text" placeholder="Escribe el nombre de la materia"> -->
                    <small class="form-text text-muted"> Sus alumnos podran inscribirse a su materia.</small> 
                  </div>
                  <div class="form-group">
                    <label for="seccion">Seccion</label>
                    {!! Form::text('seccion', null, ['class' => 'form-control']) !!}
                    <!-- <input name="seccion" class="form-control" type="text"> -->
                  </div>
                  <div class="form-group">
                    <label for="crn">CRN</label>
                    {!! Form::text('crn', null, ['class' => 'form-control', 'placeholder' => 'CRN/NRC']) !!}
                    <!-- <input name="crn" class="form-control" type="text" placeholder="CRN/NRC"> -->
                  </div>
                  <div class="form-group">
                    <label for="salon">Salon</label>
                    {!! Form::text('salon', null, ['class' => 'form-control', 'placeholder' => 'Aula']) !!}
                    <!-- <input name="salon" class="form-control" type="text" placeholder="Salon"> -->
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
