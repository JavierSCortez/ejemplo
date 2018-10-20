<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
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
      $request->validate([
        'materia' => 'required|min:5',
        'seccion' => 'required|max:5',
        'crn' => 'required|integer',
        'salon' => 'required'
      ]);
        // $materia = $_POST['materia'], con request seria $materia = $request -> $materia;
        // insertar a base de datos
        // redireccionar
      /*$materia = new Materia();
      $materia->user_id = \Auth::id();
      $materia->materia = $request->input('materia');
      $materia->seccion = $request->input('seccion');
      $materia->crn = $request->input('crn');
      $materia->salon = $request->input('salon');
      $materia->save();
      
      return redirect()->route('materia.index');*/
      //dd($request->all());
      
      //dd(\Auth::user());
      
      // Guardar con relacion utilizando metodo save
      $materia = new Materia($request->all());
      
      $user = User::find(\Auth::id());
      
      $user->materias()->save($materia);
      
      // Debe estar $fillable o $guarded declarados en el Modelo
      /*$request->merge(['user_id' => \Auth::id()]);
      Materia::create($request->all());*/
      
      return redirect()->route('materia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materium) // Materia $materium -> inyeccion de objetos en metodos (metodo alternativo a $id)
    {
          // Buscar materia con id
          //dd($id);
          //$miMateria = Materia::find($id);
          //return view('materias.showMateria', compact($materium->id)); // compact pasa la variable a la vista, otro parecido, comando with
          return view('materias.showMateria')->with(['materia'=>$materium]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materium)
    {
         // consultar materia con id correspondiente
        //return view('materias.formEditMaterias', compact('id'));
      //dd($materium);
        return view('materias.formMaterias')->with(['materia' => $materium]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materium)
    {
        // validacion
        // $materia = $_POST['materia'];
        // actualizar la base de datos
        // redireccionar /materia/show/999 (999 es un ejemplo de $id)
      /*$materium->materia = $request->input('materia');
      $materium->seccion = $request->input('seccion');
      $materium->crn = $request->input('crn');
      $materium->salon = $request->input('salon');
      $materium->save();*/
      
      Materia::where('id', $materium->id)->update($request->except('_token', '_method'));
      return redirect()->route('materia.show', $materium->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materium)
    {
        $materium->delete();
        return redirect()->route('materia.index');
    }
}
