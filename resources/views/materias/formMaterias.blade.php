@extends('layouts.app')

@section('content')
<form action="/materia/store" method="POST">
  <label for="materia">Materia: </label>
  <input type="text" name="materia">
  <input type="submit" name="Guardar">
</form>
@endsection
