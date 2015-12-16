<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aprender extends Model
{
    public $table = "aprender";
    /* Desactivar los campos published_at & updated_at que vienen por defecto */
	public $timestamps = false;

	/* Campos editables directamente por el usuario */
	/* Ej. El ID no debería ser directamente editable */
    protected $fillable = [
        'nombre',
    	'contenido',
    	'actividad_id'
    ];

    public function actividad(){
    	return $this->belongsTo('App\Actividad');
    }

}
