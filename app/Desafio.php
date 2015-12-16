<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Desafio extends Model
{
	/* Desactivar los campos published_at & updated_at que vienen por defecto */
	public $timestamps = false;

	/* Campos editables directamente por el usuario */
	/* Ej. El ID no debería ser directamente editable */
    protected $fillable = [
        'nombre',
    	'user_id',
    	'titulo',
    	'mision',
    	'contenido',
    	'video_url',
    	'fecha_creacion'

    ];

    protected $dates = ['fecha_creacion'];
    
    public function scopePublished($query){

    	$query->where('fecha_creacion', '<=', Carbon::now());

    }

    public function scopeUnpublished($query){

    	$query->where('fecha_creacion', '>', Carbon::now());

    }

    /* Corregir fecha de creación del Desafío y agregar la hora utilizando Carbon/Carbon */
    public function setFechaCreacionAttribute( $date ){
    	// Se recibe fecha_creacion y su valor es modificado por Carbon
    	// agregandole la hora, de ser una fecha en el futuro la hora queda
    	// establecida a las 00:00
    	$this->attributes['fecha_creacion'] = Carbon::parse($date);
    
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
