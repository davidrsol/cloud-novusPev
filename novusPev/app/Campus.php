<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $table = "campus";

    protected $fillable = ['id', 'nombre', 'activo'];

    public function departamentos()
    {
    	return $this->belongsToMany('App\Departamentos', 'campus_departamento');
    }

    public function profesores()
    {
        return $this->hasMany(Profesor::class, 'campus');
    }

    public function directores()
    {
        return $this->hasMany('App\Director');
    }
}
