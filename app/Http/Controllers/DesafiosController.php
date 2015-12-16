<?php

namespace App\Http\Controllers;
use App\Desafio;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\DesafioRequest as DesafioRequest;
use Request;
use Carbon\Carbon;



class DesafiosController extends Controller
{	

    public function __construct(){
        $this->middleware('auth');
    }
	/* Función Principal, al ejecutar index (/desafios) se muestran todos los desafíos */
    public function index(){
    	//Obtener todos los desafíos y ordenarlos por fecha_creacion DESC
    	$desafios = Desafio::orderBy('fecha_creacion','desc')->published()->get();
        
    	//compact: se toman todos los registros devueltos y se convierten en un array
    	return view('desafios.index', compact('desafios'));
    
    }
    /* Función Mostrar, al ejecutar show (/desafios/$id) se muestra el desafío específico */
    public function show($id){
    	//Obtener el desafío asociado al id o mostrar un 404.
    	$desafio = Desafio::findOrFail($id);
    	//compact: se toman todos los registros devueltos y se convierten en un array
    	return view('desafios.show', compact('desafio'));
    
    }
    /* Función Crear, al ejecutar el create (/desafios/create) aparece el formulario para agregar un desafío */
    public function create(){

    	return view('desafios.create');
    
    }
    /* Función Almacenar, al ejecutar el store (/desafios (POST)) se almacenan todos los contenidos en la tabla */
    public function store(DesafioRequest $request){    
    	//Se ejecuta el create con los parámetros obtenidos del Request::all
    	//que contiene todos los campos que vienen del formulario de create()
    	$desafio = new Desafio( $request->all() );

        \Auth::user()->desafios()->save($desafio);        

    	return redirect('desafios');

    }

    public function edit($id){

        $desafio = Desafio::findOrFail($id);

        return view('desafios.edit', compact('desafio'));

    }

    public function update($id, DesafioRequest $request){

        $desafio = Desafio::findOrFail( $id );

        $desafio->update( $request->all() );

        return redirect('desafios');
    }
}
