<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComicPagina extends Model
{
    public $table = "comics_paginas";
    /* Desactivar los campos published_at & updated_at que vienen por defecto */
	public $timestamps = false;

	/* Campos editables directamente por el usuario */
	/* Ej. El ID no debería ser directamente editable */
    protected $fillable = [
        'url_img',
    	'posicion',
    	'comic_id'
    ];

    public function comic(){
    	return $this->belongsTo('App\Comic');
    }
}
