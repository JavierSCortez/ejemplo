<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Auth::routes();

Route::get('/materias', 'MateriaController@index');
Route::get('/materia/listado', 'MateriaController@index');
Route::get('/materia/create', 'MateriaController@create');
Route::get('/materia/show/{id}', 'MateriaController@show');
Route::get('/materia/edit/{id}', 'MateriaController@edit');
Route::get('/materia/update', 'MateriaController@update');
Route::resource('materia', 'MateriaController');


Route::get('/alumnos', 'AlumnoController@index');
Route::get('/dependencias', 'DependenciaController@index');
Route::get('/empleados', 'EmpleadoController@index');
Route::get('/roles', 'RolController@index');

//Route::get('/home', 'HomeController@index')->name('home');

/*
Primer opcion para rutas "no se recomienda su uso"
Route::get('/materias', function(){
  return 'Ruta: Materias';
});*/

/*Route::get('/materias', function(){
  return view('materias.indexMaterias');
});*/

/*
Route::get('/materia/listado', function(){
  // consultar tabla materias
  return view('materias.indexMaterias');
});
Route::get('/materia/create', function(){
  return view('materias.formMaterias');
});
Route::post('/materia/store', function(){
  // validacion
  // $materia = $_POST['materia'];
  // insertar a base de datos
  // redireccionar
});
Route::get('/materia/show/{id}', function($id){ // {id?} parametro opcional, agregar valor por defecto en el parametro function($id = null)
  // Buscar materia con id
  //dd($id);
  return view('materias.showMateria', compact('id')); // compact pasa la variable a la vista, otro parecido, comando with
});

Route::get('/materia/update/{id}', function($id){
  // consultar materia con id correspondiente
  return view('materias.formEditMaterias', compact('id'));
});
Route::post('/materia/update/{id}', function($id){
  // validacion
  // $materia = $_POST['materia'];
  // actualizar la base de datos
  // redireccionar /materia/show/999 (999 es un ejemplo de $id)
});
*/