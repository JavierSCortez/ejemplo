<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = ['user_id', 'materia', 'seccion', 'crn', 'salon'];
    //protected $guarded = ['id', 'created_at', 'updated_at'];
  
    public function user()
    {
        return $this->belongsTo('App\User');
    }
  
  public function alumnos() 
  {
    return $this->belongsToMany(Alumno::class);
  }
}
