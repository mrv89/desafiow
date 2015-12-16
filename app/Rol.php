<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public $table = "roles";
    /* Desactivar los campos published_at & updated_at que vienen por defecto */
	public $timestamps = false;

	/* Campos editables directamente por el usuario */
	/* Ej. El ID no debería ser directamente editable */
    protected $fillable = [
        'nombre',
    	'jerarquia',
    	'descripcion'
    ];

    
}
