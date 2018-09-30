<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $materias = Materia::all();  
      return view('materias.indexMaterias', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materias.formMaterias');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validacion
        // $materia = $_POST['materia'], con request seria $materia = $request -> $materia;
        // insertar a base de datos
        // redireccionar
      $materia = new Materia();
      $materia->materia = $request->input('materia');
      $materia->seccion = $request->input('seccion');
      $materia->crn = $request->input('crn');
      $materia->salon = $request->input('salon');
      $materia->save();
      
      return redirect()->route('materia.index');
      //dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          // Buscar materia con id
          //dd($id);
          return view('materias.showMateria', compact('id')); // compact pasa la variable a la vista, otro parecido, comando with
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $id)
    {
         // consultar materia con id correspondiente
        return view('materias.formEditMaterias', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $id)
    {
        // validacion
        // $materia = $_POST['materia'];
        // actualizar la base de datos
        // redireccionar /materia/show/999 (999 es un ejemplo de $id)
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        //
    }
}
