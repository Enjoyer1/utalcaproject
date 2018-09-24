<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = ['nombre','apellido1','apellido2','genero','RUN','email','celular','colegio_id','curso_id'];


    public function colegios()
    {
        return  $this->belongsTo('App\Colegio');
    }

    public function cursos()
    {
        return  $this->belongsTo('App\Curso');
    }
    public function carreras()
    {
        return  $this->belongsToMany('App\Carrera','Preferencias')->withPivot('posicion');
    }
    public function pasantias()
    {
        return  $this->belongsToMany('App\Pasantia','Asistencias')->withPivot('asistencia','date');
    }

}
