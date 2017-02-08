<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = "Directores";

    protected $fillable = ['id','nomina', 'nombre', 'apellido', 'emailItesm', 'emailPersonal', 'foto', 'campus'];

    public function profesores()
    {
    	return $this->hasMany(Profesor::class, 'idDirector');
    }

    public function campus()
    {
        return $this->belongsTo('App\Campus', 'id');
    }
}
