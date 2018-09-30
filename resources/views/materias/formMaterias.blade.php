@extends('layouts.tema')

@section('contenido')
<div class="row">
        <div class="col-md-12">
         <form action="{{action('MateriaController@store')}}" method="POST">
          {{csrf_field()}}
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form>
                  <div class="form-group">
                    <label for="materia">Materia</label>
                    <input name="materia" class="form-control" type="text" placeholder="Escribe el nombre de la materia"><small class="form-text text-muted"> Sus alumnos podran inscribirse a su materia.</small>
                  </div>
                  <div class="form-group">
                    <label for="seccion">Seccion</label>
                    <input name="seccion" class="form-control" type="text">
                  </div>
                  <div class="form-group">
                    <label for="crn">CRN</label>
                    <input name="crn" class="form-control" type="text" placeholder="CRN/NRC">
                  </div>
                  <div class="form-group">
                    <label for="salon">Salon</label>
                    <input name="salon" class="form-control" type="text" placeholder="Salon">
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
