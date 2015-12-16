<?php

namespace App\Http\Controllers;
use App\Actividad;
use App\Desafio;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ActividadesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    	
    	$actividades = Actividad::orderBy('id','desc')->get();
    	
    	return view('actividades.index', compact('actividades'));
    
    }
    
    public function show($id){
    
    	$actividad = Actividad::findOrFail($id);
    
    	return view('actividades.show', compact('actividad'));
    
    }

    public function create(){
    
    	$desafios = Desafio::lists('nombre','id');
    
    	return view('actividades.create', compact('desafios'));
    
    }

    public function store( Request $request ){    
    	
    	Actividad::create( $request->all() );

    	return redirect('actividades');

    }

    public function edit($id){

        
        $actividad = Actividad::findOrFail($id);
        
        $desafios = Desafio::lists('nombre','id');
        
        return view('actividades.edit', compact('actividad', 'desafios'));

    }

    public function update($id, Request $request){

        $actividad = Actividad::findOrFail( $id );

        $actividad->update( $request->all() );

        return redirect('actividades');
    }
}
