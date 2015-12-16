<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Actividad extends Model
{
    public $table = "actividades";
    /* Desactivar los campos published_at & updated_at que vienen por defecto */
	public $timestamps = false;

	/* Campos editables directamente por el usuario */
	/* Ej. El ID no debería ser directamente editable */
    protected $fillable = [
        'nombre',
    	'desafio_id'
    ];

    public function desafio(){
    	return $this->belongsTo('App\Desafio');
    }
    
}
